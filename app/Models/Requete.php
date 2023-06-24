<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requete extends Model
{
    protected $table = 'soumissions';

    protected $fillable = [
        'user_id',
        'prenom',
        'nom',
        'telephone',
        'type_batiment',
        'commune',
        'niveau',
        'dimensions',
        'fichier_pdf',
        'prix_total',
        'statut'
    ];

    public function getFichierPdfAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setFichierPdfAttribute($value)
    {
        $this->attributes['fichier_pdf'] = json_encode($value);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
