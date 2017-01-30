<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->delete();
        Category::create([
            'name' => 'Home'
        ]);

        Category::create([
            'name' => 'Other'
        ]);

        Category::create([
            'name' => 'Entertainment'
        ]);

        Category::create([
            'name' => 'Gifts'
        ]);

        Category::create([
            'name' => 'Taxes'
        ]);
        
    }
}