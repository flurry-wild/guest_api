<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            ['name' => 'Россия', 'code' => '7'],
            ['name' => 'США', 'code' => '1'],
            ['name' => 'Великобритания', 'code' => '44'],
            ['name' => 'Франция', 'code' => '33'],
            ['name' => 'Германия', 'code' => '49'],
            ['name' => 'Италия', 'code' => '39'],
            ['name' => 'Испания', 'code' => '34'],
            ['name' => 'Австралия', 'code' => '61'],
            ['name' => 'Япония', 'code' => '81'],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
