<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\categorie;
use app\Models\commande;
use app\Models\wishlist;

class produit extends Model
{
    use HasFactory;

    protected $fillable=['name','price','image','hoverImg','utilisation','description','description2','stock','statuts','oldPrice','categorie_id'];
//-----------------------------------------------------------
    public function Commandes(){
        return $this->belongsToMany(commande::class);

    }
// ------------------------------------------------------
    public function wishlists()
    {
        return $this->belongsToMany(wishlist::class);
    }
}
