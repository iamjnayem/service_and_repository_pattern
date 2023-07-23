<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospital extends Model
{
    use HasFactory;

    public function doctors(){
        return $this->hasMany(Doctor::class);
    }

    public function patients(){
        return $this->hasMany(Patient::class);
    }
}
