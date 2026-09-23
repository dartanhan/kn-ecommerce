<footer class="bg-white border-t border-[#E6DED6] pt-16 pb-12 mt-16 text-[#6B5F5A]">
    <div class="kn-container">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-[#E6DED6]">
            
            <!-- Col 1: Brand & Bio -->
            <div class="lg:col-span-2 space-y-4">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 group">
                    <div class="w-10 h-10 rounded-lg bg-[#7A1F3D] text-white flex items-center justify-center font-display font-semibold text-2xl">
                        KN
                    </div>
                    <div class="flex flex-col">
                        <span class="font-display font-bold text-xl text-[#1C1412] tracking-tight">
                            COSMÉTICOS
                        </span>
                        <span class="text-[9px] text-[#B0894D] uppercase tracking-[0.2em] font-semibold">
                            Esmaltaria & Beleza
                        </span>
                    </div>
                </a>
                
                <p class="text-xs sm:text-sm text-[#6B5F5A] leading-relaxed max-w-sm">
                    Distribuidora e loja especializada em produtos de alto rendimento para nail designers, manicures e especialistas em embelezamento do olhar.
                </p>

                <div class="text-xs text-[#6B5F5A] space-y-1">
                    <div>CNPJ: 00.000.000/0001-00 (Placeholder Oficial)</div>
                    <div>Atendimento: seg a sex das 08h às 18h</div>
                </div>
            </div>

            <!-- Col 2: Categorias -->
            <div class="space-y-3">
                <h4 class="font-display font-semibold text-base text-[#1C1412]">Categorias</h4>
                <ul class="space-y-2 text-xs sm:text-sm">
                    @foreach(\App\Services\MockCatalogService::getCategories() as $cat)
                        <li>
                            <a href="{{ route('category.show', $cat['slug']) }}" class="hover:text-[#7A1F3D] transition-colors">
                                {{ $cat['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Col 3: Institucional -->
            <div class="space-y-3">
                <h4 class="font-display font-semibold text-base text-[#1C1412]">Institucional</h4>
                <ul class="space-y-2 text-xs sm:text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-[#7A1F3D] transition-colors">Sobre a KN Cosméticos</a></li>
                    <li><a href="{{ route('catalog.index') }}" class="hover:text-[#7A1F3D] transition-colors">Catálogo de Produtos</a></li>
                    <li><a href="{{ route('order.tracking') }}" class="hover:text-[#7A1F3D] transition-colors">Acompanhar Pedido</a></li>
                    <li><a href="{{ route('login') }}" class="hover:text-[#7A1F3D] transition-colors">Área do Cliente</a></li>
                </ul>
            </div>

            <!-- Col 4: Atendimento & Ajuda -->
            <div class="space-y-3">
                <h4 class="font-display font-semibold text-base text-[#1C1412]">Atendimento</h4>
                <ul class="space-y-2 text-xs sm:text-sm">
                    <li><span class="block text-xs text-[#6B5F5A]">E-mail de Contato:</span> <strong class="text-[#1C1412]">sac@knesmalteria.com.br</strong></li>
                    <li><span class="block text-xs text-[#6B5F5A]">WhatsApp Suporte:</span> <strong class="text-[#1C1412]">(11) 98765-4321</strong></li>
                    <li><span class="block text-xs text-[#6B5F5A]">Localização:</span> São Paulo - SP</li>
                </ul>
            </div>

        </div>

        <!-- Footer Bottom: Payment Seals & Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-[#6B5F5A]">
            <div>
                &copy; {{ date('Y') }} KN Cosméticos Storefront. Todos os direitos reservados.
            </div>

            <!-- Payment Badges Mock -->
            <div class="flex items-center gap-3">
                <span class="text-[11px] font-semibold text-[#1C1412]">Formas aceitas:</span>
                <span class="px-2 py-1 bg-[#F7F3EE] rounded border border-[#E6DED6] font-bold text-[10px] text-[#2F6B4F]">PIX</span>
                <span class="px-2 py-1 bg-[#F7F3EE] rounded border border-[#E6DED6] font-bold text-[10px] text-[#1C1412]">VISA</span>
                <span class="px-2 py-1 bg-[#F7F3EE] rounded border border-[#E6DED6] font-bold text-[10px] text-[#1C1412]">MASTERCARD</span>
                <span class="px-2 py-1 bg-[#F7F3EE] rounded border border-[#E6DED6] font-bold text-[10px] text-[#1C1412]">ELO</span>
            </div>
        </div>

    </div>
</footer>
