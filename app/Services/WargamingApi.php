<?php
namespace App\Services;

use App\Services\Wargaming\Account;
use App\Services\Wargaming\Auth;
use App\Services\Wargaming\Clanratings;
use App\Services\Wargaming\Clans;
use App\Services\Wargaming\Encyclopedia;
use App\Services\Wargaming\Globalmap;
use App\Services\Wargaming\Ratings;
use App\Services\Wargaming\Stronghold;
use App\Services\Wargaming\Tanks;


/**
 * Mapping of Class Functions for wargaming method api queries.
 *
 * Class WargamingApi
 * @package App\Services
 */
class WargamingApi {

    /**
     * Account class method, with searchQuery, for account related data.
     *
     * @param string $method
     * @param $searchQuery
     * @return mixed
     */
    public function account($method = 'list', $searchQuery) {
            return Account::$method($searchQuery);
    }

    /**
     * Auth class method, with searchQuery, to login to the wargaming Api.
     *
     * @param string $method
     * @param $searchQuery
     * @return mixed
     */
    public function auth($method = 'login', $searchQuery) {
            return Auth::$method($searchQuery);
    }

    /**
     * Stronghold class method, with searchQuery, for clan based infomation from wargaming api.
     *
     * @param string $method
     * @param $searchQuery
     * @return mixed
     */
    public function stronghold($method = 'claninfo', $searchQuery) {
            return Stronghold::$method($searchQuery);
    }

    /**
     * Globalmap class method, with searchQuery, for clan based information from wargaming api. Centered around global map.
     *
     * @param string $method
     * @param $searchQuery
     * @return mixed
     */
    public function globalmap($method = 'claninfo', $searchQuery) {
            return Globalmap::$method($searchQuery);
    }

    /**
     * Encyclopedia class method, with searchQuery, for tank and item information.
     *
     * @param string $method
     * @param $searchQuery
     * @return mixed
     */
    public function encyclopedia($method = 'tanks', $searchQuery) {
            return Encyclopedia::$method($searchQuery);
    }

    /**
     * Rating class method, with searchQuery, for wargaming api ratings.
     *
     * @param string $method
     * @param $searchQuery
     * @return mixed
     */
    public function ratings($method = 'types', $searchQuery) {
            return Ratings::$method($searchQuery);
    }

    /**
     * Clanrating class method, with searchQuery, for wargaming api clan ratings.
     *
     * @param string $method
     * @param $searchQuery
     * @return mixed
     */
    public function clanratings($method = 'types', $searchQuery) {
            return Clanratings::$method($searchQuery);
    }

    /**
     * Tanks class method, with searchQuery, for wargaming api tank related information.
     *
     * @param string $method
     * @param $searchQuery
     * @return mixed
     */
    public function tanks($method = 'stats', $searchQuery) {
            return Tanks::$method($searchQuery);
    }

    /**
     * Clans class method, with searchQuery, for clan based information.
     *
     * @param string $method
     * @param $searchQuery
     * @return mixed
     */
    public function clans($method = 'list', $searchQuery) {
            return Clans::$method($searchQuery);
    }

}
