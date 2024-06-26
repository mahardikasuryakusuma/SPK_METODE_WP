<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriteriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Criteria::create([
            'criteria' => 'Penguasaan Aspek teknis',
            'weight' => 4,
            'attribute' => 'benefit'
        ]);

        Criteria::create([
            'criteria' => 'Pengalaman Kerja',
            'weight' => 3,
            'attribute' => 'benefit'
        ]);

        Criteria::create([
            'criteria' => 'Interpersonal Skill',
            'weight' => 4,
            'attribute' => 'benefit'
        ]);

        Criteria::create([
            'criteria' => 'Usia',
            'weight' => 2,
            'attribute' => 'cost'
        ]);

        Criteria::create([
            'criteria' => 'Status Perkawinan',
            'weight' => 3,
            'attribute' => 'cost'
        ]);
    }
}
