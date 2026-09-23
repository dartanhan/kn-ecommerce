<x-layouts.app :title="$product['name'] . ' — KN Cosméticos'">
    <div class="kn-container py-6">
        
        <!-- Breadcrumbs -->
        <x-store.breadcrumb :items="[
            'Produtos' => route('catalog.index'), 
            $product['category_name'] => route('category.show', $product['category_slug']),
            $product['name'] => ''
        ]" />

        <!-- Product PDP Layout (2 Columns Desktop / 1 Column Mobile) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 mt-4 items-start">
            
            <!-- Left Column: Gallery (5 cols on lg) -->
            <div class="lg:col-span-6 xl:col-span-6">
                <x-store.product-gallery :images="$product['gallery'] ?? [$product['image']]" :productName="$product['name']" />
            </div>

            <!-- Right Column: Purchase Information (6 cols on lg) -->
            <div class="lg:col-span-6 xl:col-span-6 space-y-6">
                
                <div>
                    <!-- Category & SKU Line -->
                    <div class="flex items-center justify-between text-xs text-[#6B5F5A] mb-2">
                        <a href="{{ route('category.show', $product['category_slug']) }}" class="font-bold uppercase tracking-wider text-[#B0894D] hover:underline">
                            {{ $product['category_name'] }} &bull; {{ $product['subcategory'] }}
                        </a>
                        <span class="font-mono">SKU: {{ $product['sku'] }}</span>
                    </div>

                    <!-- Title -->
                    <h1 class="font-display text-2xl sm:text-3xl lg:text-4xl font-semibold text-[#1C1412] leading-tight">
                        {{ $product['name'] }}
                    </h1>
                </div>

                <!-- Price & Stock Status -->
                <div class="p-4 bg-white rounded-lg border border-[#E6DED6] kn-card-shadow flex items-center justify-between">
                    <div>
                        <div class="text-xs text-[#6B5F5A]">Preço Unitário de Venda (B2C)</div>
                        <x-store.price :value="$product['price']" size="xl" class="mt-1" />
                    </div>
                    <div>
                        <x-store.stock-badge :stock="$product['stock']" />
                    </div>
                </div>

                <!-- Variant Picker -->
                @if(!empty($product['variants']))
                    <div class="pt-2">
                        <x-store.variant-picker :variants="$product['variants']" />
                    </div>
                @endif

                <!-- Quantity & CTAs -->
                <div class="pt-2 space-y-3">
                    <div class="flex items-center gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Quantidade</label>
                            <x-store.qty-stepper :value="1" :max="$product['stock'] > 0 ? $product['stock'] : 1" />
                        </div>
                        <div class="flex-1 pt-5">
                            <x-store.add-to-cart-button :disabled="$product['stock'] <= 0" label="Adicionar à Sacola" />
                        </div>
                    </div>

                    <a href="{{ route('checkout.index') }}" 
                       class="w-full py-3 bg-transparent hover:bg-[#F7F3EE] text-[#1C1412] border border-[#1C1412] rounded-lg font-semibold text-sm flex items-center justify-center transition-colors">
                        Comprar Agora com 1 Clique
                    </a>
                </div>

                <!-- Shipping Placeholder UX -->
                <div class="pt-4 border-t border-[#E6DED6]">
                    <div class="flex items-center justify-between text-xs text-[#6B5F5A] mb-2">
                        <span class="font-bold text-[#1C1412]">Simular Frete & Prazo</span>
                        <span class="text-[#B0894D]">Cálculo definitivo no checkout</span>
                    </div>
                    <div class="flex gap-2">
                        <input type="text" placeholder="Digite seu CEP" maxlength="9" class="w-40 bg-white border border-[#E6DED6] rounded px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-[#7A1F3D]">
                        <button type="button" class="px-4 py-2 bg-[#F7F3EE] hover:bg-[#EFE8E1] border border-[#E6DED6] text-xs font-semibold text-[#1C1412] rounded transition-colors">
                            Calcular
                        </button>
                    </div>
                </div>

                <!-- Description -->
                <div class="pt-4 border-t border-[#E6DED6]">
                    <h3 class="font-display font-semibold text-lg text-[#1C1412] mb-2">Descrição do Produto</h3>
                    <p class="text-sm text-[#6B5F5A] leading-relaxed">
                        {{ $product['description'] }}
                    </p>
                </div>

                <!-- Technical Specifications -->
                @if(!empty($product['specifications']))
                    <div class="pt-4 border-t border-[#E6DED6]">
                        <h3 class="font-display font-semibold text-lg text-[#1C1412] mb-3">Especificações Técnicas</h3>
                        <div class="bg-white rounded-lg border border-[#E6DED6] overflow-hidden text-xs">
                            <dl class="divide-y divide-[#E6DED6]">
                                @foreach($product['specifications'] as $key => $val)
                                    <div class="px-4 py-2.5 flex justify-between {{ $loop->even ? 'bg-[#F7F3EE]/50' : 'bg-white' }}">
                                        <dt class="font-semibold text-[#6B5F5A]">{{ $key }}</dt>
                                        <dd class="text-[#1C1412] font-medium text-right">{{ $val }}</dd>
                                    </div>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                @endif

            </div>
        </div>

        <!-- Related Products Section -->
        <x-store.related-products :products="$relatedProducts" />

    </div>
</x-layouts.app>
