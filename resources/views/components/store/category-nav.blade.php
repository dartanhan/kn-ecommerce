<nav class="flex items-center space-x-8 overflow-x-auto py-3 no-scrollbar text-sm" aria-label="Navegação de Categorias">
    <a href="{{ route('catalog.index') }}" 
       class="font-semibold text-[#1C1412] hover:text-[#7A1F3D] pb-1 border-b-2 {{ request()->routeIs('catalog.index') && !request()->has('categoria') ? 'border-[#7A1F3D] text-[#7A1F3D]' : 'border-transparent' }} whitespace-nowrap transition-colors">
        Todos os Produtos
    </a>
    @foreach(\App\Services\MockCatalogService::getCategories() as $cat)
        <a href="{{ route('category.show', $cat['slug']) }}" 
           class="font-medium text-[#6B5F5A] hover:text-[#7A1F3D] pb-1 border-b-2 {{ request()->is('c/' . $cat['slug']) || request()->query('categoria') === $cat['slug'] ? 'border-[#7A1F3D] text-[#7A1F3D] font-semibold' : 'border-transparent' }} whitespace-nowrap transition-colors">
            {{ $cat['name'] }}
        </a>
    @endforeach
</nav>
