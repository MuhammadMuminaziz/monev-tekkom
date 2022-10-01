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
            $table->string('teacher_name');
            $table->enum('employment_status', ['PNS', 'NON-PNS'])->default('PNS');
            $table->integer('nip')->nullable();
            $table->integer('nuptk');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->enum('religion', ['Islam','Katolik','Kristen','Hindu','Budha','Lainnya'])->default('Kristen');
            $table->enum('gender',['Laki-laki','Perempuan'])->default('Laki-laki');
            $table->enum('last_education',['SMA','D1','D2','D3'.'D4','S1','S2','S3'])->default('S1');
            $table->integer('tmt_pns');
            $table->string('class');
            $table->integer('tmt_class');
            $table->string('School_Origin');
            $table->string('villages_districts');
            $table->string('city');
            $table->string('province');
            $table->string('phone');
            $table->string('subjects_taught');
            $table->text('program')->nullable();
            $table->enum('certification_status',['sudah','belum'])->default('sudah');
            $table->integer('certification_year')->nullable();
            $table->text('reason_not_certified')->nullable();
            $table->text('competencies_taught')->nullable();
            $table->enum('unbk_socialization_activities',['sudah','belum'])->default('sudah');
            $table->integer('year_unbk_socialization_activities')->nullable();
            $table->enum('involvement_unbk',['sudah','belum'])->default('sudah');
            $table->integer('year_involvement_unbk')->nullable();
            $table->text('history_involvement_unbk')->nullable();
            $table->string('name_of_training')->nullable();
            $table->enum('level',['Pemula','Lanjutan','Mahir'])->default('Pemula');
            $table->string('jampel')->nullable();
            $table->text('training_needs_now')->nullable();

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
