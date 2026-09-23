@props(['stock' => 0])

@if($stock <= 0)
    <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-semibold bg-[#F5E8E8] text-[#A33B3B] border border-[#ECD1D1]">
        Esgotado
    </span>
@elseif($stock <= 5)
    <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-semibold bg-[#F7F0E6] text-[#B0894D] border border-[#EFE0C9]">
        Últimas {{ $stock }} unidades
    </span>
@else
    <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded text-[11px] font-semibold bg-[#EAF2ED] text-[#2F6B4F] border border-[#CFE3D5]">
        <span class="w-1.5 h-1.5 rounded-full bg-[#2F6B4F]"></span>
        Pronto para envio
    </span>
@endif
