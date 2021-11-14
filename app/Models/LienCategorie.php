<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienCategorie extends Model
{
    use HasFactory;
    protected $table = "lien_categorie";
    protected $fillable = ['id_categorie','id_formation'];
    public $timestamps = false;

    
}
