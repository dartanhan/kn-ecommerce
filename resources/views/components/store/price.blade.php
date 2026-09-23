@props(['value' => 0, 'size' => 'base', 'class' => ''])

@php
    $formatted = number_format((float)$value, 2, ',', '.');
    $sizeClasses = match($size) {
        'sm' => 'text-sm font-semibold',
        'lg' => 'text-xl sm:text-2xl font-bold tracking-tight',
        'xl' => 'text-2xl sm:text-3xl font-extrabold tracking-tight',
        default => 'text-base font-semibold',
    };
@endphp

<span class="inline-flex items-baseline text-[#1C1412] {{ $sizeClasses }} {{ $class }}" aria-label="R$ {{ $formatted }}">
    <span class="text-xs font-medium mr-1 text-[#6B5F5A]">R$</span>
    <span>{{ $formatted }}</span>
</span>
