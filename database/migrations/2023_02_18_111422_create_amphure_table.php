<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmphureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amphure', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name_th')->nullable();
            $table->string('name_en')->nullable();
            $table->foreignId('province_id')->nullable()->constrained('province');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amphure');
    }
}
