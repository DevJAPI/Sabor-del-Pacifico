<?php
use function Livewire\Volt\{state, layout, title};
layout('components.layouts.app');
title('Menú & Habitaciones | Sabor del Pacífico');
?>

<div>
    <div class="bg-primary-50 py-24 sm:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center" x-data="{ appear: false }" x-init="setTimeout(() => appear = true, 100)">
            <span class="block text-accent-500 font-medium tracking-widest uppercase text-sm mb-4 transition-all duration-1000 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">Descubre nuestras opciones</span>
            <h1 class="text-4xl md:text-6xl font-serif font-bold text-primary-950 mb-6 transition-all duration-1000 delay-100 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Experiencias
            </h1>
            <p class="text-lg text-primary-700 max-w-3xl mx-auto transition-all duration-1000 delay-200 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Nuestro restaurante de alta cocina está abierto a todo el público. Sin embargo, si deseas prolongar la magia, nuestras exclusivas suites boutique están a tu completa disposición.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 mt-16" x-data="{ tab: 'menu' }">
            <!-- Tabs -->
            <div class="flex justify-center border-b border-primary-200 mb-12">
                <button @click="tab = 'menu'" :class="tab === 'menu' ? 'border-accent-500 text-accent-500' : 'border-transparent text-primary-600 hover:text-primary-900'" class="px-8 py-4 font-serif text-xl border-b-2 font-medium transition-colors">
                    Carta del Restaurante
                </button>
                <button @click="tab = 'habitaciones'" :class="tab === 'habitaciones' ? 'border-accent-500 text-accent-500' : 'border-transparent text-primary-600 hover:text-primary-900'" class="px-8 py-4 font-serif text-xl border-b-2 font-medium transition-colors">
                    Hospedaje Boutique
                </button>
            </div>

            <!-- Menú -->
            <div x-show="tab === 'menu'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12">
                
                <!-- Categoria 1 -->
                <div>
                    <h3 class="text-2xl font-serif text-primary-900 mb-6 border-b border-primary-200 pb-2">Entradas</h3>
                    <div class="space-y-6">
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Empanadas de Piangua</h4>
                                <p class="text-sm text-primary-600">Masa de plátano con guiso tradicional del Pacífico y ají de chontaduro.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$35.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Ceviche de Camarón Titoté</h4>
                                <p class="text-sm text-primary-600">Camarones frescos marinados en limón, leche de coco y suero costeño.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$45.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Patacones con Hogao y Queso</h4>
                                <p class="text-sm text-primary-600">Patacón pisao crujiente, queso costeño fundido y hogao de la casa.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$28.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Croquetas de Pescado</h4>
                                <p class="text-sm text-primary-600">Con alioli de cilantro y hierbas de azotea.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$32.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Crudo de Pesca del Día</h4>
                                <p class="text-sm text-primary-600">Leche de tigre de maracuyá, chalaquita y aceite de cilantro.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$42.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Pulpo al Carbón</h4>
                                <p class="text-sm text-primary-600">Puré de yuca ahumado y polvo de aceituna.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$55.000</div>
                        </div>
                    </div>
                </div>

                <!-- Categoria 2 -->
                <div>
                    <h3 class="text-2xl font-serif text-primary-900 mb-6 border-b border-primary-200 pb-2">Platos Fuertes</h3>
                    <div class="space-y-6">
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Cazuela de Mariscos del Pacífico</h4>
                                <p class="text-sm text-primary-600">Mezcla de mariscos en base cremosa de coco, servida con arroz con coco.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$85.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Arroz Arrechón</h4>
                                <p class="text-sm text-primary-600">Arroz meloso con mariscos, longaniza, poleo, chillangua y leche de coco.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$80.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Pargo Rojo Frito Entelado</h4>
                                <p class="text-sm text-primary-600">Clásico pargo frito entero, acompañado de patacones y ensalada fresca.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$90.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Encocado de Pescado</h4>
                                <p class="text-sm text-primary-600">Pesca del día en salsa espesa de coco y achiote.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$75.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Sancocho de Pescado</h4>
                                <p class="text-sm text-primary-600">Con plátano verde, yuca y ñame, acompañado de aguacate.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$65.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Risotto de Langosta</h4>
                                <p class="text-sm text-primary-600">Toque pacífico con queso costeño rallado y mantequilla clarificada.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$120.000</div>
                        </div>
                    </div>
                </div>

                <!-- Categoria 3 -->
                <div>
                    <h3 class="text-2xl font-serif text-primary-900 mb-6 border-b border-primary-200 pb-2">Postres</h3>
                    <div class="space-y-6">
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Cocadas Gourmet</h4>
                                <p class="text-sm text-primary-600">Trío de cocadas: blanca, con panela y con piña.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$18.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Flan de Coco</h4>
                                <p class="text-sm text-primary-600">Con caramelo suave de caña y polvo de galleta.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$20.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Cheesecake de Chontaduro</h4>
                                <p class="text-sm text-primary-600">Base de galleta crujiente y mermelada de frutos rojos.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$25.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Helado de Naidí</h4>
                                <p class="text-sm text-primary-600">Artesanal, refrescante y con trozos de fruta.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$15.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Volcán de Chocolate Cacao Fino</h4>
                                <p class="text-sm text-primary-600">Cacao del Pacífico relleno, servido con helado de vainilla.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$28.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Casquitos de Guayaba</h4>
                                <p class="text-sm text-primary-600">En almíbar con queso campesino rallado.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$18.000</div>
                        </div>
                    </div>
                </div>

                <!-- Categoria 4 -->
                <div>
                    <h3 class="text-2xl font-serif text-primary-900 mb-6 border-b border-primary-200 pb-2">Bebidas & Coctelería</h3>
                    <div class="space-y-6">
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Viche Sour</h4>
                                <p class="text-sm text-primary-600">Destilado de viche, limón pajarito, sirope y clara de huevo.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$35.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Tomaseca Spritz</h4>
                                <p class="text-sm text-primary-600">Tomaseca tradicional, vino espumoso y soda.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$38.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Arrechón en las Rocas</h4>
                                <p class="text-sm text-primary-600">Bebida ancestral servida sobre hielo grueso.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$32.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Jugo de Naidí (Açaí del Pacífico)</h4>
                                <p class="text-sm text-primary-600">Natural, refrescante y antioxidante.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$12.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Limonada de Coco y Menta</h4>
                                <p class="text-sm text-primary-600">Clásica, frapeada e irresistible.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$14.000</div>
                        </div>
                        <div class="flex justify-between items-baseline">
                            <div class="pr-4">
                                <h4 class="text-lg font-medium text-primary-950">Jarra de Sangría Tropical</h4>
                                <p class="text-sm text-primary-600">Vino blanco con lulo, maracuyá y mango.</p>
                            </div>
                            <div class="text-lg text-primary-900 font-serif">$95.000</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Habitaciones -->
            <div x-show="tab === 'habitaciones'" style="display: none;" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="grid md:grid-cols-2 gap-8">
                <!-- Room 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-primary-100 flex flex-col">
                    <img src="{{ asset('img/mariscos.png') }}" alt="Habitación Estándar" class="w-full h-64 object-cover">
                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-2xl font-serif text-primary-950 mb-2">Habitación Estándar</h3>
                        <p class="text-primary-600 mb-6 text-sm flex-grow">Ideal para parejas o viajeros de negocios. Diseño contemporáneo, cama Queen y baño privado con acabados en madera de la región.</p>
                        <a href="/reservas" class="inline-block text-accent-500 font-semibold hover:text-accent-400 mt-auto">Reservar desde $250.000 / noche &rarr;</a>
                    </div>
                </div>
                <!-- Room 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-primary-100 flex flex-col">
                    <img src="{{ asset('img/salon.png') }}" alt="Suite Vista al Mar" class="w-full h-64 object-cover">
                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-2xl font-serif text-primary-950 mb-2">Suite Vista al Mar</h3>
                        <p class="text-primary-600 mb-6 text-sm flex-grow">Despierta con el sonido de las olas. Balcón privado, cama King y minibar con selección de bebidas del Pacífico.</p>
                        <a href="/reservas" class="inline-block text-accent-500 font-semibold hover:text-accent-400 mt-auto">Reservar desde $450.000 / noche &rarr;</a>
                    </div>
                </div>
                <!-- Room 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-primary-100 flex flex-col">
                    <img src="{{ asset('img/suite.png') }}" alt="Master Suite" class="w-full h-64 object-cover">
                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-2xl font-serif text-primary-950 mb-2">Master Suite Presidencial</h3>
                        <p class="text-primary-600 mb-6 text-sm flex-grow">Amplitud máxima con sala de estar separada. Incluye jacuzzi privado en terraza y servicio a la habitación incluido.</p>
                        <a href="/reservas" class="inline-block text-accent-500 font-semibold hover:text-accent-400 mt-auto">Reservar desde $800.000 / noche &rarr;</a>
                    </div>
                </div>
                <!-- Room 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-primary-100 flex flex-col">
                    <img src="{{ asset('img/bar.png') }}" alt="Villa Privada" class="w-full h-64 object-cover">
                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-2xl font-serif text-primary-950 mb-2">Villa Privada Frente a la Playa</h3>
                        <p class="text-primary-600 mb-6 text-sm flex-grow">Un refugio exclusivo para grupos o familias. Dos pisos, piscina privada, mayordomo y acceso directo a la arena.</p>
                        <a href="/reservas" class="inline-block text-accent-500 font-semibold hover:text-accent-400 mt-auto">Reservar desde $1.500.000 / noche &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
