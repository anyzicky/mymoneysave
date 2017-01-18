<?php

use App\Models\Waste;
use Illuminate\Database\Seeder;

class WasteTableSeeder extends Seeder
{
    public function run()
    {
        Waste::create([
            'name' => 'Rocket league PS4',
            'price' => '1079',
            'date_buy' => new DateTime()
        ]);

        Waste::create([
            'name' => 'Buhmils',
            'price' => '1299',
            'date_buy' => new DateTime()
        ]);

    }
}