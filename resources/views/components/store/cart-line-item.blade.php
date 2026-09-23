@props(['item'])

<div x-data="{ removed: false, itemQty: {{ $item['quantity'] }} }" 
     x-show="!removed"
     x-transition:leave="transition-all ease-in duration-200"
     x-transition:leave-start="opacity-100 max-h-40"
     x-transition:leave-end="opacity-0 max-h-0"
     class="flex gap-4 sm:gap-6 py-5 border-b border-[#E6DED6] items-center">
    
    <!-- Thumbnail (Radius 4px) -->
    <a href="{{ route('product.show', $item['product_id'] . '-' . $item['slug']) }}" 
       class="w-20 h-20 sm:w-24 sm:h-24 bg-[#EFE8E1] rounded overflow-hidden flex-shrink-0 border border-[#E6DED6]">
        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover">
    </a>

    <!-- Details -->
    <div class="flex-1 min-w-0">
        <div class="flex items-start justify-between gap-2">
            <div>
                <h4 class="text-sm font-semibold text-[#1C1412] hover:text-[#7A1F3D] transition-colors truncate">
                    <a href="{{ route('product.show', $item['product_id'] . '-' . $item['slug']) }}">
                        {{ $item['name'] }}
                    </a>
                </h4>
                <div class="text-xs text-[#6B5F5A] mt-0.5">
                    Variação: <span class="font-medium text-[#1C1412]">{{ $item['variant'] }}</span>
                </div>
            </div>
            
            <!-- Remove Button -->
            <button type="button" 
                    @click="removed = true" 
                    class="text-xs text-[#6B5F5A] hover:text-[#A33B3B] p-1 transition-colors"
                    title="Remover item">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                </svg>
            </button>
        </div>

        <div class="flex items-center justify-between mt-4">
            <!-- Stepper -->
            <div class="inline-flex items-center border border-[#E6DED6] bg-white rounded p-0.5 shadow-sm">
                <button type="button" @click="if(itemQty > 1) itemQty--" class="w-6 h-6 flex items-center justify-center text-xs font-bold text-[#6B5F5A] hover:text-[#1C1412]">&minus;</button>
                <span class="w-8 text-center text-xs font-bold text-[#1C1412]" x-text="itemQty"></span>
                <button type="button" @click="itemQty++" class="w-6 h-6 flex items-center justify-center text-xs font-bold text-[#6B5F5A] hover:text-[#1C1412]">+</button>
            </div>

            <!-- Price -->
            <div class="text-right">
                <span class="text-xs text-[#6B5F5A] block sm:hidden">Total:</span>
                <span class="text-sm sm:text-base font-bold text-[#1C1412]">
                    R$ <span x-text="({{ $item['price'] }} * itemQty).toFixed(2).replace('.', ',')"></span>
                </span>
            </div>
        </div>
    </div>
</div>
