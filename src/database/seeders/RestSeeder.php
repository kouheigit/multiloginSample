<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restdata;

class RestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $rest =[
            'message'=>'Google Japan',
            'url'=>'https://www.google.com/?hl=ja',
        ];
        Restdata::create($rest);
    }
}
