<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $guarded = ['id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

    public function training_need_nows()
    {
        return $this->hasMany(Training::class);
    }

    public function program_teachers()
    {
        return $this->hasMany(ProgramTeacher::class);
    }

    public function competensi_teachers()
    {
        return $this->hasMany(CompetensiTeacher::class);
    }

    public function getRouteKeyName()
    {
        return 'username';
    }
}
