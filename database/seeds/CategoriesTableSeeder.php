<?php

use Illuminate\Database\Seeder;
use App\Category;


// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {

        $woodworking = Category::create(array(
            'name' => 'Woodworking',
            'description' => 'Tools, skills, and crafts for making things with wood',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1
        ));

        $digital = Category::create(array(
            'name' => 'Digital Fabrication',
            'description' => 'Creation using digital tools to iterate quickly and share massively',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1
        ));

        $technology = Category::create(array(
            'name' => 'Technology',
            'description' => 'Bits, bytes, and hardware',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1
        ));

        $electronics = Category::create(array(
            'name' => 'Electronics',
            'description' => 'From resistors and transistors to microcontrollers and FPGAS.  Bend those electrons to your will!',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1
        ));

        $arts = Category::create(array(
            'name' => 'Arts',
            'description' => 'Painting, sculpting, dancing',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1
        ));

        $science = Category::create(array(
            'name' => 'Science',
            'description' => 'Harness the mysteries of the universe with the power of science!',
            'created_by_id' => 1,
            'approved' => true,
            'approved_by_id' => 1
        ));
   }
}
