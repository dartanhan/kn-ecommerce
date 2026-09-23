<?php

namespace App\Http\Controllers;

use App\Services\MockCatalogService;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = MockCatalogService::getMockCart();
        return view('pages.checkout', compact('cart'));
    }
}
