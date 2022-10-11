<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AshusnaController extends Controller
{
    public function getData(){
        $client = new Client();
        $response = $client->request('GET','http://192.168.138.209:3000/ashusna');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $Data = json_decode($body, true);

        return view('ashusna', ['Data'=>$Data]);
    }
}
