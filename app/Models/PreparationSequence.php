<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreparationSequence extends Model
{
    use HasFactory;

    protected $fillable = [
       'preparation', 'heure', 'entier', 'type_espace_formation', 'objectif_sequence',
        'contenu_rappel', 'duree_rappel', 'motivation', 'duree_motiv', 'plan', 'duree_plan',
        'developpement1', 'mthod_pedagog_dev1', 'duree_dev1', 'developpement2', 'mthod_pedagog_dev2',
        'duree_dev2', 'developpement3', 'mthod_pedagog_dev3', 'duree_dev3', 'synthese', 'duree_synthese',
        'evaluation', 'duree_evaluation', 'connexion', 'module_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
