<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomscategorie','imagescat','categorieID'
    ];

    public function categories()
    {
        return $this->belongsTo(categorie::class,"categorieID");
    }

    public function article() 
{  
return $this->hasMany(Article::class,"scategorieID");  
}
}
