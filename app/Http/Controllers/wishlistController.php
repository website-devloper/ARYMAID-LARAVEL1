<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produit;
use App\Models\wishlist;
use Session;

class wishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $user)
    
    {
        $wishlistsByUser = DB::table('wishlists')
            ->join('produits', 'wishlists.produit_id', '=', 'produits.id')
            ->where('wishlists.user_id', $user)
            ->get(['wishlists.*', 'produits.*']);
        return view('components.wishlist', compact('wishlistsByUser'));
    }

    /*
      Store a newly created resource in storage.
    */

     public function store(Request $request, $idProduct)
     {
         $produit = produit::findOrFail($idProduct);
     
         wishlist::create([
             'produit_id' => $produit->id,
             'user_id' => session('id'),
             'price' => $produit->price,
             'status' => $produit->status
         ]);
         return redirect('/');
     }
     
    /**
     * Remove the specified resource from storage.
     */

     public function destroy(string $id)
     {
         $wishlist = Wishlist::where('produit_id', $id)
                             ->where('user_id', session('id'))
                             ->firstOrFail();
                             
         $wishlist->delete();
     
         return redirect()->back();
     }
     
}