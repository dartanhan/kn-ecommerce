@props(['value' => 1, 'min' => 1, 'max' => 99])

<div x-data="{ qty: {{ $value }}, min: {{ $min }}, max: {{ $max }} }" 
     class="inline-flex items-center border border-[#E6DED6] bg-white rounded-lg p-1 shadow-sm">
    <button type="button" 
            @click="if(qty > min) qty--"
            :disabled="qty <= min"
            class="w-8 h-8 rounded flex items-center justify-center text-sm font-bold text-[#6B5F5A] hover:bg-[#F7F3EE] hover:text-[#1C1412] disabled:opacity-30 disabled:cursor-not-allowed transition-colors"
            aria-label="Diminuir quantidade">
        &minus;
    </button>
    <input type="text" 
           name="quantidade" 
           readonly 
           :value="qty" 
           class="w-10 text-center font-bold text-sm text-[#1C1412] bg-transparent border-none focus:outline-none select-none">
    <button type="button" 
            @click="if(qty < max) qty++"
            :disabled="qty >= max"
            class="w-8 h-8 rounded flex items-center justify-center text-sm font-bold text-[#6B5F5A] hover:bg-[#F7F3EE] hover:text-[#1C1412] disabled:opacity-30 disabled:cursor-not-allowed transition-colors"
            aria-label="Aumentar quantidade">
        +
    </button>
</div>
