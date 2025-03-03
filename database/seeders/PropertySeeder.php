<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::create([
            'name' => 'Villa de Luxe',
            'description' => 'Une magnifique villa avec vue sur la mer.',
            'price' => 250.00,
            'address' => 'Nice',
        ]);

        Property::create([
            'name' => 'Appartement moderne',
            'description' => 'Appartement spacieux au centre-ville.',
            'price' => 120.00,
            'address' => 'Paris',
        ]);

        Property::create([
            'name' => 'Chalet cosy',
            'description' => 'Un chalet chaleureux dans les montagnes.',
            'price' => 150.00,
            'address' => 'Chamonix',
        ]);
    }
}
