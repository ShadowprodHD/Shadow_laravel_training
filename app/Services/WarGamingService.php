<?php

namespace App\Services;

use App\Services\WargamingApi;

/**
 * Wargaming Service handler.
 *
 * Class WarGamingService
 * @package App\Services
 */
class WarGamingService extends WargamingApi {


    protected $base = '';

    protected $key = '';

    public $routeBuild = [];

    public $search = [];

    /**
     * WarGamingService constructor.
     */
    public function __construct()
    {
        $this->base = config('wargaming.baseUrl');
        $this->key = '?application_id='.config('wargaming.apiKey');
    }

    /**
     * Request url handler, simplifying methodology to base the same methods on this service.
     *
     * @param $routeQuery
     * @param array $search
     * @return \Exception|mixed
     */
    public function requestUrl($routeQuery, $search = []) {

        try {
            $this->routeBuild = explode('.', $routeQuery);
            $this->search = $search;

            $request = self::classMethod();

            return $request;

        } catch (\Exception $e) {
            return $e;
        }

    }

    /**
     * class naming method for the wargaming api.
     *
     * @return mixed
     */
    public function classMethod() {

        $classMethod = ucfirst($this->routeBuild[0]);

        $method = $this->routeBuild[1];

        return WargamingApi::$classMethod($method, $this->search);
    }




}
