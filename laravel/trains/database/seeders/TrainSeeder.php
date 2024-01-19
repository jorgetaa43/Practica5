<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("trains")->insert([
            [
                "name" => "AVE",
                "passengers" => 190,
                "year" => 2015,
                "train_types_id" => 1
            ],
            [
                "name" => "Alvia",
                "passengers" => 210,
                "year" => 2019,
                "train_types_id" => 2
            ],
            
        ]);
    }
}
