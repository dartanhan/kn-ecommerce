<?php

namespace App\Http\Controllers;

use App\Services\MockCatalogService;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $categories = MockCatalogService::getCategories();
        $filters = [
            'category' => $request->query('categoria'),
            'availability' => $request->query('disponibilidade'),
            'min_price' => $request->query('preco_min'),
            'max_price' => $request->query('preco_max'),
            'sort' => $request->query('ordenar', 'relevance'),
            'query' => $request->query('q')
        ];

        $products = MockCatalogService::getProducts($filters);
        $totalCount = count($products);

        return view('pages.catalog', [
            'products' => $products,
            'categories' => $categories,
            'filters' => $filters,
            'totalCount' => $totalCount,
            'currentCategory' => null,
            'title' => 'Catálogo Completo de Cosméticos'
        ]);
    }

    public function category(Request $request, string $slug)
    {
        $category = MockCatalogService::getCategoryBySlug($slug);
        if (!$category) {
            return redirect()->route('catalog.index');
        }

        $categories = MockCatalogService::getCategories();
        $filters = [
            'category' => $slug,
            'availability' => $request->query('disponibilidade'),
            'min_price' => $request->query('preco_min'),
            'max_price' => $request->query('preco_max'),
            'sort' => $request->query('ordenar', 'relevance'),
        ];

        $products = MockCatalogService::getProducts($filters);
        $totalCount = count($products);

        return view('pages.category', [
            'category' => $category,
            'products' => $products,
            'categories' => $categories,
            'filters' => $filters,
            'totalCount' => $totalCount,
            'title' => $category['name']
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->query('q', '');
        $categories = MockCatalogService::getCategories();
        $filters = [
            'query' => $query,
            'availability' => $request->query('disponibilidade'),
            'min_price' => $request->query('preco_min'),
            'max_price' => $request->query('preco_max'),
            'sort' => $request->query('ordenar', 'relevance'),
        ];

        $products = $query !== '' ? MockCatalogService::getProducts($filters) : [];
        $totalCount = count($products);

        return view('pages.search', [
            'products' => $products,
            'categories' => $categories,
            'filters' => $filters,
            'totalCount' => $totalCount,
            'query' => $query,
            'title' => 'Busca por: ' . ($query ?: 'Todos os produtos')
        ]);
    }
}
