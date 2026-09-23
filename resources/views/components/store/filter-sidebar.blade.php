@props(['categories' => [], 'filters' => []])

<aside class="w-64 flex-shrink-0 space-y-6">
    <div class="bg-white rounded-lg border border-[#E6DED6] p-5 kn-card-shadow">
        <div class="flex items-center justify-between pb-3 border-b border-[#E6DED6] mb-4">
            <h3 class="font-display font-semibold text-lg text-[#1C1412]">Filtros</h3>
            @if(!empty(array_filter($filters)))
                <a href="{{ request()->url() }}" class="text-xs text-[#7A1F3D] hover:underline font-semibold">
                    Limpar
                </a>
            @endif
        </div>

        <form action="{{ request()->url() }}" method="GET" class="space-y-6">
            @if(request()->has('q'))
                <input type="hidden" name="q" value="{{ request()->query('q') }}">
            @endif
            @if(request()->has('ordenar'))
                <input type="hidden" name="ordenar" value="{{ request()->query('ordenar') }}">
            @endif

            <!-- Categorias -->
            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-[#B0894D] mb-3">Categorias</h4>
                <div class="space-y-1.5 text-sm">
                    @foreach($categories as $cat)
                        <label class="flex items-center justify-between text-[#6B5F5A] hover:text-[#1C1412] cursor-pointer py-1">
                            <span class="flex items-center gap-2">
                                <input type="radio" 
                                       name="categoria" 
                                       value="{{ $cat['slug'] }}" 
                                       {{ ($filters['category'] ?? '') === $cat['slug'] ? 'checked' : '' }}
                                       onchange="this.form.submit()"
                                       class="text-[#7A1F3D] focus:ring-[#7A1F3D] rounded border-[#E6DED6]">
                                <span>{{ $cat['name'] }}</span>
                            </span>
                            <span class="text-xs text-[#6B5F5A]">({{ $cat['product_count'] }})</span>
                        </label>
                    @endforeach
                </div>
            </div>

            <!-- Disponibilidade -->
            <div class="pt-4 border-t border-[#F7F3EE]">
                <h4 class="text-xs font-bold uppercase tracking-wider text-[#B0894D] mb-3">Disponibilidade</h4>
                <div class="space-y-2 text-sm">
                    <label class="flex items-center gap-2 text-[#6B5F5A] hover:text-[#1C1412] cursor-pointer">
                        <input type="radio" 
                               name="disponibilidade" 
                               value="" 
                               {{ empty($filters['availability']) ? 'checked' : '' }}
                               onchange="this.form.submit()"
                               class="text-[#7A1F3D] focus:ring-[#7A1F3D]">
                        <span>Todos os itens</span>
                    </label>
                    <label class="flex items-center gap-2 text-[#6B5F5A] hover:text-[#1C1412] cursor-pointer">
                        <input type="radio" 
                               name="disponibilidade" 
                               value="in_stock" 
                               {{ ($filters['availability'] ?? '') === 'in_stock' ? 'checked' : '' }}
                               onchange="this.form.submit()"
                               class="text-[#7A1F3D] focus:ring-[#7A1F3D]">
                        <span>Prontos para envio</span>
                    </label>
                    <label class="flex items-center gap-2 text-[#6B5F5A] hover:text-[#1C1412] cursor-pointer">
                        <input type="radio" 
                               name="disponibilidade" 
                               value="out_of_stock" 
                               {{ ($filters['availability'] ?? '') === 'out_of_stock' ? 'checked' : '' }}
                               onchange="this.form.submit()"
                               class="text-[#7A1F3D] focus:ring-[#7A1F3D]">
                        <span>Esgotados</span>
                    </label>
                </div>
            </div>

            <!-- Faixa de Preço -->
            <div class="pt-4 border-t border-[#F7F3EE]">
                <h4 class="text-xs font-bold uppercase tracking-wider text-[#B0894D] mb-3">Faixa de Preço (R$)</h4>
                <div class="flex items-center gap-2">
                    <input type="number" 
                           name="preco_min" 
                           placeholder="Mín" 
                           value="{{ $filters['min_price'] ?? '' }}"
                           class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded px-2.5 py-1.5 text-xs text-[#1C1412] focus:outline-none focus:ring-1 focus:ring-[#7A1F3D]">
                    <span class="text-[#6B5F5A] text-xs">-</span>
                    <input type="number" 
                           name="preco_max" 
                           placeholder="Máx" 
                           value="{{ $filters['max_price'] ?? '' }}"
                           class="w-full bg-[#F7F3EE] border border-[#E6DED6] rounded px-2.5 py-1.5 text-xs text-[#1C1412] focus:outline-none focus:ring-1 focus:ring-[#7A1F3D]">
                </div>
                <button type="submit" 
                        class="w-full mt-3 bg-[#F7F3EE] hover:bg-[#EFE8E1] text-[#7A1F3D] border border-[#E6DED6] text-xs font-semibold py-1.5 rounded transition-colors">
                    Filtrar Preço
                </button>
            </div>
        </form>
    </div>
</aside>
