<?php

namespace App\Filament\Pages;

use App\Models\Alternative;
use App\Models\Criteria;
use App\Models\Evaluation;
use Filament\Pages\Page;

class HasilMetode extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.hasil-metode';
    public function WP(){

        $criteria = Criteria::select('id', 'criteria', 'weight')
            ->orderBy('id')
            ->get();

        //--- inisialisasi array kriteria 'C'
        $C = [];
        //--- inisialisasi array weight/bobot 'W'
        $W = [];
        //--- inisialisasi jumlah kriteria 'n'
        $n = 0;

        // Mengisi array $C dan $W dari hasil query
        foreach ($criteria as $item) {
            $W[$item->id] = $item->weight;
            $C[] = [
                'id' => $item->id,
                'criteria' => $item->criteria,
                'weight' => $item->weight,
            ];
            ++$n;
        }
        // dd($n);
        $evaluation = Evaluation::select('id_criteria', 'id_alternative', 'value')
            ->orderBy('id_alternative')
            ->orderBy('id_criteria')
            ->get();
        //--- inisialisasi array X
        $X = [];
        $alternative = '';
        //--- inisialisasi jumlah alternative 'm'
        $m = 0;
        // Mengisi array $X dari hasil query
        foreach ($evaluation as $row) {
            if ($row->id_alternative != $alternative) {
                $X[$row->id_alternative] = [];
                $alternative = $row->id_alternative;
                ++$m;
            }
            $X[$row->id_alternative][$row->id_criteria] = $row->value;
        }
        //--- menghitung total jumlah bobot
        $sigma_w = array_sum($W);
        //--- membagi masing-masing bobot dengan total jumlah bobot
        foreach ($W as $j => $w) {
            $W[$j] = $w / $sigma_w;
        }


        // dd($criteria);
        //--- inisialisasi array 'S'
        $S = [];
        $criterias = Criteria::all()->keyBy('id')->toArray();
        // Menghitung nilai preferensi S untuk tiap-tiap alternatif
        foreach ($X as $i => $x) {
            // Inisialisasi nilai S untuk alternatif ke-i
            $S[$i] = 1;

            // Iterasi untuk tiap-tiap data hasil evaluasi X
            foreach ($x as $j => $value) {
                // Kalikan dengan pangkat negatif dari nilai untuk kriteria ke j
                // Jika merupakan kriteria biaya/cost
                if ($criterias[$j]['attribute'] == 'cost') {
                    $S[$i] *= pow($value, -$W[$j]);
                }
                // Kalikan dengan pangkat positif dari nilai untuk kriteria ke j
                // Jika merupakan kriteria keuntungan/benefit
                else {
                    $S[$i] *= pow($value, $W[$j]);
                }
            }
        }


        //--- inisialisasi vektor V
        $V = [];
        //--- menghitung total jumlah nilai preferensi S
        $sigma_s = array_sum($S);
        //--- membagi masing-masing bobot dengan total jumlah nilai preferensi S
        foreach ($S as $j => $s) {
            $V[$j] = $s / $sigma_s;
        }
        arsort($V);
        $names = Alternative::select('id', 'name')->get();

        return ['V' => $V, 'names' => $names];
    }
}
