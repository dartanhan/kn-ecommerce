<x-layouts.app :title="$category['name'] . ' — KN Cosméticos'">
    <div class="kn-container py-6">
        
        <!-- Breadcrumbs -->
        <x-store.breadcrumb :items="['Produtos' => route('catalog.index'), $category['name'] => '']" />

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between py-6 border-b border-[#E6DED6] gap-4">
            <div class="max-w-2xl">
                <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Categoria Oficial</span>
                <h1 class="font-display text-3xl sm:text-4xl font-semibold text-[#1C1412] mt-1">
                    {{ $category['name'] }}
                </h1>
                <p class="text-xs sm:text-sm text-[#6B5F5A] mt-1.5 leading-relaxed">
                    {{ $category['description'] }}
                </p>
                <div class="text-xs text-[#6B5F5A] mt-2 font-medium">
                    <span class="font-bold text-[#1C1412]">{{ $totalCount }}</span> produtos disponíveis
                </div>
            </div>

            <div class="flex items-center gap-3">
                <x-store.filter-sheet :categories="$categories" :filters="$filters" />
                <x-store.sort-select :currentSort="$filters['sort'] ?? 'relevance'" />
            </div>
        </div>

        <!-- Quick Category Pills -->
        <div class="py-4">
            <x-store.category-pills :categories="$categories" :activeSlug="$category['slug']" />
        </div>

        <!-- Main Layout with Sidebar and Grid -->
        <div class="flex gap-8 items-start pt-4">
            <!-- Desktop Filters Sidebar -->
            <div class="hidden lg:block">
                <x-store.filter-sidebar :categories="$categories" :filters="$filters" />
            </div>

            <!-- Products Grid Area -->
            <div class="flex-1 min-w-0">
                <x-store.product-grid :products="$products" />

                @if(count($products) > 0)
                    <x-store.pagination :currentPage="1" :totalPages="1" />
                @endif
            </div>
        </div>

    </div>
</x-layouts.app>
