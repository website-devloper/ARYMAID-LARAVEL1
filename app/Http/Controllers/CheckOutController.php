<?php

namespace App\Http\Controllers;
use App\Models\panier;
use App\Models\commande;
use Carbon\Carbon;


use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function index()
    {
        $PrixUnitaire = panier::where('user_id', session('id'))->pluck('PrixUnitaire');
        $total = $PrixUnitaire->sum();

        return view('components.checkout', compact('total'));
    }
    public function CheckOut(Request $request)
    {
        $produitID = panier::where('user_id', session('id'))->first()->produit_id;

       $order =commande::create([
            'produit_id' => $produitID,
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $request->input('email_adress'),
            'adress' => $request->input('adress'),
            'tel' => $request->input('phone'),
            'Country' => $request->input('country'),
            'City' => $request->input('city'),
            'CodePost' => $request->input('codepostal'),
            'dateCmd' =>  Carbon::now(),
        ]);
       
        return view('components.successOrder');
    }
    
}


