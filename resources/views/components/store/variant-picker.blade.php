@props(['variants' => []])

@if(!empty($variants))
    <div x-data="{ selectedVariantId: {{ $variants[0]['id'] ?? 'null' }} }" class="space-y-3">
        <div class="flex items-center justify-between text-xs">
            <span class="font-bold uppercase tracking-wider text-[#B0894D]">Selecione a Variação</span>
            <span class="text-[#6B5F5A]">
                @foreach($variants as $v)
                    <span x-show="selectedVariantId === {{ $v['id'] }}" style="display: none;">
                        SKU: {{ $v['sku'] }}
                    </span>
                @endforeach
            </span>
        </div>

        <div class="flex flex-wrap gap-2.5">
            @foreach($variants as $variant)
                <button type="button" 
                        @click="selectedVariantId = {{ $variant['id'] }}"
                        {{ !$variant['available'] ? 'disabled' : '' }}
                        class="px-4 py-2 rounded-lg text-xs font-semibold border transition-all flex items-center gap-2"
                        :class="selectedVariantId === {{ $variant['id'] }} 
                            ? 'bg-[#7A1F3D] text-white border-[#7A1F3D] shadow-sm' 
                            : '{{ $variant['available'] ? 'bg-white text-[#1C1412] border-[#E6DED6] hover:border-[#7A1F3D]' : 'bg-[#F7F3EE] text-[#6B5F5A] border-[#E6DED6] opacity-50 cursor-not-allowed line-through' }}'">
                    <span>{{ $variant['name'] }}</span>
                    @if(!$variant['available'])
                        <span class="text-[10px] text-[#A33B3B] font-normal not-italic">(Esgotado)</span>
                    @endif
                </button>
            @endforeach
        </div>
    </div>
@endif
