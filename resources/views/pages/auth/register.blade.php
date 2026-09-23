<x-layouts.app title="Criar Conta — KN Cosméticos">
    <x-store.auth-card title="Crie sua Conta" subtitle="Cadastre-se para comprar mais rápido e acompanhar seus pedidos">
        <form action="#" method="GET" class="space-y-4">
            <div>
                <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Nome Completo</label>
                <input type="text" placeholder="Ex: Mariana Silveira" required class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2.5 text-sm text-[#1C1412] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
            </div>

            <div>
                <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">E-mail Principal</label>
                <input type="email" placeholder="seuemail@exemplo.com.br" required class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2.5 text-sm text-[#1C1412] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
            </div>

            <div>
                <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Telefone / WhatsApp</label>
                <input type="tel" placeholder="(11) 98765-4321" required class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2.5 text-sm text-[#1C1412] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Senha</label>
                    <input type="password" placeholder="••••••••" required class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2.5 text-sm text-[#1C1412] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">Confirmar Senha</label>
                    <input type="password" placeholder="••••••••" required class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2.5 text-sm text-[#1C1412] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
                </div>
            </div>

            <button type="submit" class="w-full py-3 bg-[#7A1F3D] hover:bg-[#5E1730] text-white font-semibold text-sm rounded-lg shadow transition-colors mt-2">
                Concluir Cadastro
            </button>
        </form>

        <div class="mt-6 pt-6 border-t border-[#E6DED6] text-center text-xs text-[#6B5F5A]">
            Já possui uma conta? 
            <a href="{{ route('login') }}" class="font-bold text-[#7A1F3D] hover:underline">
                Acessar agora
            </a>
        </div>
    </x-store.auth-card>
</x-layouts.app>
