<?php
use function Livewire\Volt\{state, layout, title};
layout('components.layouts.app');
title('Galería | Sabor del Pacífico');
?>

<div>
    <div class="bg-primary-50 py-24 sm:py-32 min-h-screen">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center mb-16" x-data="{ appear: false }" x-init="setTimeout(() => appear = true, 100)">
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-primary-950 mb-6 transition-all duration-1000 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Nuestra Galería
            </h1>
            <p class="text-lg text-primary-700 max-w-2xl mx-auto transition-all duration-1000 delay-200 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Un recorrido visual por los rincones y sabores que componen nuestra experiencia en la costa pacífica.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ appear: false }" x-intersect.once="appear = true">
            <!-- Masonry Layout -->
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
                
                @foreach(range(1, 10) as $i)
                <div class="masonry-item rounded-xl overflow-hidden group shadow-lg hover:shadow-2xl transition-all duration-700 transform"
                     :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-16 opacity-0'"
                     style="transition-delay: {{ $i * 100 }}ms;">
                     
                    <!-- Contenedor con animación de flotabilidad -->
                    <div class="{{ $i % 2 == 0 ? 'animate-float' : 'animate-float-delayed' }}">
                        <img src="{{ asset('img/galeria/galeria_' . $i . '.jpg') }}" 
                             alt="Sabor del Pacífico Galería {{ $i }}"
                             class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700 rounded-xl"
                             loading="lazy">
                    </div>
                    
                </div>
                @endforeach
                
            </div>
        </div>
        
        <!-- CTA -->
        <div class="mt-20 text-center pb-12" x-data="{ appear: false }" x-intersect.once="appear = true">
            <h3 class="text-2xl font-serif text-primary-900 mb-6 transition-all duration-700 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">¿Listo para vivir la experiencia?</h3>
            <a href="/reservas" class="inline-flex items-center gap-x-2 font-medium text-primary-950 bg-accent-500 hover:bg-accent-400 transition-all duration-700 delay-200 transform px-8 py-4 rounded-full shadow-lg hover:shadow-xl" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Haz tu reserva ahora
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </a>
        </div>
    </div>
</div>
