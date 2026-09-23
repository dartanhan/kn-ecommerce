<x-layouts.app title="KN Cosméticos — Loja Oficial | Géis Construtores, Esmaltes & Lash">
    
    <!-- Hero Banner Editorial -->
    <x-store.hero-banner />

    <!-- Faixa de Benefícios -->
    <x-store.benefit-row />

    <!-- Categorias em Destaque -->
    <section class="py-16 bg-[#F7F3EE]">
        <div class="kn-container">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Navegue por Linhas</span>
                    <h2 class="font-display text-3xl sm:text-4xl font-semibold text-[#1C1412] mt-1">
                        Categorias Profissionais
                    </h2>
                </div>
                <a href="{{ route('catalog.index') }}" class="text-xs sm:text-sm font-semibold text-[#7A1F3D] hover:underline flex items-center gap-1">
                    <span>Ver Todas as Categorias</span>
                    <span>&rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-6">
                @foreach($categories as $cat)
                    <a href="{{ route('category.show', $cat['slug']) }}" 
                       class="group bg-white rounded-lg border border-[#E6DED6] p-4 text-center kn-card-shadow transition-all duration-300 hover:border-[#7A1F3D]">
                        <div class="aspect-square bg-[#EFE8E1] rounded-md overflow-hidden mb-3 border border-[#E6DED6]">
                            <img src="{{ $cat['image'] }}" alt="{{ $cat['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="font-semibold text-sm text-[#1C1412] group-hover:text-[#7A1F3D] transition-colors line-clamp-1">
                            {{ $cat['name'] }}
                        </h3>
                        <p class="text-xs text-[#6B5F5A] mt-1">
                            {{ $cat['product_count'] }} produtos
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Produtos em Destaque -->
    <section class="py-16 bg-white border-y border-[#E6DED6]">
        <div class="kn-container">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Seleção de Elite</span>
                    <h2 class="font-display text-3xl sm:text-4xl font-semibold text-[#1C1412] mt-1">
                        Destaques da Esmaltaria
                    </h2>
                </div>
                <a href="{{ route('catalog.index') }}" class="text-xs sm:text-sm font-semibold text-[#7A1F3D] hover:underline flex items-center gap-1">
                    <span>Ver Catálogo Completo</span>
                    <span>&rarr;</span>
                </a>
            </div>

            <x-store.product-grid :products="$featuredProducts" />
        </div>
    </section>

    <!-- Lançamentos & Novidades -->
    <section class="py-16 bg-[#F7F3EE]">
        <div class="kn-container">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Recém-Chegados</span>
                    <h2 class="font-display text-3xl sm:text-4xl font-semibold text-[#1C1412] mt-1">
                        Lançamentos Profissionais
                    </h2>
                </div>
                <a href="{{ route('catalog.index', ['ordenar' => 'newest']) }}" class="text-xs sm:text-sm font-semibold text-[#7A1F3D] hover:underline flex items-center gap-1">
                    <span>Ver Novidades</span>
                    <span>&rarr;</span>
                </a>
            </div>

            <x-store.product-grid :products="$newArrivals" />
        </div>
    </section>

    <!-- Faixa Institucional de Confiança -->
    <section class="py-16 bg-white border-t border-[#E6DED6]">
        <div class="kn-container">
            <div class="max-w-3xl mx-auto text-center space-y-4">
                <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Tradição & Confiança</span>
                <h2 class="font-display text-3xl sm:text-4xl font-semibold text-[#1C1412]">
                    A Parceira Oficial das Melhores Profissionais
                </h2>
                <p class="text-sm text-[#6B5F5A] leading-relaxed">
                    A KN Cosméticos é sinônimo de segurança técnica, suporte especializado e fornecimento contínuo para estúdios de unhas e beleza do Brasil. Todos os produtos são rigorosamente selecionados para garantir agilidade no atendimento e fidelização das suas clientes.
                </p>
                <div class="pt-4 flex items-center justify-center gap-8 text-xs font-semibold text-[#1C1412]">
                    <span class="flex items-center gap-1.5">
                        <span class="text-[#2F6B4F] text-base">✓</span> Produtos Certificados
                    </span>
                    <span class="flex items-center gap-1.5">
                        <span class="text-[#2F6B4F] text-base">✓</span> Envio Rápido e Seguro
                    </span>
                    <span class="flex items-center gap-1.5">
                        <span class="text-[#2F6B4F] text-base">✓</span> Suporte Técnico Dedicado
                    </span>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
