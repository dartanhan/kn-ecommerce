@props(['images' => [], 'productName' => ''])

@php
    $mainImage = $images[0] ?? '/images/products/builder-gel.jpg';
@endphp

<div x-data="{ currentImage: '{{ $mainImage }}' }" class="flex flex-col gap-4">
    <!-- Main Big Image -->
    <div class="relative aspect-square w-full bg-[#EFE8E1] rounded-xl overflow-hidden border border-[#E6DED6] shadow-sm">
        <img :src="currentImage" 
             alt="{{ $productName }}" 
             class="w-full h-full object-cover object-center transition-all duration-300">
    </div>

    <!-- Thumbnail Strip -->
    @if(count($images) > 1)
        <div class="flex items-center gap-3 overflow-x-auto pb-1 no-scrollbar">
            @foreach($images as $img)
                <button type="button" 
                        @click="currentImage = '{{ $img }}'"
                        class="relative w-20 h-20 rounded-md overflow-hidden bg-[#EFE8E1] border-2 transition-all flex-shrink-0"
                        :class="currentImage === '{{ $img }}' ? 'border-[#7A1F3D] ring-2 ring-[#7A1F3D]/20 shadow' : 'border-[#E6DED6] opacity-75 hover:opacity-100'">
                    <img src="{{ $img }}" alt="Miniatura {{ $loop->iteration }}" class="w-full h-full object-cover object-center">
                </button>
            @endforeach
        </div>
    @endif
</div>
