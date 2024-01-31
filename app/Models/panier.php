<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panier extends Model

{
    protected $fillable=['produit_id','PrixUnitaire','totalPanier','Quantite','user_id'];
    use HasFactory;
}
