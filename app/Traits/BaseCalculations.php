<?php

namespace App\Traits;

trait BaseCalculations {

    public function times($x, $y) {
        return $x * $y;
    }

    public function devided($x, $y) {
        return $x / $y;
    }

    public function plus($x, $y) {
        return $x + $y;
    }

    public function minus($x, $y) {
        return $x - $y;
    }

    public function modulo($x, $y) {
        return $x % $y;
    }

    function ceiling($number, $significance = 1) {
        return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
    }

    function flooring($number, $significance = 1) {
        return ( is_numeric($number) && is_numeric($significance) ) ? (floor($number/$significance)*$significance) : false;
    }
}
