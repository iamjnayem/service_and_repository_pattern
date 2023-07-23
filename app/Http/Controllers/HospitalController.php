<?php

namespace App\Http\Controllers;

use App\Interfaces\HospitalRepositoryInterface;

class HospitalController extends Controller
{

    private $hosptialRepository;

    public function __construct(HospitalRepositoryInterface $hospitalRepositoryInterface)
    {
        $this->hosptialRepository = $hospitalRepositoryInterface;
    }


    public function activeDoctors()
    {
        return $this->hosptialRepository->getWorkingDoctors();
    }
}
