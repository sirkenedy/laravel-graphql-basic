<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Priority;

class PriorityDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                "name" => "Urgent",
                "description" => "description here",
            ],
            [
                "name" => "High",
                "description" => "description here",
            ],
            [
                "name" => "Medium",
                "description" => "description here",
            ],
            [
                "name" => "Low",
                "description" => "description here",
            ],
        ];
        collect($datas)->map(function ($data) {
            return Priority::create($data);
        });
    }
}
