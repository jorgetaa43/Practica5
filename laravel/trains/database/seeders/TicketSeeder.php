<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tickets")->insert([
            [
                "date" => "2024-12-12",
                "price" => 20,
                "train_id" => 1,
                "ticket_types_id" => 1
            ]
        ]);
    }
}
