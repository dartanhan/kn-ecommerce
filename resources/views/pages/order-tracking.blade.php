<x-layouts.app title="Acompanhamento do Pedido — KN Cosméticos">
    <div class="kn-container py-8">
        
        <!-- Breadcrumbs -->
        <x-store.breadcrumb :items="['Minha Conta' => route('login'), 'Acompanhar Pedido' => '']" />

        <div class="py-6 border-b border-[#E6DED6] flex flex-col sm:flex-row sm:items-baseline justify-between gap-2">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Rastreio em Tempo Real</span>
                <h1 class="font-display text-3xl sm:text-4xl font-semibold text-[#1C1412] mt-1">
                    Pedido #{{ $order['code'] }}
                </h1>
            </div>
            <div class="text-xs text-[#6B5F5A]">
                Realizado em: <strong class="text-[#1C1412]">{{ $order['created_at'] }}</strong>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 mt-8 items-start">
            
            <!-- Left: Status Timeline & Recipient (8 cols) -->
            <div class="lg:col-span-8 space-y-6">
                
                <!-- Status Timeline Box -->
                <div class="bg-white rounded-lg border border-[#E6DED6] p-6 kn-card-shadow">
                    <h3 class="font-display font-semibold text-lg text-[#1C1412] mb-2">
                        Status do Processamento
                    </h3>
                    <p class="text-xs text-[#6B5F5A] mb-4">
                        Atualizado automaticamente conforme o fluxo de separação e expedição.
                    </p>

                    <x-store.order-status :steps="$order['steps']" />
                </div>

                <!-- Recipient & Address -->
                <div class="bg-white rounded-lg border border-[#E6DED6] p-6 kn-card-shadow">
                    <h3 class="font-display font-semibold text-lg text-[#1C1412] mb-4">
                        Endereço de Entrega & Destinatário
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs text-[#6B5F5A]">
                        <div>
                            <span class="font-bold text-[#1C1412] block mb-1">Destinatário:</span>
                            <div>{{ $order['customer']['name'] }}</div>
                            <div>{{ $order['customer']['phone'] }}</div>
                            <div>{{ $order['customer']['email'] }}</div>
                        </div>
                        <div>
                            <span class="font-bold text-[#1C1412] block mb-1">Endereço de Envio:</span>
                            <div>{{ $order['customer']['address'] }}</div>
                            <div>{{ $order['customer']['neighborhood'] }}</div>
                            <div>{{ $order['customer']['city'] }} - {{ $order['customer']['state'] }}, {{ $order['customer']['zip'] }}</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right: Items & Totals (4 cols) -->
            <div class="lg:col-span-4 bg-white rounded-lg border border-[#E6DED6] p-6 kn-card-shadow">
                <h3 class="font-display font-semibold text-lg text-[#1C1412] pb-4 border-b border-[#E6DED6]">
                    Itens do Pedido
                </h3>

                <div class="py-4 space-y-3 divide-y divide-[#F7F3EE]">
                    @foreach($order['items'] as $item)
                        <div class="flex items-center gap-3 pt-3 first:pt-0">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-12 h-12 rounded object-cover border border-[#E6DED6] flex-shrink-0">
                            <div class="flex-1 min-w-0 text-xs">
                                <div class="font-semibold text-[#1C1412] truncate">{{ $item['name'] }}</div>
                                <div class="text-[#6B5F5A]">Qtd: {{ $item['quantity'] }} &bull; {{ $item['variant'] }}</div>
                            </div>
                            <div class="text-xs font-bold text-[#1C1412] whitespace-nowrap">
                                R$ {{ number_format($item['subtotal'], 2, ',', '.') }}
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="pt-4 border-t border-[#E6DED6] space-y-2 text-xs text-[#6B5F5A]">
                    <div class="flex justify-between">
                        <span>Subtotal</span>
                        <span class="font-semibold text-[#1C1412]">R$ {{ number_format($order['subtotal'], 2, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Frete (Sedex)</span>
                        <span class="font-semibold text-[#1C1412]">R$ {{ number_format($order['shipping'], 2, ',', '.') }}</span>
                    </div>
                    <div class="pt-2 border-t border-[#E6DED6] flex justify-between items-baseline text-sm font-bold text-[#1C1412]">
                        <span>Total Pago</span>
                        <span class="text-lg font-extrabold text-[#7A1F3D]">
                            R$ {{ number_format($order['total'], 2, ',', '.') }}
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-layouts.app>
