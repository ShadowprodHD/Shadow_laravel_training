<?php

namespace App\Traits;

use App\Traits\BaseCalculations;

trait Calculations {

    use BaseCalculations;

    public function getAllPrimes($startNumber, $endNumber) {
        $returnArray = [];
        for($i = $startNumber; $i < $endNumber; $i++) {
            if($this->checkIfPrime($i)) {
                $returnArray[] = $i;
            }
        }
        return $returnArray;
    }

    public function checkIfPrime($number) {
        for($i = 2; $i < $number; $i++) {
            if($this->modulo($number, $i) === 0) {
                return false;
            }
        }
        return true;
    }


    public function getFirstAndLastPrime($startNumber, $endNumber) {
        $returnArray = [
            'firstPrime' => null,
            'lastPrime'  => null,
        ];

        //
        // get all primes
        //
        $primes = $this->getAllPrimes($startNumber, $endNumber);

        $returnArray['firstPrime'] = $primes[0];


        //
        // get last prime
        //
        for($i = $endNumber; $i > $startNumber; $i--) {
            $returnArray['lastPrime'] = array_reverse($primes)[0];
        }


        return $returnArray;

    }

}
