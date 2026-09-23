@props(['categories' => [], 'filters' => []])

<div x-data="{ open: false }" class="lg:hidden">
    <!-- Trigger Button -->
    <button type="button" 
            @click="open = true" 
            class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border border-[#E6DED6] rounded-md text-xs font-semibold text-[#1C1412] shadow-sm">
        <svg class="w-4 h-4 text-[#7A1F3D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
        </svg>
        <span>Filtrar</span>
    </button>

    <!-- Bottom Sheet Modal -->
    <div x-show="open" 
         x-transition:enter="transition-opacity ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm"
         style="display: none;"
         @click="open = false">

        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="translate-y-full"
             x-transition:enter-end="translate-y-0"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="translate-y-0"
             x-transition:leave-end="translate-y-full"
             class="absolute inset-x-0 bottom-0 max-h-[85vh] bg-white rounded-t-2xl shadow-2xl flex flex-col overflow-hidden"
             @click.stop>
            
            <div class="flex items-center justify-between p-4 border-b border-[#E6DED6]">
                <h3 class="font-display font-semibold text-lg text-[#1C1412]">Filtros do Catálogo</h3>
                <button type="button" @click="open = false" class="p-1 text-[#6B5F5A]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <form action="{{ request()->url() }}" method="GET" class="p-5 overflow-y-auto space-y-6">
                <!-- Categorias -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-[#B0894D] mb-3">Categorias</h4>
                    <div class="grid grid-cols-1 gap-2">
                        @foreach($categories as $cat)
                            <label class="flex items-center justify-between p-2.5 rounded-lg border border-[#E6DED6] text-sm">
                                <span class="flex items-center gap-2">
                                    <input type="radio" name="categoria" value="{{ $cat['slug'] }}" {{ ($filters['category'] ?? '') === $cat['slug'] ? 'checked' : '' }} class="text-[#7A1F3D]">
                                    <span>{{ $cat['name'] }}</span>
                                </span>
                                <span class="text-xs text-[#6B5F5A]">({{ $cat['product_count'] }})</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Disponibilidade -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-[#B0894D] mb-3">Disponibilidade</h4>
                    <div class="space-y-2">
                        <label class="flex items-center gap-2 text-sm text-[#1C1412]">
                            <input type="radio" name="disponibilidade" value="" {{ empty($filters['availability']) ? 'checked' : '' }} class="text-[#7A1F3D]">
                            <span>Todos</span>
                        </label>
                        <label class="flex items-center gap-2 text-sm text-[#1C1412]">
                            <input type="radio" name="disponibilidade" value="in_stock" {{ ($filters['availability'] ?? '') === 'in_stock' ? 'checked' : '' }} class="text-[#7A1F3D]">
                            <span>Prontos para envio</span>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-4 border-t border-[#E6DED6]">
                    <button type="submit" class="w-full py-3 bg-[#7A1F3D] hover:bg-[#5E1730] text-white font-semibold rounded-lg text-sm transition-colors shadow">
                        Aplicar Filtros
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
