@props(['currentPage' => 1, 'totalPages' => 3])

<nav class="flex items-center justify-center space-x-2 py-8" aria-label="Paginação do Catálogo">
    <button type="button" 
            class="px-3.5 py-2 rounded-md border border-[#E6DED6] bg-white text-xs font-semibold text-[#6B5F5A] hover:bg-[#F7F3EE] hover:text-[#1C1412] disabled:opacity-40 disabled:cursor-not-allowed transition-colors"
            {{ $currentPage <= 1 ? 'disabled' : '' }}>
        &larr; Anterior
    </button>

    @for($i = 1; $i <= $totalPages; $i++)
        <button type="button" 
                class="w-9 h-9 rounded-md text-xs font-bold transition-all {{ $i === $currentPage ? 'bg-[#7A1F3D] text-white shadow-sm' : 'bg-white border border-[#E6DED6] text-[#6B5F5A] hover:bg-[#F7F3EE] hover:text-[#1C1412]' }}">
            {{ $i }}
        </button>
    @endfor

    <button type="button" 
            class="px-3.5 py-2 rounded-md border border-[#E6DED6] bg-white text-xs font-semibold text-[#6B5F5A] hover:bg-[#F7F3EE] hover:text-[#1C1412] disabled:opacity-40 disabled:cursor-not-allowed transition-colors"
            {{ $currentPage >= $totalPages ? 'disabled' : '' }}>
        Próxima &rarr;
    </button>
</nav>
