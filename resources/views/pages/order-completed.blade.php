<x-layouts.app title="Pedido Concluído — KN Cosméticos">
    <div class="kn-container py-12">
        <div class="max-w-2xl mx-auto bg-white rounded-xl border border-[#E6DED6] p-8 sm:p-12 kn-card-shadow text-center">
            
            <!-- Success Icon -->
            <div class="w-20 h-20 bg-[#EAF2ED] text-[#2F6B4F] rounded-full flex items-center justify-center mx-auto mb-6 shadow-sm">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>

            <span class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Obrigado pela Compra!</span>
            <h1 class="font-display text-3xl sm:text-4xl font-semibold text-[#1C1412] mt-2 mb-3">
                Pedido Recebido com Sucesso
            </h1>
            <p class="text-xs sm:text-sm text-[#6B5F5A] max-w-md mx-auto leading-relaxed mb-6">
                Enviamos os detalhes do seu pedido e o comprovante de pagamento para <strong class="text-[#1C1412]">{{ $order['customer']['email'] }}</strong>.
            </p>

            <!-- Order Info Pill -->
            <div class="inline-flex items-center gap-4 bg-[#F7F3EE] border border-[#E6DED6] px-5 py-2.5 rounded-lg text-sm mb-8">
                <span class="text-[#6B5F5A]">Número do Pedido:</span>
                <span class="font-mono font-bold text-[#7A1F3D] text-base">{{ $order['code'] }}</span>
            </div>

            <!-- Steps Summary -->
            <div class="border-t border-b border-[#E6DED6] py-6 text-left space-y-3 mb-8">
                <h4 class="text-xs font-bold uppercase tracking-wider text-[#B0894D]">Próximos Passos:</h4>
                <div class="flex items-start gap-3 text-xs text-[#6B5F5A]">
                    <span class="w-5 h-5 rounded-full bg-[#F7F3EE] text-[#7A1F3D] flex items-center justify-center font-bold flex-shrink-0">1</span>
                    <span>Pagamento confirmado via PIX instantâneo.</span>
                </div>
                <div class="flex items-start gap-3 text-xs text-[#6B5F5A]">
                    <span class="w-5 h-5 rounded-full bg-[#F7F3EE] text-[#7A1F3D] flex items-center justify-center font-bold flex-shrink-0">2</span>
                    <span>Nossa equipe técnica separará e embalará seus produtos com todo o cuidado.</span>
                </div>
                <div class="flex items-start gap-3 text-xs text-[#6B5F5A]">
                    <span class="w-5 h-5 rounded-full bg-[#F7F3EE] text-[#7A1F3D] flex items-center justify-center font-bold flex-shrink-0">3</span>
                    <span>O código de rastreio será enviado automaticamente para seu e-mail e WhatsApp assim que despachado.</span>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('order.tracking') }}" 
                   class="w-full sm:w-auto px-8 py-3 bg-[#7A1F3D] hover:bg-[#5E1730] text-white font-semibold text-sm rounded-lg shadow transition-colors">
                    Acompanhar Status do Pedido
                </a>
                <a href="{{ route('catalog.index') }}" 
                   class="w-full sm:w-auto px-6 py-3 bg-transparent hover:bg-[#F7F3EE] text-[#1C1412] border border-[#E6DED6] font-semibold text-sm rounded-lg transition-colors">
                    Voltar ao Catálogo
                </a>
            </div>

        </div>
    </div>
</x-layouts.app>
