<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\CartController;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('partials.header', function ($view) {
            $data = CartController::cart_view()['CartsByUser'];
            $total = CartController::cart_view()['totalPrice'];
            $view->with(['data' => $data, 'total' => $total]);
        });
    }
    
}
