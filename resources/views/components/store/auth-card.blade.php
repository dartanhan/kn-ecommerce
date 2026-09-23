@props(['title' => '', 'subtitle' => ''])

<div class="min-h-[75vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white rounded-xl border border-[#E6DED6] p-8 kn-card-shadow">
        
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 mb-4 group">
                <div class="w-10 h-10 rounded-lg bg-[#7A1F3D] text-white flex items-center justify-center font-display font-semibold text-2xl shadow-sm">
                    KN
                </div>
            </a>
            <h2 class="font-display text-2xl sm:text-3xl font-semibold text-[#1C1412]">
                {{ $title }}
            </h2>
            @if($subtitle)
                <p class="text-xs text-[#6B5F5A] mt-2">
                    {{ $subtitle }}
                </p>
            @endif
        </div>

        {{ $slot }}

    </div>
</div>
