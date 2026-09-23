@props(['products' => []])

@if(count($products) > 0)
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">
        @foreach($products as $product)
            <x-store.product-card :product="$product" />
        @endforeach
    </div>
@else
    <!-- Honest Empty State -->
    <div class="bg-white rounded-xl border border-[#E6DED6] p-12 text-center max-w-lg mx-auto my-8 shadow-sm">
        <div class="w-16 h-16 bg-[#F7F3EE] rounded-full flex items-center justify-center mx-auto mb-4 text-[#7A1F3D]">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
        </div>
        <h3 class="font-display font-semibold text-2xl text-[#1C1412] mb-2">
            Nenhum produto encontrado
        </h3>
        <p class="text-sm text-[#6B5F5A] mb-6 leading-relaxed">
            Não encontramos nenhum item correspondente aos filtros aplicados. Tente limpar os filtros ou buscar por outro termo.
        </p>
        <a href="{{ route('catalog.index') }}" 
           class="inline-flex items-center justify-center px-6 py-2.5 bg-[#7A1F3D] hover:bg-[#5E1730] text-white text-sm font-semibold rounded-lg transition-colors shadow-sm">
            Ver Todos os Produtos
        </a>
    </div>
@endif
