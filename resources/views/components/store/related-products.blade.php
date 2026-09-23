@props(['products' => []])

@if(count($products) > 0)
    <section class="mt-16 pt-12 border-t border-[#E6DED6]">
        <div class="flex items-center justify-between mb-8">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Sugestões para Você</span>
                <h2 class="font-display text-2xl sm:text-3xl font-semibold text-[#1C1412]">
                    Produtos Relacionados
                </h2>
            </div>
            <a href="{{ route('catalog.index') }}" class="text-xs sm:text-sm font-semibold text-[#7A1F3D] hover:underline flex items-center gap-1">
                <span>Ver Todos</span>
                <span>&rarr;</span>
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-3 sm:gap-6">
            @foreach($products as $product)
                <x-store.product-card :product="$product" />
            @endforeach
        </div>
    </section>
@endif
