<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_alternative',
        'id_criteria',
        'value',
    ];
    public function criteria()
    {
        return $this->belongsTo(Criteria::class, 'id_criteria');
    }

    public function alternative()
    {
        return $this->belongsTo(Alternative::class, 'id_alternative');
    }
}
