<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'annee_de_publication', 'nombre_de_pages', 'auteur_id'];

    public function auteur()
    {
        return $this->belongsTo(Auteur::class);
    }
}
