<?php

namespace Database\Seeders;

use App\Models\Alternative;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlternativesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alternatives = [
            'Nina',
            'Usman',
            'Firza',
            'Yuna',
            'Oscar',
            'Kevin',
            'Intan',
            'Carlie',
            'Hilmi',
            'Alfian'
        ];

        foreach ($alternatives as $name) {
            Alternative::create(['name' => $name]);
        }
    }
}
