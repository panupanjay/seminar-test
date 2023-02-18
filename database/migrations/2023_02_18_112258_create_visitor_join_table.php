<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorJoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_join', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_visitor_id')->constrained('user_visitor')->comment('ID ตารางผู้เยี่ยมชม');
            $table->foreignId('seminar_id')->constrained('seminar')->comment('ID ตารางงานสัมมนา');
            $table->integer('type_invitation')->comment('0 user create , 1 = import csv , 2 = url_invitation');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `visitor_join` comment 'ผู้เยี่ยมชมที่เข้าร่วม'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitor_join');
    }
}
