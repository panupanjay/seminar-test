<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function user_visitor(Request $request)
    {
        $token = $request->token;
        $title = $request->title;
        //
        if ($token == 'seminar'){
            if ($title != ""){
                $json = DB::table('seminar')
                        ->join('speaker', 'speaker.id', '=', 'seminar.speaker_id' ,'left')
                        ->select('seminar.id', 'seminar.title', 'seminar.detail','seminar.address','speaker.name as speaker_name')
                        ->where('seminar.title', $title)
                        ->first();
                $json->user_visitor = DB::table('visitor_join')->where('seminar_id', $json->id)
                        ->join('user_visitor', 'user_visitor.id', '=', 'visitor_join.user_visitor_id' ,'left')
                        ->select('user_visitor.visitor_name', 'user_visitor.visitor_age', 'user_visitor.visitor_phone','user_visitor.visitor_email')
                        ->get();
                return Response::json(array(
                    'message' => 'Success',
                    'success' => true,
                    'data' => $json),
                    200
                );
            }else{
                return Response::json(array(
                    'message' => 'Error !!! Title seminar not found.',
                    'success' => false, 
                    ),
                    200
                );
            }
        }else{
            return Response::json(array(
                'message' => 'Error !!! Token not found.',
                'success' => false,
                ),
                200
            );
        }

        
    }
}
