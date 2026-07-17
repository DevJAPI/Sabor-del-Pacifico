<x-layouts.app title="Inicio | Sabor del Pacífico">
    <!-- Hero Section -->
    <div class="relative bg-primary-900 h-[85vh] min-h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://picsum.photos/seed/hotel0/800/600" class="w-full h-full object-cover opacity-60 scale-105 transform motion-safe:animate-pulse" style="animation-duration: 20s;" alt="Hotel Restaurant Ambient">
            <div class="absolute inset-0 bg-gradient-to-b from-primary-950/40 via-primary-950/20 to-primary-950/80"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)">
            <span class="block text-accent-400 font-medium tracking-[0.2em] uppercase text-sm mb-4 transition-all duration-1000 transform" :class="show ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Boutique Hotel & Restaurant
            </span>
            <h1 class="text-5xl md:text-7xl font-serif font-bold text-white mb-6 drop-shadow-lg transition-all duration-1000 delay-100 transform" :class="show ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Un Refugio Culinario frente al Mar
            </h1>
            <p class="text-lg md:text-xl text-primary-100 mb-10 max-w-2xl mx-auto font-light transition-all duration-1000 delay-200 transform" :class="show ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Descubre la magia del Pacífico en cada bocado y el confort absoluto en nuestras exclusivas suites.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4 transition-all duration-1000 delay-300 transform" :class="show ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                <a href="/menu" class="inline-flex justify-center items-center gap-x-3 text-center bg-transparent border border-white text-white hover:bg-white hover:text-primary-950 text-sm font-medium rounded-full focus:outline-none transition-colors py-3 px-8">
                    Ver Menú
                </a>
                <a href="/reservas" class="inline-flex justify-center items-center gap-x-3 text-center bg-accent-500 hover:bg-accent-400 border border-transparent text-white text-sm font-medium rounded-full focus:outline-none focus:ring-2 focus:ring-accent-500 focus:ring-offset-2 transition-colors py-3 px-8">
                    Reservar Mesa o Suite
                </a>
            </div>
        </div>
    </div>

    <!-- Nuestra Esencia -->
    <div class="max-w-[85rem] px-4 py-16 sm:px-6 lg:px-8 lg:py-24 mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative" x-data="{ appear: false }" x-intersect.once="appear = true">
                <img class="rounded-xl w-full h-[600px] object-cover shadow-2xl transition-all duration-1000 transform" :class="appear ? 'translate-x-0 opacity-100' : '-translate-x-10 opacity-0'" src="https://picsum.photos/seed/seafood0/800/600" alt="Chef plating food">
                <div class="absolute -bottom-8 -right-8 bg-white p-6 rounded-xl shadow-xl hidden md:block max-w-xs transition-all duration-1000 delay-300 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                    <p class="font-serif text-xl italic text-primary-900">"Nuestra cocina es un poema dedicado al océano."</p>
                </div>
            </div>

            <div class="lg:pl-10" x-data="{ appear: false }" x-intersect.once="appear = true">
                <span class="text-accent-500 font-semibold uppercase tracking-wider text-sm transition-all duration-700 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">Nuestra Esencia</span>
                <h2 class="mt-3 text-4xl font-serif text-primary-950 mb-6 transition-all duration-700 delay-100 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">
                    Gastronomía que eleva los sentidos
                </h2>
                <p class="text-primary-700 text-lg leading-relaxed mb-6 transition-all duration-700 delay-200 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">
                    Sabor del Pacífico no es solo un restaurante, es una experiencia inmersiva. Nuestros chefs fusionan ingredientes locales frescos de Buenaventura con técnicas de alta cocina para crear platillos que rinden homenaje a la biodiversidad del Valle del Cauca.
                </p>
                <p class="text-primary-600 mb-8 transition-all duration-700 delay-300 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">
                    Complementado con nuestras suites boutique de lujo, ofrecemos un escape perfecto para quienes buscan confort sin comprometer el deleite culinario. Ven y descubre por qué somos el tesoro mejor guardado de la costa pacífica.
                </p>
                <a href="/nosotros" class="inline-flex items-center gap-x-2 text-primary-900 font-semibold hover:text-accent-500 transition-colors duration-700 delay-400 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">
                    Conoce más sobre nosotros
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Nuestra Promesa -->
    <div class="bg-primary-50 py-16" x-data="{ appear: false }" x-intersect.once="appear = true">
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto text-center">
            <h2 class="text-3xl font-serif text-primary-950 mb-4 transition-all duration-700 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">Nuestra Promesa Sostenible</h2>
            <p class="max-w-3xl mx-auto text-primary-700 mb-12 transition-all duration-700 delay-100 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">
                Trabajamos de la mano con los pescadores artesanales de la región. Cada ingrediente en tu plato fue obtenido mediante pesca responsable, garantizando no solo frescura inigualable, sino también el cuidado de nuestros océanos y el desarrollo de la comunidad local en Buenaventura.
            </p>
        </div>
    </div>

    <!-- Nuestros Espacios -->
    <div class="max-w-[85rem] px-4 py-16 sm:px-6 lg:px-8 mx-auto" x-data="{ appear: false }" x-intersect.once="appear = true">
        <h2 class="text-3xl md:text-4xl font-serif text-primary-950 mb-12 text-center transition-all duration-700 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">Los Espacios</h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Salón -->
            <div class="text-center group transition-all duration-700 delay-100 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                <div class="overflow-hidden rounded-full aspect-square max-w-[250px] mx-auto mb-6 shadow-lg">
                    <img src="https://picsum.photos/seed/hotel1/800/600" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500" alt="Salón Principal">
                </div>
                <h3 class="font-serif text-xl text-primary-950 mb-2">El Salón Principal</h3>
                <p class="text-primary-600 text-sm">Climatizado y con diseño contemporáneo inspirado en las raíces afrocolombianas.</p>
            </div>
            <!-- Terraza -->
            <div class="text-center group transition-all duration-700 delay-200 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                <div class="overflow-hidden rounded-full aspect-square max-w-[250px] mx-auto mb-6 shadow-lg">
                    <img src="https://picsum.photos/seed/hotel2/800/600" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500" alt="Terraza">
                </div>
                <h3 class="font-serif text-xl text-primary-950 mb-2">Terraza al Mar</h3>
                <p class="text-primary-600 text-sm">Disfruta de la brisa marina y atardeceres inolvidables mientras cenas.</p>
            </div>
            <!-- Bar -->
            <div class="text-center group transition-all duration-700 delay-300 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                <div class="overflow-hidden rounded-full aspect-square max-w-[250px] mx-auto mb-6 shadow-lg">
                    <img src="https://picsum.photos/seed/seafood1/800/600" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500" alt="Bar">
                </div>
                <h3 class="font-serif text-xl text-primary-950 mb-2">Bar de Autor</h3>
                <p class="text-primary-600 text-sm">Coctelería exótica resaltando destilados autóctonos como el viche.</p>
            </div>
        </div>
    </div>

    <!-- Carrusel de Experiencias -->
    <div class="bg-primary-950 py-20">
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto text-center mb-12" x-data="{ appear: false }" x-intersect.once="appear = true">
            <h2 class="text-3xl md:text-4xl font-serif text-white mb-4 transition-all duration-700 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">Experiencias Destacadas</h2>
            <p class="text-primary-300 max-w-2xl mx-auto transition-all duration-700 delay-100 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">Selecciones curadas para deleitar su estancia.</p>
        </div>

        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto" x-data="{ appear: false }" x-intersect.once="appear = true">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="group relative block rounded-xl overflow-hidden bg-white transition-all duration-700 delay-100 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                    <div class="flex-shrink-0 relative rounded-t-xl overflow-hidden w-full h-64 before:absolute before:inset-x-0 before:size-full before:bg-gradient-to-t before:from-primary-950/80 before:z-[1]">
                        <img class="size-full absolute top-0 start-0 object-cover transform group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/seed/seafood2/800/600" alt="Crudo de Pescado">
                    </div>
                    <div class="absolute top-0 inset-x-0 z-10">
                        <div class="p-4 flex flex-col h-full sm:p-6">
                            <div class="flex items-center">
                                <span class="bg-white/20 text-white backdrop-blur-md rounded-full px-3 py-1 text-xs font-semibold uppercase tracking-wider">Restaurante</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 relative z-10">
                        <h3 class="text-xl font-serif text-primary-950 group-hover:text-accent-500 transition-colors mb-2">Crudo de Pesca del Día</h3>
                        <p class="text-primary-600 text-sm">Leche de tigre de maracuyá, chalaquita y aceite de cilantro.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group relative block rounded-xl overflow-hidden bg-white transition-all duration-700 delay-200 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                    <div class="flex-shrink-0 relative rounded-t-xl overflow-hidden w-full h-64 before:absolute before:inset-x-0 before:size-full before:bg-gradient-to-t before:from-primary-950/80 before:z-[1]">
                        <img class="size-full absolute top-0 start-0 object-cover transform group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/seed/hotel3/800/600" alt="Suite Ocean View">
                    </div>
                    <div class="absolute top-0 inset-x-0 z-10">
                        <div class="p-4 flex flex-col h-full sm:p-6">
                            <div class="flex items-center">
                                <span class="bg-white/20 text-white backdrop-blur-md rounded-full px-3 py-1 text-xs font-semibold uppercase tracking-wider">Habitaciones</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 relative z-10">
                        <h3 class="text-xl font-serif text-primary-950 group-hover:text-accent-500 transition-colors mb-2">Suite Vista al Mar</h3>
                        <p class="text-primary-600 text-sm">Comodidad absoluta con terraza privada y cama King.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group relative block rounded-xl overflow-hidden bg-white transition-all duration-700 delay-300 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                    <div class="flex-shrink-0 relative rounded-t-xl overflow-hidden w-full h-64 before:absolute before:inset-x-0 before:size-full before:bg-gradient-to-t before:from-primary-950/80 before:z-[1]">
                        <img class="size-full absolute top-0 start-0 object-cover transform group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/seed/seafood3/800/600" alt="Interior">
                    </div>
                    <div class="absolute top-0 inset-x-0 z-10">
                        <div class="p-4 flex flex-col h-full sm:p-6">
                            <div class="flex items-center">
                                <span class="bg-white/20 text-white backdrop-blur-md rounded-full px-3 py-1 text-xs font-semibold uppercase tracking-wider">Experiencia</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 relative z-10">
                        <h3 class="text-xl font-serif text-primary-950 group-hover:text-accent-500 transition-colors mb-2">Cenas Maridaje</h3>
                        <p class="text-primary-600 text-sm">7 tiempos guiados por nuestro sommelier y chef ejecutivo.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center transition-all duration-700 delay-400 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                <a class="inline-flex justify-center items-center gap-x-2 text-center bg-transparent border border-primary-400 text-primary-200 hover:text-white hover:border-white text-sm font-medium rounded-full px-6 py-2 transition-all" href="/menu">
                    Explorar todas
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Testimonial / Quote Section -->
    <div class="bg-primary-50 py-24 sm:py-32" x-data="{ appear: false }" x-intersect.once="appear = true">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center transition-all duration-1000 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
            <svg class="mx-auto h-12 w-12 text-accent-500 mb-8 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
            </svg>
            <p class="text-2xl sm:text-3xl lg:text-4xl font-serif text-primary-950 leading-relaxed mb-8">
                "No buscamos alimentar estómagos, buscamos crear recuerdos que perduren en el alma junto al mar. Esa es nuestra promesa en cada plato que servimos en Buenaventura."
            </p>
            <div class="flex items-center justify-center gap-4">
                <img class="w-16 h-16 rounded-full object-cover border-2 border-accent-500 shadow-lg" src="https://picsum.photos/seed/seafood4/800/600" alt="Chef">
                <div class="text-left">
                    <h4 class="text-lg font-bold text-primary-900">Alejandro Marín</h4>
                    <span class="text-sm text-primary-600">Chef Ejecutivo & Fundador</span>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
