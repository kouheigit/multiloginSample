<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function index()
    {
        $city = 'Tokyo';
        $apykey = 'df2e1a6643997ca387ffdd46583f61c7';
        $url = "http://api.openweathermap.org/data/2.5/forecast?q=$city&appid=$apykey";
        $method = "GET";

        $client = new Client();


        $response = $client->request($method, $url);

        $data = $response->getBody();
        $data = json_decode($data, true);


       // $testdata = $data['id'];

        return response()->json($data);


        return view('weather.weather',compact('testdata'));

        /*
         * $jsonString ='{
    "firstName":"Olivia",
    "lastName":"Mason",
    "dateOfBirth":
    {
        "year":"1999",
        "month":"06",
        "day":"19"
    }
}';
$data = json_decode($jsonString, true);
echo("The first name is: \n");
echo $data['firstName'];

         */

    }
}
