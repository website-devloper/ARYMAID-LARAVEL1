<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\commande;
use App\Models\contact;
use App\Models\wishlist;
 

class user extends Model

{
protected $fillable=['name','email','password'];

    use HasFactory;
// -----------------------------------------------
    public function commandes(){
        return $this->hasMany(commande::class);
    }
// ------------------------------------------------
    public function contacts(){
        return $this->hasMany(contact::class);
    }
// ------------------------------------------------
    public function wishlists()
    {
        return $this->hasMany(wishlist::class);
    }
}
