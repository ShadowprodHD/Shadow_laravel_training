<?php

namespace App\Services\Wargaming;



use App\Services\Wargaming\Traits\QueryTrait;
use App\Services\WarGamingService;

/**
 * Account related information.
 *
 * Class Account
 * @package App\Services\Wargaming
 */
class Account {

    use QueryTrait;

    public $queryParams = [
        'search'    => 'string|length:24',
        'fields'    => 'string|list:,|limit:100',
        'language'  => 'string|length:5',
        'limit'     => 'number|limit:100',
        'type'      => 'string|searchtype'
    ];

    public function list($searchQuery) {
        try {
            if(self::requestValidator($searchQuery, $this->queryParams)) {

            }
        } catch (\Exception $e) {

        }
    }

    public function info() {

    }

    public function tanks() {

    }

    public function achievements() {

    }
}
