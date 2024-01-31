<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produit;
use App\Models\user;

class wishlist extends Model
{
    protected $fillable=['produit_id','price','status','user_id'];
// -----------------------------------------------
    public function produits()
    {
        return $this->belongsToMany(produit::class);
    }
    // --------------------------------------------
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    // -------------------------------------------
    
    
    use HasFactory;
}
