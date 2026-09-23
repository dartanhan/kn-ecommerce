@props(['items' => []])

<nav class="flex items-center space-x-2 text-xs text-[#6B5F5A] py-3 overflow-x-auto no-scrollbar" aria-label="Breadcrumb">
    <a href="{{ route('home') }}" class="hover:text-[#7A1F3D] transition-colors whitespace-nowrap">
        Início
    </a>
    
    @foreach($items as $label => $url)
        <span class="text-[#E6DED6] select-none">/</span>
        @if($url && !$loop->last)
            <a href="{{ $url }}" class="hover:text-[#7A1F3D] transition-colors whitespace-nowrap">
                {{ $label }}
            </a>
        @else
            <span class="text-[#1C1412] font-semibold whitespace-nowrap truncate max-w-[200px] sm:max-w-none" aria-current="page">
                {{ $label }}
            </span>
        @endif
    @endforeach
</nav>
