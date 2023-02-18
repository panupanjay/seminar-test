<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speaker', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ชื่อผู้บรรยาย');
            $table->text('detail')->nullable();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `speaker` comment 'ผู้บรรยาย'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speaker');
    }
}
