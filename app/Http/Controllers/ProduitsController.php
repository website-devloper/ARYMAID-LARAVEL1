<?php

namespace App\Http\Controllers;
use App\Models\produit;
use App\Models\categorie;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=categorie::all();
       $produits=produit::paginate(20);
    return view('components.products',compact('produits','categories'));

    }

    public function ProductsBycategorie($id)
    {
        $categories=categorie::all();
       $produits=produit::where('categorie',$id)->paginate(20);
    return view('components.products',compact('produits','categories'));

    }
    

    public function ProductsBysearch(Request $request)
    {
       $categories = categorie::all();

       $searchTerm = $request->input('search');
       $produits = produit::where('name', 'LIKE', '%'.$searchTerm.'%')
                           ->orWhere('utilisation', 'LIKE', '%'.$searchTerm.'%')
                           ->orWhere('description', 'LIKE', '%'.$searchTerm.'%')
                           ->orWhere('categorie', 'LIKE', '%'.$searchTerm.'%')
                           ->paginate(20);

                           
        return view('components.products', compact('produits', 'categories'));

    }
    

    public function show(string $id)
    {
        $SingleProduit=produit::FindOrFail($id);
        return view('components.singleProduct',compact('SingleProduit'));
    }
}
