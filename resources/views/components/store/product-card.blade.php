@props(['product'])

@php
    $url = route('product.show', $product['id'] . '-' . $product['slug']);
    $isOutOfStock = ($product['stock'] ?? 0) <= 0;
@endphp

<article class="group bg-white rounded-lg border border-[#E6DED6] overflow-hidden flex flex-col justify-between kn-card-shadow transition-all duration-300 relative">
    
    <div>
        <!-- Image Container (Aspect Ratio 1:1) -->
        <a href="{{ $url }}" class="block relative aspect-square bg-[#EFE8E1] overflow-hidden">
            <img src="{{ $product['image'] }}" 
                 alt="{{ $product['name'] }}" 
                 loading="lazy"
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-out {{ $isOutOfStock ? 'opacity-60 grayscale-[30%]' : '' }}">
            
            <!-- Floating Stock Badge -->
            <div class="absolute top-2.5 left-2.5">
                <x-store.stock-badge :stock="$product['stock']" />
            </div>

            <!-- Quick View / Details Hover Badge on Desktop -->
            <div class="hidden sm:flex absolute inset-x-3 bottom-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                <span class="w-full py-2 bg-white/95 backdrop-blur text-center text-xs font-semibold text-[#1C1412] rounded shadow border border-[#E6DED6] hover:bg-[#7A1F3D] hover:text-white transition-colors">
                    Ver Detalhes
                </span>
            </div>
        </a>

        <!-- Content -->
        <div class="p-3.5 sm:p-4">
            <!-- Category / Subcategory -->
            <div class="text-[11px] font-semibold uppercase tracking-wider text-[#B0894D] mb-1 truncate">
                {{ $product['category_name'] }}
            </div>

            <!-- Product Title (Clamped to 2 lines) -->
            <h3 class="text-sm font-semibold text-[#1C1412] group-hover:text-[#7A1F3D] transition-colors line-clamp-2 min-h-[2.5rem] leading-snug">
                <a href="{{ $url }}">
                    {{ $product['name'] }}
                </a>
            </h3>
        </div>
    </div>

    <!-- Footer: Price & CTA -->
    <div class="px-3.5 pb-3.5 sm:px-4 sm:pb-4 pt-1 flex items-baseline justify-between border-t border-[#F7F3EE]">
        <div>
            <x-store.price :value="$product['price']" size="base" />
            @if(!empty($product['variants']) && count($product['variants']) > 1)
                <div class="text-[10px] text-[#6B5F5A]">
                    {{ count($product['variants']) }} variações
                </div>
            @endif
        </div>

        <a href="{{ $url }}" 
           class="p-2 text-[#7A1F3D] hover:text-white hover:bg-[#7A1F3D] border border-[#E6DED6] rounded-md transition-colors"
           aria-label="Ver {{ $product['name'] }}">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
        </a>
    </div>
</article>
