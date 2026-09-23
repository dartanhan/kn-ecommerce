<?php

namespace App\Http\Controllers;

use App\Services\MockCatalogService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $slugWithId)
    {
        // Extrai o ID do início (ex: 1-gel-construtor-autonivelante...)
        preg_match('/^(\d+)/', $slugWithId, $matches);
        $id = isset($matches[1]) ? (int)$matches[1] : 1;

        $product = MockCatalogService::getProductById($id);
        if (!$product) {
            $product = MockCatalogService::getProductById(1);
        }

        $relatedProducts = MockCatalogService::getRelatedProducts($product['id'], $product['category_slug'], 4);

        return view('pages.product', compact('product', 'relatedProducts'));
    }
}
