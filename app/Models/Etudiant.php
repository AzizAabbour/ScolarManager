<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['nom', 'email', 'groupe_id'];

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }
}