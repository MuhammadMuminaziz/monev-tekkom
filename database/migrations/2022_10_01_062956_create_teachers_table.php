<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id');
            $table->foreignId('district_id');
            $table->foreignId('user_id');
            $table->string('teacher_name');
            $table->string('username')->unique();
            $table->string('employment_status')->default('PNS');
            $table->integer('nip')->nullable();
            $table->integer('nuptk');
            $table->string('place_of_birth');
            $table->date('date_of_birth')->nullable();
            $table->enum('religion', ['Islam', 'Katolik', 'Kristen', 'Hindu', 'Budha', 'Lainnya'])->default('Kristen');
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->default('Laki-laki');
            $table->enum('last_education', ['SMA', 'D1', 'D2', 'D3' . 'D4', 'S1', 'S2', 'S3'])->default('S1');
            $table->string('tmt_pns_tahun');
            $table->string('tmt_pns_bulan');
            $table->string('class');
            $table->string('tmt_class_tahun');
            $table->string('tmt_class_bulan');
            $table->string('School_Origin');
            $table->string('phone');
            $table->string('provinsi')->default('Maluku');
            $table->string('subjects_taught');
            $table->enum('certification_status', ['Sudah', 'Belum'])->default('sudah');
            $table->integer('certification_year')->nullable();
            $table->text('reason_not_certified')->nullable();
            $table->string('unbk_socialization_activities')->default('sudah');
            $table->string('unbk_socialization_activities_tahun')->nullable();
            $table->string('involvement_unbk')->default('sudah');
            $table->string('involvement_unbk_tahun')->nullable();
            $table->boolean('isActive')->default(false);
            $table->string('periode');
            $table->string('kode_kuisioner');
            $table->string('tekkom');
            $table->string('tingkatan_sekolah');
            $table->string('nama_petugas');
            $table->date('range_waktu_dari')->nullable();
            $table->date('range_waktu_sampai')->nullable();
            $table->string('analisis')->nullable();
            $table->string('nama_responden')->nullable();
            $table->date('date_responden')->nullable();
            $table->text('history_involvement_unbk')->nullable();

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
        Schema::dropIfExists('teachers');
    }
}
