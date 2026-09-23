@props(['steps' => []])

<div class="py-6">
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 relative">
        @foreach($steps as $step)
            <div class="flex sm:flex-col items-center gap-3 sm:text-center relative">
                <!-- Dot / Icon -->
                <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-xs flex-shrink-0 z-10 transition-colors {{ $step['completed'] ? 'bg-[#2F6B4F] text-white shadow' : 'bg-[#E6DED6] text-[#6B5F5A]' }}">
                    @if($step['completed'])
                        ✓
                    @else
                        {{ $loop->iteration }}
                    @endif
                </div>

                <!-- Text -->
                <div>
                    <div class="text-xs sm:text-sm font-semibold {{ $step['completed'] ? 'text-[#1C1412]' : 'text-[#6B5F5A]' }}">
                        {{ $step['label'] }}
                    </div>
                    <div class="text-[11px] text-[#6B5F5A] mt-0.5">
                        {{ $step['date'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
