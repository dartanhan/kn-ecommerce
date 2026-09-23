<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'KN Cosméticos — E-commerce Profissional de Esmaltaria & Beleza' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Loja oficial da KN Cosméticos. Géis construtores, esmaltes em gel, cabines UV/LED, pinças e produtos de alta performance para profissionais de beleza.' }}">

    <!-- Google Fonts: Cormorant Garamond (Display) & Manrope (UI) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-[#F7F3EE] text-[#1C1412] antialiased min-h-screen flex flex-col font-sans selection:bg-[#7A1F3D] selection:text-white"
      x-data="{ mobileMenuOpen: false, searchOpen: false }">

    <!-- Top Announcement Bar -->
    <div class="bg-[#1C1412] text-[#F7F3EE] text-xs py-2 px-4 text-center tracking-wide font-medium flex items-center justify-center gap-2">
        <span class="inline-block w-1.5 h-1.5 rounded-full bg-[#B0894D]"></span>
        <span>KN Cosméticos &bull; Produtos profissionais para Esmalterias e Lash Designers</span>
        <span class="hidden md:inline text-[#6B5F5A]">&bull;</span>
        <span class="hidden md:inline text-[#B0894D] font-semibold">Envio Seguro para todo o Brasil</span>
    </div>

    <!-- Main Header -->
    <x-store.header />

    <!-- Search Modal Overlay -->
    <x-store.search-overlay />

    <!-- Main Page Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-store.footer />

    @livewireScripts
</body>
</html>
