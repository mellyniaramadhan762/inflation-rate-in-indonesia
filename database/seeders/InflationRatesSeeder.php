<?php

namespace Database\Seeders;

use App\Models\InflationRates;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InflationRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        InflationRates::truncate();

        $csvData = fopen(base_path('database/csv/InflationRates.csv'), 'r');

        if($csvData !== false){
            while(($data = fgetcsv($csvData)) !==false){
                $rowData = [
                 'City' => $data[0],
                 '2017PercentAmount' => $data[1],
                 '2018PercentAmount' => $data[2],
                 '2019PercentAmount' => $data[3],
                 '2020PercentAmount' => $data[4],
                 '2021PercentAmount' => $data[5],
                ];
                InflationRates::create($rowData);
            }
            fclose($csvData);
        }
    }
}
