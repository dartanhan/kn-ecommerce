@props(['currentSort' => 'relevance', 'action' => ''])

<div class="flex items-center gap-2 text-xs sm:text-sm">
    <label for="sort-select" class="text-[#6B5F5A] font-medium whitespace-nowrap">Ordenar por:</label>
    <select id="sort-select" 
            name="ordenar" 
            onchange="this.form ? this.form.submit() : (window.location.search = updateQueryString('ordenar', this.value))"
            class="bg-white border border-[#E6DED6] rounded-md px-3 py-1.5 text-xs sm:text-sm text-[#1C1412] font-medium focus:outline-none focus:ring-2 focus:ring-[#7A1F3D] cursor-pointer">
        <option value="relevance" {{ $currentSort === 'relevance' ? 'selected' : '' }}>Relevância</option>
        <option value="price_asc" {{ $currentSort === 'price_asc' ? 'selected' : '' }}>Menor Preço</option>
        <option value="price_desc" {{ $currentSort === 'price_desc' ? 'selected' : '' }}>Maior Preço</option>
        <option value="newest" {{ $currentSort === 'newest' ? 'selected' : '' }}>Mais Recentes</option>
    </select>
</div>

<script>
function updateQueryString(key, value) {
    const url = new URL(window.location.href);
    url.searchParams.set(key, value);
    window.location.href = url.toString();
}
</script>
