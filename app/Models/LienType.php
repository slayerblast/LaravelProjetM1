<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienType extends Model
{
    use HasFactory;
    protected $table = "lien_type";
    protected $fillable = ['id_type','id_formation'];
    public $timestamps = false;

}
