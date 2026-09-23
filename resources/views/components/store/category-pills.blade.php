@props(['categories' => [], 'activeSlug' => null])

<div class="flex items-center gap-2 overflow-x-auto py-2 no-scrollbar" role="tablist">
    <a href="{{ route('catalog.index') }}" 
       class="inline-flex items-center px-4 py-2 rounded-full text-xs font-semibold whitespace-nowrap transition-all {{ empty($activeSlug) ? 'bg-[#7A1F3D] text-white shadow-sm' : 'bg-white text-[#6B5F5A] border border-[#E6DED6] hover:border-[#7A1F3D] hover:text-[#1C1412]' }}">
        Todos
    </a>
    @foreach($categories as $cat)
        <a href="{{ route('category.show', $cat['slug']) }}" 
           class="inline-flex items-center px-4 py-2 rounded-full text-xs font-semibold whitespace-nowrap transition-all {{ $activeSlug === $cat['slug'] ? 'bg-[#7A1F3D] text-white shadow-sm' : 'bg-white text-[#6B5F5A] border border-[#E6DED6] hover:border-[#7A1F3D] hover:text-[#1C1412]' }}">
            {{ $cat['name'] }}
        </a>
    @endforeach
</div>
