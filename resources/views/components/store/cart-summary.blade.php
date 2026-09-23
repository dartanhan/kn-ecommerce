@props(['subtotal' => 0, 'total' => 0, 'showCheckoutBtn' => true])

<div class="bg-white rounded-lg border border-[#E6DED6] p-6 kn-card-shadow">
    <h3 class="font-display font-semibold text-xl text-[#1C1412] pb-4 border-b border-[#E6DED6]">
        Resumo do Pedido
    </h3>

    <div class="py-4 space-y-3 text-sm">
        <div class="flex items-center justify-between text-[#6B5F5A]">
            <span>Subtotal</span>
            <span class="font-semibold text-[#1C1412]">
                <x-store.price :value="$subtotal" />
            </span>
        </div>

        <div class="flex items-center justify-between text-[#6B5F5A]">
            <span class="flex items-center gap-1">
                <span>Frete</span>
                <span class="text-[11px] text-[#B0894D] bg-[#F7F3EE] px-1.5 py-0.5 rounded">Previsto</span>
            </span>
            <span class="text-xs text-[#6B5F5A] italic">
                Calcule no checkout
            </span>
        </div>

        <div class="pt-3 border-t border-[#E6DED6] flex items-baseline justify-between">
            <span class="text-base font-bold text-[#1C1412]">Total Estimado</span>
            <span class="text-xl sm:text-2xl font-extrabold text-[#7A1F3D]">
                <x-store.price :value="$total" size="lg" />
            </span>
        </div>
    </div>

    @if($showCheckoutBtn)
        <div class="mt-6 space-y-3">
            <a href="{{ route('checkout.index') }}" 
               class="w-full py-3.5 bg-[#7A1F3D] hover:bg-[#5E1730] text-white font-semibold text-sm rounded-lg flex items-center justify-center gap-2 transition-colors shadow">
                <span>Avançar para o Checkout</span>
                <span>&rarr;</span>
            </a>
            
            <a href="{{ route('catalog.index') }}" 
               class="w-full py-2.5 bg-transparent hover:bg-[#F7F3EE] text-[#6B5F5A] hover:text-[#1C1412] font-semibold text-xs rounded-lg flex items-center justify-center transition-colors">
                Continuar Comprando
            </a>
        </div>
    @endif

    <!-- Trust Seals -->
    <div class="mt-6 pt-4 border-t border-[#F7F3EE] space-y-2 text-[11px] text-[#6B5F5A]">
        <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-[#2F6B4F]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            <span>Ambiente 100% Seguro com Certificado SSL</span>
        </div>
        <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-[#B0894D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Despacho ágil direto do centro de distribuição</span>
        </div>
    </div>
</div>
