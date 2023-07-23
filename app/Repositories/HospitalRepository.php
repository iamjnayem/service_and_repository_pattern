<?php 

namespace App\Repositories;

use App\Interfaces\HospitalRepositoryInterface;
use App\Services\HospitalService;

class HospitalRepository implements HospitalRepositoryInterface{

    private $hospitalService;

    public function __construct(HospitalService $hospitalService)
    {
        $this->hospitalService = $hospitalService;
    }

    public function getWorkingDoctors()
    {
        return $this->hospitalService->getWorkingDoctors();
    }

}