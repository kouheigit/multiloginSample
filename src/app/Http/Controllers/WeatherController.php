<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function index()
    {
        $city = 'Tokyo';
        $apykey = 'df2e1a6643997ca387ffdd46583f61c7';
        $url = "https://api.openweathermap.org/data/2.5/forecast?q=$city&units=metric&appid=$apykey";
        $method = "GET";

        $client = new Client();


        $response = $client->request($method, $url);

        $data = $response->getBody();


        $data = json_decode($data, true);

       // $datas = $data['list'][0]['main']['pressure'];


        $datas = $data['list'];//真打　



//        return response()->json($data);

        //$datas = $data['pressure'];

        /*
        return response()->json(
            [
                'data' => $datas['weather'][0]['main'],
                'icon' => $datas['weather'][0]['icon'],
            ]
        );*/




        return view('weather.weather',compact('datas'));

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
