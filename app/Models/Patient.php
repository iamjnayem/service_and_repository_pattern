<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}
