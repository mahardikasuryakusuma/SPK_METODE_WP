<?php

namespace Database\Seeders;

use App\Models\Evaluation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $evaluations = [
            ['id_alternative' => 1, 'id_criteria' => 1, 'value' => 7],
            ['id_alternative' => 1, 'id_criteria' => 2, 'value' => 0.5],
            ['id_alternative' => 1, 'id_criteria' => 3, 'value' => 6.5],
            ['id_alternative' => 1, 'id_criteria' => 4, 'value' => 37],
            ['id_alternative' => 1, 'id_criteria' => 5, 'value' => 8],
            ['id_alternative' => 2, 'id_criteria' => 1, 'value' => 6.5],
            ['id_alternative' => 2, 'id_criteria' => 2, 'value' => 2],
            ['id_alternative' => 2, 'id_criteria' => 3, 'value' => 8.5],
            ['id_alternative' => 2, 'id_criteria' => 4, 'value' => 38],
            ['id_alternative' => 2, 'id_criteria' => 5, 'value' => 5],
            ['id_alternative' => 3, 'id_criteria' => 1, 'value' => 6],
            ['id_alternative' => 3, 'id_criteria' => 2, 'value' => 3.5],
            ['id_alternative' => 3, 'id_criteria' => 3, 'value' => 6.5],
            ['id_alternative' => 3, 'id_criteria' => 4, 'value' => 45],
            ['id_alternative' => 3, 'id_criteria' => 5, 'value' => 8],
            ['id_alternative' => 4, 'id_criteria' => 1, 'value' => 9],
            ['id_alternative' => 4, 'id_criteria' => 2, 'value' => 6.5],
            ['id_alternative' => 4, 'id_criteria' => 3, 'value' => 8.5],
            ['id_alternative' => 4, 'id_criteria' => 4, 'value' => 26],
            ['id_alternative' => 4, 'id_criteria' => 5, 'value' => 8],
            ['id_alternative' => 5, 'id_criteria' => 1, 'value' => 8],
            ['id_alternative' => 5, 'id_criteria' => 2, 'value' => 6],
            ['id_alternative' => 5, 'id_criteria' => 3, 'value' => 7],
            ['id_alternative' => 5, 'id_criteria' => 4, 'value' => 41],
            ['id_alternative' => 5, 'id_criteria' => 5, 'value' => 10],
            ['id_alternative' => 6, 'id_criteria' => 1, 'value' => 6.5],
            ['id_alternative' => 6, 'id_criteria' => 2, 'value' => 2],
            ['id_alternative' => 6, 'id_criteria' => 3, 'value' => 8],
            ['id_alternative' => 6, 'id_criteria' => 4, 'value' => 26],
            ['id_alternative' => 6, 'id_criteria' => 5, 'value' => 10],
            ['id_alternative' => 7, 'id_criteria' => 1, 'value' => 7],
            ['id_alternative' => 7, 'id_criteria' => 2, 'value' => 1.5],
            ['id_alternative' => 7, 'id_criteria' => 3, 'value' => 7],
            ['id_alternative' => 7, 'id_criteria' => 4, 'value' => 40],
            ['id_alternative' => 7, 'id_criteria' => 5, 'value' => 8],
            ['id_alternative' => 8, 'id_criteria' => 1, 'value' => 6.5],
            ['id_alternative' => 8, 'id_criteria' => 2, 'value' => 3],
            ['id_alternative' => 8, 'id_criteria' => 3, 'value' => 7],
            ['id_alternative' => 8, 'id_criteria' => 4, 'value' => 40],
            ['id_alternative' => 8, 'id_criteria' => 5, 'value' => 8],
            ['id_alternative' => 9, 'id_criteria' => 1, 'value' => 9],
            ['id_alternative' => 9, 'id_criteria' => 2, 'value' => 6],
            ['id_alternative' => 9, 'id_criteria' => 3, 'value' => 7],
            ['id_alternative' => 9, 'id_criteria' => 4, 'value' => 26],
            ['id_alternative' => 9, 'id_criteria' => 5, 'value' => 5],
            ['id_alternative' => 10, 'id_criteria' => 1, 'value' => 6],
            ['id_alternative' => 10, 'id_criteria' => 2, 'value' => 3.5],
            ['id_alternative' => 10, 'id_criteria' => 3, 'value' => 7],
            ['id_alternative' => 10, 'id_criteria' => 4, 'value' => 32],
            ['id_alternative' => 10, 'id_criteria' => 5, 'value' => 8],
        ];

        foreach ($evaluations as $evaluation) {
            Evaluation::create($evaluation);
        }
    }
}
