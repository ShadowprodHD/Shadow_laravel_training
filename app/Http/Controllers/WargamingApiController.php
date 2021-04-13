<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WargamingApiController extends Controller
{


    //
    // Run WargamingApi.
    //
    public function getUser(Request $request) {
        $client = new \GuzzleHttp\Client();

        $userName = 'Shadowayara';


        $url = config('wargaming.baseUrl').'/wot/account/list/?application_id='.config('wargaming.apiKey').'&search='.$userName;

        $response = $client->get($url);

        $response = json_decode((string)$response->getBody(), true);
        var_dump($response);
    }
}
