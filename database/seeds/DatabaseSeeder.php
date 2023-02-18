<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $name = array(
            'Mischke',
            'Serna',
            'Pingree',
            'Mcnaught',
            'Pepper',
            'Schildgen',
            'Mongold',
            'Wrona',
            'Geddes',
            'Lanz',
        );
        for($i = 0; $i < 5; $i++){
            DB::table('speaker')->insert([
                'name' => $name[$i],
                'detail' => '',
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
        //
        for($i = 5; $i < 10; $i++){
            DB::table('user_visitor')->insert([
                'visitor_name' => $name[$i],
                'visitor_age' => $i*2,
                'visitor_phone' => '0999999999',
                'visitor_email' => 'test'.$i.'@gmail.com',
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
        //
        DB::table('seminar')->insert([
            'title' => 'งานที่ 1',
            'detail' => '',
            'address' => 'เชียงใหม่ 1',
            'speaker_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('seminar')->insert([
            'title' => 'งานที่ 2',
            'detail' => '',
            'address' => 'เชียงใหม่ 2',
            'speaker_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('seminar')->insert([
            'title' => 'งานที่ 3',
            'detail' => '',
            'address' => 'เชียงใหม่ 3',
            'speaker_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
       //
        DB::table('visitor_join')->insert([
            'user_visitor_id' => 1,
            'seminar_id' => 1,
            'type_invitation' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('visitor_join')->insert([
            'user_visitor_id' => 2,
            'seminar_id' => 1,
            'type_invitation' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('visitor_join')->insert([
            'user_visitor_id' => 3,
            'seminar_id' => 1,
            'type_invitation' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('visitor_join')->insert([
            'user_visitor_id' => 4,
            'seminar_id' => 2,
            'type_invitation' => 3,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('visitor_join')->insert([
            'user_visitor_id' => 5,
            'seminar_id' => 2,
            'type_invitation' => 3,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
