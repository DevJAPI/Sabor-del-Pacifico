<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Sabor del Pacífico' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('img/hotelLogo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-primary-50 text-primary-950 antialiased font-sans flex flex-col min-h-screen">
    
    <!-- Navbar -->
    <header class="fixed w-full top-0 z-50 bg-white/90 backdrop-blur-md border-b border-primary-200/50 transition-all duration-300">
        <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">
                <a class="flex-none text-2xl font-serif font-semibold text-primary-900 tracking-tight" href="/">Sabor del Pacífico</a>
                <div class="sm:hidden">
                    <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-primary-200 bg-white text-primary-800 shadow-sm hover:bg-primary-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                        <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                </div>
            </div>
            <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">
                    <a class="font-medium text-primary-600 hover:text-accent-500 sm:py-6" href="/">Inicio</a>
                    <a class="font-medium text-primary-600 hover:text-accent-500 sm:py-6" href="/nosotros">Nuestra Esencia</a>
                    <a class="font-medium text-primary-600 hover:text-accent-500 sm:py-6" href="/menu">Menú & Habitaciones</a>
                    <a class="font-medium text-primary-600 hover:text-accent-500 sm:py-6" href="/galeria">Galería</a>
                    <a class="flex items-center gap-x-2 font-medium text-white bg-primary-900 hover:bg-primary-800 transition-colors px-5 py-2.5 rounded-full" href="/reservas">
                        Reservar
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-grow pt-[72px] sm:pt-[88px]">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-primary-950 text-white mt-auto py-16">
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left">
                <!-- Brand -->
                <div>
                    <a class="flex-none text-2xl font-serif font-bold text-white mb-6 inline-block" href="/">Sabor del Pacífico</a>
                    <p class="text-primary-300 font-light text-sm max-w-xs mx-auto md:mx-0">
                        Donde la alta cocina se encuentra con el confort absoluto. Una experiencia inolvidable frente al mar.
                    </p>
                </div>
                <!-- Links -->
                <div>
                    <h4 class="text-lg font-serif mb-6 text-accent-500">Enlaces</h4>
                    <ul class="space-y-3">
                        <li><a href="/nosotros" class="text-primary-300 hover:text-white transition-colors">Nuestra Esencia</a></li>
                        <li><a href="/menu" class="text-primary-300 hover:text-white transition-colors">Menú & Habitaciones</a></li>
                        <li><a href="/galeria" class="text-primary-300 hover:text-white transition-colors">Galería</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-serif mb-6 text-accent-500">Contacto</h4>
                    <ul class="space-y-3 text-primary-300">
                        <li>Malecón Bahía Málaga, Buenaventura</li>
                        <li>reservas@sabordelpacifico.com</li>
                        <li>+57 320 123 4567</li>
                    </ul>
                </div>
            </div>
            <div class="mt-16 border-t border-primary-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-primary-400">
                <p>© 2026 Sabor del Pacífico. Todos los derechos reservados.</p>
                <div class="flex gap-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-accent-500 transition-colors">Instagram</a>
                    <a href="#" class="hover:text-accent-500 transition-colors">Facebook</a>
                    <a href="#" class="hover:text-accent-500 transition-colors">WhatsApp</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
