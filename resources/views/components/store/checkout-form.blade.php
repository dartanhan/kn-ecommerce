<div x-data="{ 
        step: 1, 
        cepLoading: false, 
        cepFilled: true,
        paymentMethod: 'pix',
        cep: '01418-100',
        rua: 'Alameda Santos',
        bairro: 'Cerqueira César',
        cidade: 'São Paulo',
        uf: 'SP'
     }" 
     class="space-y-8">

    <!-- Progress Indicator -->
    <div class="flex items-center justify-between pb-6 border-b border-[#E6DED6]">
        <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-xs"
                  :class="step >= 1 ? 'bg-[#7A1F3D] text-white shadow' : 'bg-[#E6DED6] text-[#6B5F5A]'">
                1
            </span>
            <span class="text-sm font-semibold" :class="step >= 1 ? 'text-[#1C1412]' : 'text-[#6B5F5A]'">
                Identificação & Entrega
            </span>
        </div>

        <div class="w-12 h-0.5 bg-[#E6DED6]"></div>

        <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-xs"
                  :class="step >= 2 ? 'bg-[#7A1F3D] text-white shadow' : 'bg-[#E6DED6] text-[#6B5F5A]'">
                2
            </span>
            <span class="text-sm font-semibold" :class="step >= 2 ? 'text-[#1C1412]' : 'text-[#6B5F5A]'">
                Pagamento (Visual)
            </span>
        </div>
    </div>

    <!-- Step 1: Identificação e Entrega -->
    <div x-show="step === 1" class="space-y-6">
        
        <!-- Identificação -->
        <div class="bg-white rounded-lg border border-[#E6DED6] p-6 kn-card-shadow">
            <h3 class="font-display font-semibold text-lg text-[#1C1412] mb-4 flex items-center gap-2">
                <span class="text-[#B0894D]">01.</span>
                <span>Dados de Identificação</span>
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">E-mail para envio de nota e rastreio *</label>
                    <input type="email" value="mariana.silveira@exemplo.com.br" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Nome Completo *</label>
                    <input type="text" value="Mariana Silveira" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">CPF *</label>
                    <input type="text" value="382.910.448-21" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Telefone / WhatsApp *</label>
                    <input type="tel" value="(11) 98765-4321" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
            </div>
        </div>

        <!-- Endereço de Entrega -->
        <div class="bg-white rounded-lg border border-[#E6DED6] p-6 kn-card-shadow">
            <h3 class="font-display font-semibold text-lg text-[#1C1412] mb-4 flex items-center gap-2">
                <span class="text-[#B0894D]">02.</span>
                <span>Endereço de Entrega</span>
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">CEP *</label>
                    <div class="relative">
                        <input type="text" x-model="cep" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                        <span class="absolute inset-y-0 right-3 flex items-center text-xs text-[#2F6B4F] font-bold">✓</span>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Logradouro / Rua *</label>
                    <input type="text" x-model="rua" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Número *</label>
                    <input type="text" value="1200" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Complemento</label>
                    <input type="text" value="Apto 82" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Bairro *</label>
                    <input type="text" x-model="bairro" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Cidade *</label>
                    <input type="text" x-model="cidade" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Estado (UF) *</label>
                    <input type="text" x-model="uf" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
            </div>

            <!-- Opções de Envio Mock -->
            <div class="mt-6 pt-4 border-t border-[#F7F3EE]">
                <h4 class="text-xs font-bold uppercase tracking-wider text-[#B0894D] mb-3">Opção de Envio</h4>
                <div class="space-y-2">
                    <label class="flex items-center justify-between p-3.5 rounded-lg border-2 border-[#7A1F3D] bg-[#F7F3EE]/60 cursor-pointer">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="shipping" checked class="text-[#7A1F3D] focus:ring-[#7A1F3D]">
                            <div>
                                <div class="text-sm font-semibold text-[#1C1412]">Sedex Expresso</div>
                                <div class="text-xs text-[#6B5F5A]">Previsão de 2 a 3 dias úteis</div>
                            </div>
                        </div>
                        <span class="text-sm font-bold text-[#1C1412]">R$ 18,50</span>
                    </label>
                </div>
            </div>
        </div>

        <button type="button" 
                @click="step = 2; window.scrollTo({ top: 0, behavior: 'smooth' })"
                class="w-full py-4 bg-[#7A1F3D] hover:bg-[#5E1730] text-white font-semibold text-sm rounded-lg flex items-center justify-center gap-2 shadow-md transition-colors">
            <span>Continuar para o Pagamento</span>
            <span>&rarr;</span>
        </button>
    </div>

    <!-- Step 2: Pagamento Visual (Protótipo) -->
    <div x-show="step === 2" class="space-y-6" style="display: none;">
        
        <div class="bg-[#FFF9F2] border border-[#EFE0C9] rounded-lg p-4 text-xs text-[#6B5F5A] flex items-center gap-3">
            <span class="text-xl">ℹ️</span>
            <div>
                <strong class="font-bold text-[#1C1412]">Protótipo Visual:</strong> Esta é uma simulação da tela de pagamento da Etapa 02. Nenhuma transação financeira real será executada nesta etapa.
            </div>
        </div>

        <div class="bg-white rounded-lg border border-[#E6DED6] p-6 kn-card-shadow">
            <h3 class="font-display font-semibold text-lg text-[#1C1412] mb-4 flex items-center gap-2">
                <span class="text-[#B0894D]">03.</span>
                <span>Forma de Pagamento</span>
            </h3>

            <!-- Payment Methods Toggle -->
            <div class="grid grid-cols-2 gap-3 mb-6">
                <button type="button" 
                        @click="paymentMethod = 'pix'"
                        class="p-4 rounded-lg border-2 text-center transition-all"
                        :class="paymentMethod === 'pix' ? 'border-[#7A1F3D] bg-[#F7F3EE]' : 'border-[#E6DED6] hover:border-[#B0894D]'">
                    <div class="font-bold text-sm text-[#1C1412] flex items-center justify-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#2F6B4F]"></span>
                        <span>PIX</span>
                    </div>
                    <div class="text-[11px] text-[#6B5F5A] mt-1">Aprovação imediata</div>
                </button>

                <button type="button" 
                        @click="paymentMethod = 'card'"
                        class="p-4 rounded-lg border-2 text-center transition-all"
                        :class="paymentMethod === 'card' ? 'border-[#7A1F3D] bg-[#F7F3EE]' : 'border-[#E6DED6] hover:border-[#B0894D]'">
                    <div class="font-bold text-sm text-[#1C1412] flex items-center justify-center gap-1.5">
                        <span>Cartão de Crédito</span>
                    </div>
                    <div class="text-[11px] text-[#6B5F5A] mt-1">Até 6x sem juros</div>
                </button>
            </div>

            <!-- PIX Mock Details -->
            <div x-show="paymentMethod === 'pix'" class="text-center p-6 bg-[#F7F3EE] rounded-lg border border-[#E6DED6] space-y-4">
                <div class="w-36 h-36 bg-white mx-auto rounded border border-[#E6DED6] p-2 flex items-center justify-center shadow-inner">
                    <!-- QR Code Placeholder Graphic -->
                    <div class="w-full h-full border-2 border-dashed border-[#6B5F5A] flex items-center justify-center text-[10px] text-[#6B5F5A] font-mono">
                        [QR CODE PIX]
                    </div>
                </div>
                <div class="text-xs text-[#6B5F5A] max-w-sm mx-auto">
                    Ao finalizar o pedido, o código PIX Copia & Cola e o QR Code oficial serão gerados para pagamento via seu banco.
                </div>
            </div>

            <!-- Credit Card Mock Fields -->
            <div x-show="paymentMethod === 'card'" class="space-y-4" style="display: none;">
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Número do Cartão</label>
                    <input type="text" placeholder="0000 0000 0000 0000" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Validade (MM/AA)</label>
                        <input type="text" placeholder="12/28" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Código CVV</label>
                        <input type="text" placeholder="123" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Nome Impresso no Cartão</label>
                    <input type="text" placeholder="MARIANA SILVEIRA" class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2 text-sm focus:bg-white focus:outline-none">
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="button" 
                    @click="step = 1" 
                    class="py-3.5 px-6 border border-[#E6DED6] bg-white hover:bg-[#F7F3EE] text-[#6B5F5A] font-semibold text-sm rounded-lg transition-colors">
                &larr; Voltar
            </button>
            <a href="{{ route('order.completed') }}" 
               class="flex-1 py-3.5 bg-[#7A1F3D] hover:bg-[#5E1730] text-white font-semibold text-sm rounded-lg flex items-center justify-center gap-2 shadow-md transition-colors">
                <span>Finalizar Pedido Demonstrativo</span>
                <span>&rarr;</span>
            </a>
        </div>
    </div>
</div>
