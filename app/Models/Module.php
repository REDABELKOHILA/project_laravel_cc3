<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_module', 'libelle_module', 'masse_hor_presentielle', 'masse_hor_distantielle', 'bilan_compet_module'
    ];

    public function preparationSequences()
    {
        return $this->hasMany(PreparationSequence::class);
    }
}

