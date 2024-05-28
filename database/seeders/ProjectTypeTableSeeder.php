<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;

class ProjectTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 300; $i++) {
            $project = Project::inRandomOrder()->first();

            $type_id = Type::inRandomOrder()->first()->id;

            $project->types()->attach($type_id);
        }
    }
}
