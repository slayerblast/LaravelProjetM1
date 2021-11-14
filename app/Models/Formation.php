<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $table = "formations";
    protected $fillable = ['description','nom','prix','user_id','picture'];

    public function chapitres()
    {
        return $this->hasMany(Chapitre::class,'id_formation','id');
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class,'lien_categorie','id_formation', 'id_categorie');
    }

    public function types()
    {
        return $this->belongsToMany(Type::class,'lien_type','id_type', 'id_formation');
    }


/*
    public function liencategorie()
    {
        return $this->hasMany(Formation::class,'id_formation','id');
    }

    public function lientype()
    {
        return $this->hasMany(Formation::class,'id_formation','id');
    }

    public function lienUser()
{
    return $this->belongsto(Formation::class,'id_formation','id');
}
*/

}
