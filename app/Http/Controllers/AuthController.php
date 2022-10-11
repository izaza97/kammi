<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AuthController extends Controller
{
    public function register(){
        $client = new Client();
        // $response = $client->request('POST','http://192.168.138.209:3000/register', [
        //     "name" => 'test',
        //     "username" => 'test3',
        //     "email" => 'apa@gmail.com',
        //     "password" => 'test212',
        //     "img" => '1',
        // ]);
        // $response->getStatusCode();
        // $response->getBody()->getContents();

        // return view('register');

        //Get data from Form
        $name = $_POST;
        $username = $_POST;
        $email = $_POST;
        $password = $_POST;
        $img = $_POST;
        //Set up POST array
        $register = array (
            "name" => $name,
            "username" => $username,
            "email" => $email,
            "password" => $password,
            "img" => $img,
        );

        function http_build_headers($headers){
            $headers_brut = '';
            foreach( $headers as $name => $value ) {
                    $headers_brut .= $name . ': ' . $value . "\r\n";
            }
            return $headers_brut;
        }
        $content = http_build_query( $register );

        $headers = http_build_headers( array (
            'content-type' => 'application/json',
        ));
        $options = array('http' => array(
            'method' => 'POST',
            'content' => $content,
            'header' => $headers
        ));

        $context = stream_context_create($options);

        $return = file_get_contents('http://192.168.138.209:3000/register', false, $context);
    }
}
