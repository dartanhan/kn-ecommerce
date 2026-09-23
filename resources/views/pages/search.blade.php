<x-layouts.app :title="$title . ' — KN Cosméticos'">
    <div class="kn-container py-6">
        
        <!-- Breadcrumbs -->
        <x-store.breadcrumb :items="['Busca' => '']" />

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between py-6 border-b border-[#E6DED6] gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Resultado de Busca</span>
                <h1 class="font-display text-3xl sm:text-4xl font-semibold text-[#1C1412] mt-1">
                    @if($query)
                        Resultados para: <span class="text-[#7A1F3D]">"{{ $query }}"</span>
                    @else
                        Todos os Produtos
                    @endif
                </h1>
                <p class="text-xs sm:text-sm text-[#6B5F5A] mt-1">
                    <span class="font-bold text-[#1C1412]">{{ $totalCount }}</span> {{ $totalCount === 1 ? 'item encontrado' : 'itens encontrados' }}
                </p>
            </div>

            <div class="flex items-center gap-3">
                <x-store.filter-sheet :categories="$categories" :filters="$filters" />
                <x-store.sort-select :currentSort="$filters['sort'] ?? 'relevance'" />
            </div>
        </div>

        <!-- Main Layout with Sidebar and Grid -->
        <div class="flex gap-8 items-start pt-6">
            <!-- Desktop Filters Sidebar -->
            <div class="hidden lg:block">
                <x-store.filter-sidebar :categories="$categories" :filters="$filters" />
            </div>

            <!-- Products Grid Area -->
            <div class="flex-1 min-w-0">
                <x-store.product-grid :products="$products" />
            </div>
        </div>

    </div>
</x-layouts.app>
