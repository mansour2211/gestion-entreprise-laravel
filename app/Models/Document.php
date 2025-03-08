<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'fichier',
        'employe_id',
    ];

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}
