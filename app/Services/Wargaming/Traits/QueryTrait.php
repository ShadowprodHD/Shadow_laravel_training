<?php

namespace App\Services\Wargaming\Traits;

/**
 * Query data validation and type handling.
 *
 * Trait QueryTrait
 * @package App\Services\Wargaming\Traits
 */
trait QueryTrait {

    use ValidatorTrait;

    /**
     * Types of data.
     * @var array
     */
    public $types = [
        'string',
        'length',
        'list',
        'limit',
        'number',
        'searchtype',
    ];

    /**
     * SearchType data
     * @var array
     */
    public $searchType = [
        ''
    ];

    /**
     * Handles wargaming requests and searchQuery validation.
     *
     * @param $searchquery
     * @param $queryParams
     * @return array
     */
    public function requestValidator($searchQuery, $queryParams) {

        $response = [];

        foreach ($queryParams as $field => $value) {
            if(array_key_exists($field, $searchQuery)) {
                if($type = $this->checkType($field)) {
                    $response[$field] = $this->checkTypeValue($type, $value, $searchQuery[$field]);
                }
            }
        }

        return $response;
    }

    /**
     * Type Checker.
     *
     * @param $value
     * @return bool
     */
    public function checkType($value) {

        foreach ($this->types as $type) {
            if(str_contains($value, $type )) {
                return true;
            }
        }
        return false;

    }

    /**
     * Check if value isContained within the type.
     * @param $typeMethod
     * @param $comparison
     * @param $input
     * @return mixed
     */
    public function checkTypeValue($typeMethod, $comparison, $input) {
        if(str_contains($comparison, ':')) {
            $explode = explode(':', $comparison);

        }
        if(!$typeMethod === 'searchtype') {
            return self::$typeMethod($explode[1], $input);
        }
        return self::$typeMethod();
    }
}
