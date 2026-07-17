<?php
use function Livewire\Volt\{state, layout, title};
layout('components.layouts.app');
title('Galería | Sabor del Pacífico');
?>

<div>
    <div class="bg-white py-24 sm:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center mb-16" x-data="{ appear: false }" x-init="setTimeout(() => appear = true, 100)">
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-primary-950 mb-6 transition-all duration-1000 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Nuestra Galería
            </h1>
            <p class="text-lg text-primary-700 max-w-2xl mx-auto transition-all duration-1000 delay-200 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Un recorrido visual por los rincones y sabores que componen nuestra experiencia en la costa pacífica.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
                <!-- Gallery Items -->
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood8/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood9/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood10/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood11/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood12/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood13/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood14/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood15/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood16/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood17/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood18/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="break-inside-avoid rounded-xl overflow-hidden group">
                    <img src="https://picsum.photos/seed/seafood19/800/600" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
            </div>
        </div>
    </div>
</div>
