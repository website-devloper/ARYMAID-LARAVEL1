<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\commande;
class facture extends Model
{
    use HasFactory;
    
    protected $fillable=['EtatCommande','commande_id','HT','TTC','TVA','date'];

    public function facture(){
        return $this->belongsTo(commande::class);
    }
}
