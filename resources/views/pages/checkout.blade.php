<x-layouts.app title="Checkout Seguro — KN Cosméticos">
    <div class="kn-container py-8">
        
        <!-- Breadcrumbs -->
        <x-store.breadcrumb :items="['Sacola' => route('cart.index'), 'Checkout' => '']" />

        <div class="py-6 border-b border-[#E6DED6]">
            <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Finalização Segura</span>
            <h1 class="font-display text-3xl sm:text-4xl font-semibold text-[#1C1412] mt-1">
                Finalizar Compra
            </h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 mt-8 items-start">
            
            <!-- Left: Checkout Form (8 cols) -->
            <div class="lg:col-span-8">
                <x-store.checkout-form />
            </div>

            <!-- Right: Order Summary Sticky (4 cols) -->
            <div class="lg:col-span-4">
                <x-store.order-summary :cart="$cart" />
            </div>

        </div>

    </div>
</x-layouts.app>
