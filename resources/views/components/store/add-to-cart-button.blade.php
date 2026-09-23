@props(['disabled' => false, 'label' => 'Comprar'])

<div x-data="{ adding: false, added: false }" class="w-full">
    <button type="button" 
            @click="adding = true; setTimeout(() => { adding = false; added = true; setTimeout(() => added = false, 2000) }, 500)"
            {{ $disabled ? 'disabled' : '' }}
            class="w-full h-12 px-6 rounded-lg font-semibold text-sm flex items-center justify-center gap-2.5 transition-all shadow-md {{ $disabled ? 'bg-[#E6DED6] text-[#6B5F5A] cursor-not-allowed shadow-none' : 'bg-[#7A1F3D] hover:bg-[#5E1730] text-white active:scale-[0.99]' }}">
        
        <!-- Normal State -->
        <template x-if="!adding && !added">
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                <span>{{ $disabled ? 'Produto Indisponível' : $label }}</span>
            </span>
        </template>

        <!-- Loading State -->
        <template x-if="adding">
            <span class="flex items-center gap-2">
                <svg class="animate-spin w-4 h-4 text-white" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                </svg>
                <span>Adicionando...</span>
            </span>
        </template>

        <!-- Added State -->
        <template x-if="added">
            <span class="flex items-center gap-1.5 text-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
                <span>Adicionado à Sacola!</span>
            </span>
        </template>
    </button>
</div>
