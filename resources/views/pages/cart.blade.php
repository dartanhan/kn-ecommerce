<x-layouts.app title="Sacola de Compras — KN Cosméticos">
    <div class="kn-container py-8">
        
        <!-- Breadcrumbs -->
        <x-store.breadcrumb :items="['Sacola de Compras' => '']" />

        <div class="flex items-baseline justify-between py-6 border-b border-[#E6DED6]">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Sua Seleção</span>
                <h1 class="font-display text-3xl sm:text-4xl font-semibold text-[#1C1412] mt-1">
                    Sacola de Compras
                </h1>
            </div>
            <a href="{{ route('catalog.index') }}" class="text-xs sm:text-sm font-semibold text-[#7A1F3D] hover:underline hidden sm:inline">
                Continuar Comprando &rarr;
            </a>
        </div>

        @if(!empty($cart['items']) && count($cart['items']) > 0)
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 mt-8 items-start">
                
                <!-- Items List (8 cols) -->
                <div class="lg:col-span-8 bg-white rounded-lg border border-[#E6DED6] p-6 kn-card-shadow">
                    <div class="border-b border-[#E6DED6] pb-3 flex justify-between text-xs font-bold text-[#6B5F5A] uppercase tracking-wider">
                        <span>Produto</span>
                        <span class="hidden sm:inline">Subtotal</span>
                    </div>

                    <div class="divide-y divide-[#E6DED6]">
                        @foreach($cart['items'] as $item)
                            <x-store.cart-line-item :item="$item" />
                        @endforeach
                    </div>
                </div>

                <!-- Summary (4 cols) -->
                <div class="lg:col-span-4">
                    <x-store.cart-summary :subtotal="$cart['subtotal']" :total="$cart['total']" />
                </div>

            </div>
        @else
            <!-- Empty Cart State -->
            <div class="bg-white rounded-xl border border-[#E6DED6] p-16 text-center max-w-md mx-auto my-12 kn-card-shadow">
                <div class="w-16 h-16 bg-[#F7F3EE] rounded-full flex items-center justify-center mx-auto mb-4 text-[#7A1F3D]">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                </div>
                <h3 class="font-display font-semibold text-2xl text-[#1C1412] mb-2">Sua sacola está vazia</h3>
                <p class="text-xs text-[#6B5F5A] mb-6">Explore nosso catálogo profissional e adicione produtos incríveis.</p>
                <a href="{{ route('catalog.index') }}" class="px-6 py-3 bg-[#7A1F3D] text-white text-sm font-semibold rounded-lg hover:bg-[#5E1730] transition-colors shadow">
                    Explorar Produtos
                </a>
            </div>
        @endif

    </div>
</x-layouts.app>
