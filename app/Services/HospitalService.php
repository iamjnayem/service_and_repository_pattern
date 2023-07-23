<?php

namespace App\Services;

use App\Models\Doctor;

class HospitalService{

    public function getWorkingDoctors(){
        return Doctor::all();
    }
}