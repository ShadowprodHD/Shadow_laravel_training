<?php

namespace App\Services\Wargaming\Traits;

/**
 * Validator for wargaming types
 *
 * Trait ValidatorTrait
 * @package App\Services\Wargaming\Traits
 */
trait ValidatorTrait
{
    /**
     * validate string type.
     *
     * @param $input
     * @return bool
     */
    public function string($input)
    {
        return (strlen($input) > 0);

    }

    /**
     * validate length of input lower or equal comparison
     *
     * @param $comparison
     * @param $input
     * @return bool
     */
    public function length($comparison, $input)
    {
        return ($comparison >= $input);
    }

    /**
     * Validate list based on comparison.
     *
     * @param $comparison
     * @param $input
     */
    public function list($comparison, $input)
    {
        $listArray = explode($comparison, $input);


        return  ;
    }

    /**
     * validate integer input limit and lower or equal comparison.
     *
     * @param $comparison
     * @param $input
     * @return bool
     */
    public function limit($comparison, $input)
    {
        if(is_integer($input)) {
            return ($input <= $comparison);
        }

        return (strlen($input) < $comparison);
    }

    /**
     * Check if numbertype
     *
     * @param $input
     * @return bool
     */
    public function number($input)
    {
        return (is_int($input));
    }

    /**
     * check if this searchtype is allowed.
     *
     * @param $input
     * @return bool
     */
    public function searchtype($input)
    {
        return (in_array($input, $this->searchtype));
    }
}
