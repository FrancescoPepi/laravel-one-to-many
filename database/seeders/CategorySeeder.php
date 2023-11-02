<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $_categories = [
            "FRONT-END",
            "BACK-END",
            "FULL-STACK",
        ];
        foreach ($_categories as $_category) {
            $project = new Category();
            $project->label = $_category;
            $project->color = $faker->hexColor();
            $project->save();
        }
    }
}