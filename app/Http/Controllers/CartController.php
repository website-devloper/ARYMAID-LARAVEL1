<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\panier;
use App\Models\produit;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        public function index(string $user)
    
        {
            $CartsByUser = DB::table('paniers')
                ->join('produits', 'paniers.produit_id', '=', 'produits.id')
                ->where('paniers.user_id', $user)
                ->get(['paniers.*', 'produits.*']);

                $total = $CartsByUser->sum('price');

            return view('components.cart', compact('CartsByUser','total'));
        }

    /**
     * Store a newly created resource in storage.
     */
    public static function cart_view()
    
    {
        $CartsByUser = DB::table('paniers')
            ->join('produits', 'paniers.produit_id', '=', 'produits.id')
            ->where('paniers.user_id', session('id'))
            ->select('paniers.*', 'produits.*', 'produits.name') // add the 'name' column
            ->get();
            
            $totalPrice = $CartsByUser->sum('price');

            return ['CartsByUser' => $CartsByUser, 'totalPrice' => $totalPrice];
            
    }

        public function store(Request $request, $idProduct )
        {
            $produit = produit::findOrFail($idProduct);

            panier::create([
                'produit_id' => $produit->id,
                'user_id' => session('id'),
                'PrixUnitaire' => $produit->price,
                'totalPanier' => $produit->price,
                'Quantite'=>$produit->stock,
            ]);
            return redirect('/');
        }

        public function destroy(string $id)
        {
            $panier = panier::where('produit_id', $id)
                                ->where('user_id', session('id'))
                                ->firstOrFail();
                                
            $panier->delete();
        
            return redirect()->back();
        }
}
