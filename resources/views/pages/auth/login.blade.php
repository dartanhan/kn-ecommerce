<x-layouts.app title="Entrar na Conta — KN Cosméticos">
    <x-store.auth-card title="Acesse sua Conta" subtitle="Acompanhe seus pedidos e compre com agilidade">
        <form action="#" method="GET" class="space-y-4">
            <div>
                <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">E-mail Cadastrado</label>
                <input type="email" placeholder="seuemail@exemplo.com.br" required class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2.5 text-sm text-[#1C1412] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
            </div>

            <div>
                <div class="flex items-center justify-between mb-1">
                    <label class="block text-xs font-semibold text-[#6B5F5A]">Sua Senha</label>
                    <a href="{{ route('password.request') }}" class="text-xs text-[#7A1F3D] hover:underline font-medium">Esqueceu?</a>
                </div>
                <input type="password" placeholder="••••••••" required class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2.5 text-sm text-[#1C1412] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
            </div>

            <div class="flex items-center gap-2 pt-1">
                <input type="checkbox" id="remember" class="text-[#7A1F3D] rounded border-[#E6DED6]">
                <label for="remember" class="text-xs text-[#6B5F5A] cursor-pointer">Lembrar meus dados</label>
            </div>

            <button type="submit" class="w-full py-3 bg-[#7A1F3D] hover:bg-[#5E1730] text-white font-semibold text-sm rounded-lg shadow transition-colors">
                Entrar no E-commerce
            </button>
        </form>

        <div class="mt-6 pt-6 border-t border-[#E6DED6] text-center text-xs text-[#6B5F5A]">
            Ainda não possui cadastro? 
            <a href="{{ route('register') }}" class="font-bold text-[#7A1F3D] hover:underline">
                Criar uma conta gratuita
            </a>
        </div>
    </x-store.auth-card>
</x-layouts.app>
