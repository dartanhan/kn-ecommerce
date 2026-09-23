@props(['cart'])

<div class="bg-white rounded-lg border border-[#E6DED6] p-6 kn-card-shadow sticky top-28">
    <div class="flex items-center justify-between pb-4 border-b border-[#E6DED6]">
        <h3 class="font-display font-semibold text-lg text-[#1C1412]">
            Resumo da Compra
        </h3>
        <span class="text-xs text-[#6B5F5A]">
            {{ count($cart['items']) }} itens
        </span>
    </div>

    <!-- Items List (Compact) -->
    <div class="py-4 space-y-3 max-h-60 overflow-y-auto pr-1">
        @foreach($cart['items'] as $item)
            <div class="flex items-center gap-3">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-12 h-12 rounded object-cover border border-[#E6DED6] flex-shrink-0">
                <div class="flex-1 min-w-0 text-xs">
                    <div class="font-semibold text-[#1C1412] truncate">{{ $item['name'] }}</div>
                    <div class="text-[#6B5F5A]">Qtd: {{ $item['quantity'] }} &bull; {{ $item['variant'] }}</div>
                </div>
                <div class="text-xs font-bold text-[#1C1412] whitespace-nowrap">
                    R$ {{ number_format($item['subtotal'], 2, ',', '.') }}
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pricing Lines -->
    <div class="pt-4 border-t border-[#E6DED6] space-y-2.5 text-xs text-[#6B5F5A]">
        <div class="flex justify-between">
            <span>Subtotal</span>
            <span class="font-semibold text-[#1C1412]">R$ {{ number_format($cart['subtotal'], 2, ',', '.') }}</span>
        </div>
        <div class="flex justify-between">
            <span>Frete (Sedex)</span>
            <span class="font-semibold text-[#1C1412]">R$ 18,50</span>
        </div>
        <div class="pt-3 border-t border-[#E6DED6] flex justify-between items-baseline text-sm">
            <span class="font-bold text-[#1C1412]">Total Final</span>
            <span class="text-xl font-extrabold text-[#7A1F3D]">
                R$ {{ number_format($cart['subtotal'] + 18.50, 2, ',', '.') }}
            </span>
        </div>
    </div>
</div>
