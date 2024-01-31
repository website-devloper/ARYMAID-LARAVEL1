<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\produit;
use App\Models\categorie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function Home(){
        
        $latestProducts=produit::latest()->paginate(10);
        $products=produit::paginate(20);
        $categories=categorie::all();
        return view('components.home',compact('latestProducts','categories','products') );
    }

// ---------------------------------------------------




// ---------------------------------------------------
    public function About()
    {
        return view('components.about');
    }

// ---------------------------------------------------

    public function Contact()
{
    return view('components.contact');
}

// ---------------------------------------------------




// ---------------------------------------------------
    public function SigninModal()
{
    return view('partials.signInModal');
}


// public function CartShow()
// {
//     return view('partials.signInModal');
// }

}
