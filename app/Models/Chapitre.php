<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    use HasFactory;
    protected $table = "chapitre";
    protected $fillable = ['nom','contenu','id_formation'];

    public function getformation()
    {
        return $this->belongsto(Formation::class,'id', 'id_formation');
    }

}
