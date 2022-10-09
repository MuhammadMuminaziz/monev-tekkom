<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function lembaga_bantuan()
    {
        return $this->hasMany(LembagaBantuan::class);
    }

    public function lembagaBantuan()
    {
        return $this->hasOne(LembagaBantuan::class);
    }
}
