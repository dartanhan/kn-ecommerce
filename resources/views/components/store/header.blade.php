@props(['cartCount' => 4])

<header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-[#E6DED6] transition-all duration-200">
    <div class="kn-container">
        <div class="flex items-center justify-between h-20 gap-4">
            
            <!-- Left: Mobile Menu Trigger + Logo -->
            <div class="flex items-center gap-4">
                <button type="button" 
                        @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="lg:hidden p-2 -ml-2 text-[#1C1412] hover:text-[#7A1F3D] focus:outline-none focus:ring-2 focus:ring-[#7A1F3D] rounded-md transition-colors"
                        aria-label="Abrir Menu Principal">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <!-- Logo KN Cosméticos -->
                <a href="{{ route('home') }}" class="flex items-center gap-2 group focus:outline-none focus:ring-2 focus:ring-[#7A1F3D] rounded-md py-1 px-1">
                    <div class="w-10 h-10 rounded-lg bg-[#7A1F3D] text-white flex items-center justify-center font-display font-semibold text-2xl shadow-sm tracking-wider">
                        KN
                    </div>
                    <div class="flex flex-col">
                        <span class="font-display font-bold text-xl sm:text-2xl text-[#1C1412] tracking-tight leading-none group-hover:text-[#7A1F3D] transition-colors">
                            COSMÉTICOS
                        </span>
                        <span class="text-[10px] text-[#B0894D] uppercase tracking-[0.2em] font-semibold mt-0.5">
                            Esmaltaria & Beleza
                        </span>
                    </div>
                </a>
            </div>

            <!-- Center: Search Input Bar (Desktop) -->
            <div class="hidden md:flex flex-1 max-w-md mx-4">
                <form action="{{ route('search') }}" method="GET" class="w-full relative">
                    <input type="text" 
                           name="q" 
                           placeholder="Buscar géis, esmaltes, cabines, pinças..." 
                           class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md pl-10 pr-12 py-2.5 text-sm text-[#1C1412] placeholder-[#6B5F5A] focus:outline-none focus:ring-2 focus:ring-[#7A1F3D] focus:border-[#7A1F3D] focus:bg-white transition-all">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-[#6B5F5A]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <button type="button" 
                            @click="searchOpen = true" 
                            class="absolute inset-y-1.5 right-1.5 px-2 bg-white/80 hover:bg-white text-[11px] font-semibold text-[#6B5F5A] border border-[#E6DED6] rounded flex items-center transition-colors">
                        Ctrl+K
                    </button>
                </form>
            </div>

            <!-- Right: Actions (Search Mobile, Account, Cart) -->
            <div class="flex items-center gap-2 sm:gap-4">
                
                <!-- Search Icon (Mobile) -->
                <button type="button" 
                        @click="searchOpen = true"
                        class="md:hidden p-2 text-[#1C1412] hover:text-[#7A1F3D] rounded-md transition-colors" 
                        aria-label="Buscar produtos">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>

                <!-- My Account Link -->
                <a href="{{ route('login') }}" 
                   class="flex items-center gap-2 text-sm text-[#1C1412] hover:text-[#7A1F3D] p-2 rounded-md font-medium transition-colors">
                    <svg class="w-5 h-5 text-[#6B5F5A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span class="hidden sm:inline">Minha Conta</span>
                </a>

                <!-- Cart Button -->
                <a href="{{ route('cart.index') }}" 
                   class="relative flex items-center gap-2 bg-[#F7F3EE] hover:bg-[#EFE8E1] border border-[#E6DED6] px-3.5 py-2 rounded-md text-sm font-semibold text-[#1C1412] hover:text-[#7A1F3D] transition-colors group focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                    <svg class="w-5 h-5 text-[#7A1F3D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    <span class="hidden sm:inline">Sacola</span>
                    <span class="bg-[#7A1F3D] text-white text-[11px] font-bold rounded-full w-5 h-5 flex items-center justify-center -ml-0.5 shadow-sm">
                        {{ $cartCount }}
                    </span>
                </a>
            </div>
        </div>
    </div>

    <!-- Category Navigation Bar (Desktop) -->
    <div class="hidden lg:block border-t border-[#E6DED6] bg-white">
        <div class="kn-container">
            <x-store.category-nav />
        </div>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition-opacity ease-linear duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 bg-black/50 backdrop-blur-sm lg:hidden"
         style="display: none;"
         @click="mobileMenuOpen = false">

        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="relative w-4/5 max-w-sm h-full bg-[#FFFFFF] shadow-2xl flex flex-col justify-between overflow-y-auto"
             @click.stop>
            
            <div>
                <!-- Mobile Drawer Header -->
                <div class="flex items-center justify-between p-5 border-b border-[#E6DED6]">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded bg-[#7A1F3D] text-white flex items-center justify-center font-display font-semibold text-lg">KN</div>
                        <span class="font-display font-bold text-lg text-[#1C1412]">KN Cosméticos</span>
                    </div>
                    <button type="button" @click="mobileMenuOpen = false" class="p-2 text-[#6B5F5A] hover:text-[#1C1412] rounded-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

                <!-- Navigation Links -->
                <div class="p-4 space-y-1">
                    <div class="text-xs font-bold uppercase tracking-wider text-[#B0894D] px-3 py-2">Categorias</div>
                    <a href="{{ route('catalog.index') }}" class="flex items-center justify-between px-3 py-2.5 text-sm font-semibold rounded-md hover:bg-[#F7F3EE] text-[#1C1412]">
                        <span>Todos os Produtos</span>
                        <span class="text-xs text-[#B0894D] font-normal">Ver tudo &rarr;</span>
                    </a>
                    @foreach(\App\Services\MockCatalogService::getCategories() as $cat)
                        <a href="{{ route('category.show', $cat['slug']) }}" 
                           class="flex items-center justify-between px-3 py-2.5 text-sm font-medium rounded-md hover:bg-[#F7F3EE] text-[#1C1412]">
                            <span>{{ $cat['name'] }}</span>
                            <span class="text-xs text-[#6B5F5A]">{{ $cat['product_count'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Mobile Drawer Footer -->
            <div class="p-4 border-t border-[#E6DED6] bg-[#F7F3EE] space-y-2">
                <a href="{{ route('login') }}" class="flex items-center gap-2 w-full px-4 py-2.5 text-sm font-semibold text-[#1C1412] bg-white border border-[#E6DED6] rounded-md justify-center shadow-sm">
                    Entrar na Minha Conta
                </a>
                <a href="{{ route('order.tracking') }}" class="flex items-center gap-2 w-full px-4 py-2 text-xs font-medium text-[#6B5F5A] justify-center hover:text-[#7A1F3D]">
                    Rastrear Pedido Realizado
                </a>
            </div>
        </div>
    </div>
</header>
