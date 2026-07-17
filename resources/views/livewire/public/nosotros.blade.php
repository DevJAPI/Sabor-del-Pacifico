<?php
use function Livewire\Volt\{state, layout, title};
layout('components.layouts.app');
title('Nuestra Esencia | Sabor del Pacífico');
?>

<div>
    <!-- Hero for Nosotros -->
    <div class="relative bg-primary-950 pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?q=80&w=1920&auto=format&fit=crop" class="w-full h-full object-cover opacity-30" alt="Restaurant ambiance">
        </div>
        <div class="relative z-10 max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center" x-data="{ appear: false }" x-init="setTimeout(() => appear = true, 100)">
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-white mb-6 transition-all duration-1000 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Nuestra Esencia
            </h1>
            <p class="text-lg md:text-xl text-primary-200 max-w-2xl mx-auto font-light transition-all duration-1000 delay-200 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Más de una década perfeccionando el arte de la hospitalidad y la alta cocina junto al mar.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="max-w-[85rem] px-4 py-16 sm:px-6 lg:px-8 lg:py-24 mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div x-data="{ appear: false }" x-intersect.once="appear = true" class="transition-all duration-1000 transform" :class="appear ? 'translate-x-0 opacity-100' : '-translate-x-10 opacity-0'">
                <span class="text-accent-500 font-semibold uppercase tracking-wider text-sm">Historia</span>
                <h2 class="mt-3 text-3xl md:text-4xl font-serif text-primary-950 mb-6">
                    Nacidos del océano, perfeccionados por la pasión
                </h2>
                <p class="text-primary-700 text-lg leading-relaxed mb-6">
                    Fundado en 2012, Sabor del Pacífico comenzó como un pequeño refugio para conocedores de la buena mesa. Nuestra obsesión por los ingredientes locales y la pesca sostenible nos impulsó a crear un menú que celebra la biodiversidad de nuestras costas.
                </p>
                <p class="text-primary-600 mb-8">
                    Con el tiempo, quisimos que la experiencia no terminara con la cena. Así nació nuestro Hotel Boutique, con 12 suites exclusivas diseñadas para ofrecer un descanso absoluto, donde el sonido de las olas es la única banda sonora.
                </p>
            </div>
            
            <div class="relative" x-data="{ appear: false }" x-intersect.once="appear = true">
                <img class="rounded-xl w-full h-[500px] object-cover shadow-2xl transition-all duration-1000 transform" :class="appear ? 'scale-100 opacity-100' : 'scale-95 opacity-0'" src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?q=80&w=1000&auto=format&fit=crop" alt="Chef cocinando">
            </div>
        </div>
    </div>
</div>
