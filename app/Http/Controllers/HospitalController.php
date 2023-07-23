<?php

namespace App\Http\Controllers;

use App\Services\TestService;
use Illuminate\Http\Request;

class HospitalController extends Controller
{

   public function test(TestService $testService){
    return $testService->test();
   }
}
