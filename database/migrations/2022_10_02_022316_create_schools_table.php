<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->foreignId('district_id')->nullable();
            $table->integer('kode_kuisioner')->nullable();
            $table->string('name')->nullable();
            $table->string('nama_petugas')->nullable();
            $table->string('nip')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('npsn')->nullable();
            $table->integer('siswa_per')->nullable();
            $table->integer('siswa_lak')->nullable();
            $table->integer('jumlah_siswa')->nullable();
            $table->string('unbk')->default('Belum');
            $table->string('provinsi')->default('Maluku');
            $table->string('transportasi')->nullable();
            $table->string('geografis')->nullable();
            $table->string('sosekbud')->nullable();
            $table->string('internet')->nullable();
            $table->string('bantuan_teknologi')->nullable();
            $table->string('listrik')->nullable();
            $table->string('power_suplay')->nullable();
            $table->string('durasi_listrik')->nullable();
            $table->string('laboratorium_komputer')->nullable();
            $table->string('laboratorium_multimedia')->nullable();
            $table->string('jenis_program')->nullable();
            $table->string('tahun_bantuan')->nullable();
            $table->string('lan')->nullable();
            $table->string('router')->nullable();
            $table->string('komputer')->nullable();
            $table->string('kuota_bandwidth')->nullable();
            $table->string('internet_speed')->nullable();
            $table->string('kesesuaian_kuota')->nullable();
            $table->string('alasan_tambah_kuota')->nullable();
            $table->string('saran')->nullable();
            $table->string('tingkat_sekolah')->nullable();
            $table->date('range_waktu_dari')->nullable();
            $table->date('range_waktu_sampai')->nullable();
            $table->string('analisis')->nullable();
            $table->boolean('isActive')->default(false);
            $table->string('periode')->unique();
            $table->string('tekkom')->unique();
            $table->string('nama_responden')->nullable();
            $table->string('date_responden')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
