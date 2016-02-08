<?php

use Illuminate\Database\Seeder;
use App\Category;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class SkillsTableSeeder extends Seeder
{
    public function run()
    {
        $woodworking = App\Category::where('name', 'Woodworking')->first();

        $woodworking->skills()->create([
            'name' => 'Carpentry',
            'description' => 'Making or repairing things in wood',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $woodworking->skills()->create([
            'name' => 'Table Saw',
            'description' => 'Using and maintaining a table saw',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $woodworking->skills()->create([
            'name' => 'Bandsaw',
            'description' => 'Using and maintaining a band saw',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $woodworking->skills()->create([
            'name' => 'Lathe',
            'description' => 'Using and maintaining a lathe',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);
        
		$woodworking->skills()->create([
            'name' => 'Bandsaw Box',
            'description' => 'Making a bandsaw box',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $digital = App\Category::where('name', 'Digital Fabrication')->first();

        $digital->skills()->create([
            'name' => '3D printing',
            'description' => 'Repair and use of 3D printers',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $digital->skills()->create([
            'name' => 'Laser Cutter',
            'description' => 'Use and maintainence of laser cutters',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $electronics = App\Category::where('name', 'Electronics')->first();

        $electronics->skills()->create([
            'name' => 'PCB Making',
            'description' => 'Making printed circuit boards',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $electronics->skills()->create([
            'name' => 'Embedded Programming',
            'description' => 'programming embedded systems',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $electronics->skills()->create([
            'name' => 'Soldering',
            'description' => 'Soldering',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $electronics->skills()->create([
            'name' => 'Robotics',
            'description' => 'Making robots',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

		$technology = App\Category::where('name', 'Technology')->first();

        $technology->skills()->create([
            'name' => 'Web Programming',
            'description' => 'Programming for the web',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $technology->skills()->create([
            'name' => 'PC Building',
            'description' => 'Building PCs from components',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $arts = App\Category::where('name', 'Arts')->first();

        $arts->skills()->create([
            'name' => 'Fabrics',
            'description' => 'Fabrics',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $arts->skills()->create([
            'name' => 'Photography',
            'description' => 'Photography',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

    	$science = App\Category::where('name', 'Science')->first();

        $science->skills()->create([
            'name' => 'Nutrition',
            'description' => 'Basic Nutrition',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

        $science->skills()->create([
            'name' => 'Science?',
            'description' => 'Is this even a valid category?',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1 
        ]);

    }
}
