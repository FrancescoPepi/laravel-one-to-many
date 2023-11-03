<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


use App\Models\Project;
use App\Models\Category;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $category_ids = Category::all()->pluck('id');

        for ($i = 0; $i < 50; $i++) {
            $category_id = $faker->randomElement($category_ids);
            $project = new Project();
            $project->category_id = $category_id;
            $project->name = $faker->sentence(4);
            $project->description = $faker->paragraph();
            $project->slug = Str::slug($project->name);
            $project->save();
        }
    }
}