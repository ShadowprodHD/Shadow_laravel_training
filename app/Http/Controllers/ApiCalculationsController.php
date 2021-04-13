<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiCalculationsRequest;
use Illuminate\Http\Request;
use App\Traits\Calculations;



class ApiCalculationsController extends Controller
{
    use Calculations;

    private function getCalcTypes() {
        return config('calculation-types');
    }

    public function apiCalculations(ApiCalculationsRequest $request) {
        $return = null;
        $numbers = $request->all();
        $type = $request->get('type');
        switch($type) {
            case "add":
                $return = $this->plus($numbers['number_1'], $numbers['number_2']);
                break;
            case "subtract":
                $return = $this->minus($numbers['number_1'], $numbers['number_2']);
                break;
            case "multiply":
                $return = $this->times($numbers['number_1'], $numbers['number_2']);
                break;
            case "devide":
                $return = $this->devided($numbers['number_1'], $numbers['number_2']);
                break;
            case "round-up":
                $return = $this->ceiling($numbers['number_1'], $numbers['number_2']);
                break;
            case "round-down":
                $return = $this->flooring($numbers['number_1'], $numbers['number_2']);
                break;
            case "find-primes":
                $return = $this->getAllPrimes($numbers['number_1'], $numbers['number_2']);
                break;
            case "get-first-and-last-prime":
                $return = $this->getFirstAndLastPrime($numbers['number_1'], $numbers['number_2']);
                break;
        }
        return $return;
    }

    public function getTypes() {
        return config('calculation-types');
    }
}
