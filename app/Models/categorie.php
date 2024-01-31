<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produit;

class categorie extends Model
{
    use HasFactory;

    protected $fillable=['type'];
}

