<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Article extends Model
{   use HasFactory;
    protected $fillable = [
        'designation',
        'prix_achat_ht',
        'prix_vente_ht',
        'tva',
        'stock',
        'sous_categorie_id',
        'image', ];

 public function sous_categorie()
{
    return $this->belongsTo(SousCategorie::class);
}
   //
}
