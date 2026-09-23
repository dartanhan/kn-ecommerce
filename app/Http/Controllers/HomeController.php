<?php

namespace App\Http\Controllers;

use App\Services\MockCatalogService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = MockCatalogService::getCategories();
        $featuredProducts = MockCatalogService::getFeaturedProducts(4);
        $newArrivals = MockCatalogService::getNewArrivals(4);

        return view('pages.home', compact('categories', 'featuredProducts', 'newArrivals'));
    }
}
