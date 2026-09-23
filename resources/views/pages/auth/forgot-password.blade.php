<x-layouts.app title="Recuperar Senha — KN Cosméticos">
    <x-store.auth-card title="Recuperação de Senha" subtitle="Informe seu e-mail cadastrado para receber o link de redefinição">
        <form action="#" method="GET" class="space-y-4">
            <div>
                <label class="block text-xs font-semibold text-[#6B5F5A] mb-1">E-mail Cadastrado</label>
                <input type="email" placeholder="seuemail@exemplo.com.br" required class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded-md px-3.5 py-2.5 text-sm text-[#1C1412] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#7A1F3D]">
            </div>

            <button type="submit" class="w-full py-3 bg-[#7A1F3D] hover:bg-[#5E1730] text-white font-semibold text-sm rounded-lg shadow transition-colors">
                Enviar Link de Redefinição
            </button>
        </form>

        <div class="mt-6 pt-6 border-t border-[#E6DED6] text-center text-xs text-[#6B5F5A]">
            Lembrou da senha? 
            <a href="{{ route('login') }}" class="font-bold text-[#7A1F3D] hover:underline">
                Voltar para o Login
            </a>
        </div>
    </x-store.auth-card>
</x-layouts.app>
