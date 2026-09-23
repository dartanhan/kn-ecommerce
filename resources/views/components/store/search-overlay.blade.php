<div x-show="searchOpen" 
     x-transition:enter="transition ease-out duration-200"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-150"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm flex items-start justify-center pt-16 sm:pt-24 px-4"
     style="display: none;"
     @keydown.escape.window="searchOpen = false"
     @click="searchOpen = false">

    <div class="relative bg-white rounded-xl shadow-2xl max-w-2xl w-full p-6 overflow-hidden border border-[#E6DED6]"
         @click.stop>
        
        <!-- Search Input Header -->
        <form action="{{ route('search') }}" method="GET" class="relative">
            <input type="text" 
                   name="q" 
                   x-ref="searchInput"
                   placeholder="Digite o nome do produto, SKU ou categoria..." 
                   class="w-full bg-[#F7F3EE] border-2 border-[#7A1F3D] rounded-lg pl-12 pr-12 py-3.5 text-base text-[#1C1412] placeholder-[#6B5F5A] focus:outline-none shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-[#7A1F3D]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <button type="button" 
                    @click="searchOpen = false" 
                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#6B5F5A] hover:text-[#1C1412]">
                <kbd class="text-xs bg-white border border-[#E6DED6] rounded px-1.5 py-0.5 font-semibold text-[#6B5F5A]">ESC</kbd>
            </button>
        </form>

        <!-- Popular / Suggested Terms -->
        <div class="mt-6">
            <div class="text-xs font-bold uppercase tracking-wider text-[#B0894D] mb-3">Buscas Populares</div>
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('search', ['q' => 'gel']) }}" class="px-3 py-1.5 bg-[#F7F3EE] hover:bg-[#EFE8E1] border border-[#E6DED6] rounded-md text-xs font-medium text-[#1C1412] transition-colors">
                    Gel Construtor
                </a>
                <a href="{{ route('search', ['q' => 'esmalte']) }}" class="px-3 py-1.5 bg-[#F7F3EE] hover:bg-[#EFE8E1] border border-[#E6DED6] rounded-md text-xs font-medium text-[#1C1412] transition-colors">
                    Esmalte em Gel
                </a>
                <a href="{{ route('search', ['q' => 'cabine']) }}" class="px-3 py-1.5 bg-[#F7F3EE] hover:bg-[#EFE8E1] border border-[#E6DED6] rounded-md text-xs font-medium text-[#1C1412] transition-colors">
                    Cabine UV/LED
                </a>
                <a href="{{ route('search', ['q' => 'pinça']) }}" class="px-3 py-1.5 bg-[#F7F3EE] hover:bg-[#EFE8E1] border border-[#E6DED6] rounded-md text-xs font-medium text-[#1C1412] transition-colors">
                    Pinça Volume Russo
                </a>
                <a href="{{ route('search', ['q' => 'primer']) }}" class="px-3 py-1.5 bg-[#F7F3EE] hover:bg-[#EFE8E1] border border-[#E6DED6] rounded-md text-xs font-medium text-[#1C1412] transition-colors">
                    Primer & Prep
                </a>
            </div>
        </div>

        <!-- Quick Help Note -->
        <div class="mt-6 pt-4 border-t border-[#E6DED6] flex items-center justify-between text-xs text-[#6B5F5A]">
            <span>Pressione <strong class="font-semibold text-[#1C1412]">ENTER</strong> para ver todos os resultados</span>
            <span class="text-[#B0894D]">KN Cosméticos Storefront</span>
        </div>
    </div>
</div>
