<?php

namespace App\Http\Controllers;

use App\Services\MockCatalogService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function completed()
    {
        $order = MockCatalogService::getMockOrder();
        return view('pages.order-completed', compact('order'));
    }

    public function tracking()
    {
        $order = MockCatalogService::getMockOrder();
        return view('pages.order-tracking', compact('order'));
    }
}
