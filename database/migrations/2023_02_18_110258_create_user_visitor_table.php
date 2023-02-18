<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserVisitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_visitor', function (Blueprint $table) {
            $table->id();
            $table->string('visitor_name');
            $table->integer('visitor_age');
            $table->string('visitor_phone',100);
            $table->string('visitor_email',100)->unique();
            $table->text('detail')->nullable()->comment('รายละเอียดอื่นๆ');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `user_visitor` comment 'ผู้เยี่ยมชม'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitor');
    }
}
