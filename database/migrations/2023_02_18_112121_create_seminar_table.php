<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('หัวข้องานสัมมนา');
            $table->text('detail')->comment('รายละเอียดงาน');
            $table->string('address')->comment('ที่อยู่ จัดงาน');
            $table->foreignId('district_id')->nullable()->constrained('district')->comment('ID ตารางตำบล');
            $table->foreignId('amphure_id')->nullable()->constrained('amphure')->comment('ID ตารางอำเภอ');
            $table->foreignId('province_id')->nullable()->constrained('province')->comment('ID ตารางจังหวัด');
            $table->string('zip_code')->nullable();
            $table->text('url_invitation')->nullable()->comment('link url ส่งคำเชิญ');
            $table->foreignId('speaker_id')->constrained('speaker')->comment('ID ตารางผู้บรรยาย');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `seminar` comment 'งานสัมมนา'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seminar');
    }
}
