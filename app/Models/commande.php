<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produit;
use App\Models\facture;
use App\Models\user;


class commande extends Model
{
    use HasFactory;

    protected $fillable=['produit_id','firstName','lastName','email','adress','tel','Country','City','CodePost','dateCmd'];


    public function produits(){
        return $this->belongsToMany(produit::class)
        ->withPivot('quantite');
    }
    
    public function factures(){
        return $this->hasMany(facture::class);
    }

    public function user(){
        return $this->belongsTo(user::class); 
    }
    
}
