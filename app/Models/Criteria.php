<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'criteria',
        'weight',
        'attribute',
    ];
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class, 'id_criteria');
    }
}
