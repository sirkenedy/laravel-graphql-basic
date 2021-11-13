<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeDatabaseSeeder extends Seeder
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
                "name" => "documentation",
                "description" => "description here",
                "color" => "color here",
            ],
            [
                "name" => "enhancement",
                "description" => "description here",
                "color" => "color here",
            ],
            [
                "name" => "heip wanted",
                "description" => "description here",
                "color" => "color here",
            ],
            [
                "name" => "good first issue",
                "description" => "description here",
                "color" => "color here",
            ],
            [
                "name" => "question",
                "description" => "description here",
                "color" => "color here",
            ],
            [
                "name" => "bugs",
                "description" => "description here",
                "color" => "color here",
            ],
        ];
        collect($datas)->map(function ($data) {
            return Type::create($data);
        });
    }
}
