<section class="relative bg-[#1C1412] text-white overflow-hidden" aria-label="Apresentação KN Cosméticos">
    <!-- Background Image with Gradient Overlay -->
    <div class="absolute inset-0">
        <img src="/images/hero-banner.jpg" 
             alt="KN Cosméticos - Cuidados Profissionais" 
             class="w-full h-full object-cover object-center opacity-40 mix-blend-luminosity scale-105 transition-transform duration-1000">
        <div class="absolute inset-0 bg-gradient-to-r from-[#1C1412] via-[#1C1412]/80 to-transparent"></div>
    </div>

    <!-- Content -->
    <div class="kn-container relative py-16 sm:py-24 lg:py-32">
        <div class="max-w-xl space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#B0894D]/20 border border-[#B0894D]/30 text-xs font-semibold text-[#B0894D] tracking-wide">
                <span>Catálogo Profissional 2026</span>
            </div>

            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-[#F7F3EE] leading-[1.1]">
                Excelência & Alta Performance para Esmalterias
            </h1>

            <p class="text-sm sm:text-base text-[#E6DED6]/90 font-normal leading-relaxed max-w-lg">
                Fórmulas de alta densidade, esmaltes em gel de brilho vitrificado, equipamentos e ferramentas cirúrgicas para elevar o padrão do seu espaço de beleza.
            </p>

            <div class="pt-2 flex flex-wrap items-center gap-4">
                <a href="{{ route('catalog.index') }}" 
                   class="px-8 py-3.5 bg-[#7A1F3D] hover:bg-[#5E1730] text-white font-semibold text-sm rounded-lg transition-all shadow-lg hover:shadow-xl active:scale-95 flex items-center gap-2">
                    <span>Ver Produtos</span>
                    <span>&rarr;</span>
                </a>

                <a href="{{ route('category.show', 'alongamento-gel') }}" 
                   class="px-6 py-3.5 bg-white/10 hover:bg-white/20 text-[#F7F3EE] border border-white/20 font-semibold text-sm rounded-lg backdrop-blur-sm transition-all">
                    Géis Construtores
                </a>
            </div>
        </div>
    </div>
</section>
