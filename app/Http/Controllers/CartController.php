<?php

namespace App\Http\Controllers;

use App\Services\MockCatalogService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = MockCatalogService::getMockCart();
        return view('pages.cart', compact('cart'));
    }
}
