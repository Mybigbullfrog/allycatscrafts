<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
//use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function checkout(): Factory|View|Application
    {
        return view('store.checkout');
    }

    /**
     * @return Factory|View|Application
     */
    public function my_account(): Factory|View|Application
    {
        return view('store.my-account');
    }

    /**
     * @return Factory|View|Application
     */
    public function shopping_cart(): Factory|View|Application
    {
        return view('store.shopping-cart');
    }

}
