<?php
use function Livewire\Volt\{state, layout, title};

layout('components.layouts.app');
title('Reservas | Sabor del Pacífico');

state([
    'tipo' => 'restaurante', 
    'fecha' => '', 
    'hora' => '', 
    'personas' => 2, 
    'nombre' => '', 
    'email' => '', 
    'telefono' => '',
    // Campos Restaurante
    'ocasion' => '',
    'alergias' => '',
    'ubicacion' => '',
    // Campos Hotel
    'habitacion' => '',
    'transporte' => false,
    'llegada' => '',
    'success' => false
]);

$submit = function () {
    // Aquí iría la lógica para guardar en BD
    $this->success = true;
};
?>

<div>
    <div class="bg-primary-50 py-24 sm:py-32 relative overflow-hidden min-h-[90vh]">
        <!-- Decoration -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
        <div class="absolute top-48 -right-24 w-96 h-96 bg-accent-400 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>

        <div class="max-w-4xl mx-auto px-6 lg:px-8 relative z-10" x-data="{ appear: false }" x-init="setTimeout(() => appear = true, 100)">
            <div class="text-center mb-12 transition-all duration-700 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-primary-950 mb-4">
                    Realizar una Reserva
                </h1>
                <p class="text-primary-700">Garantice su espacio en nuestro oasis del Pacífico.</p>
            </div>

            @if($success)
                <div class="bg-white p-10 rounded-2xl shadow-xl border border-primary-100 text-center animate-pulse">
                    <svg class="mx-auto h-16 w-16 text-green-500 mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h2 class="text-2xl font-serif text-primary-900 mb-2">¡Solicitud Confirmada!</h2>
                    <p class="text-primary-600">Hemos recibido tu petición. Nos comunicaremos contigo al {{ $email }} para finalizar el proceso.</p>
                    <button wire:click="$set('success', false)" class="mt-8 text-accent-500 underline">Hacer otra reserva</button>
                </div>
            @else
                <form wire:submit="submit" class="bg-white p-8 md:p-12 rounded-2xl shadow-xl border border-primary-100 transition-all duration-700 delay-200 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                    
                    <!-- Tipo de reserva -->
                    <div class="mb-8 flex flex-col sm:flex-row gap-4 sm:space-x-4 border-b border-primary-100 pb-4">
                        <label class="flex items-center cursor-pointer p-4 border rounded-lg hover:bg-gray-50 flex-1" :class="$wire.tipo === 'restaurante' ? 'border-accent-500 bg-accent-50/20' : 'border-gray-200'">
                            <input type="radio" wire:model.live="tipo" value="restaurante" class="text-accent-500 focus:ring-accent-500 h-5 w-5">
                            <span class="ml-3 text-primary-900 font-medium">Mesa en Restaurante</span>
                        </label>
                        <label class="flex items-center cursor-pointer p-4 border rounded-lg hover:bg-gray-50 flex-1" :class="$wire.tipo === 'habitacion' ? 'border-accent-500 bg-accent-50/20' : 'border-gray-200'">
                            <input type="radio" wire:model.live="tipo" value="habitacion" class="text-accent-500 focus:ring-accent-500 h-5 w-5">
                            <span class="ml-3 text-primary-900 font-medium">Hospedaje en Suite</span>
                        </label>
                    </div>

                    <!-- Datos Generales -->
                    <h3 class="font-serif text-xl text-primary-900 mb-4">Información Personal</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <label class="block text-sm font-medium text-primary-700 mb-2">Nombre completo</label>
                            <input type="text" wire:model="nombre" required class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-primary-700 mb-2">Correo electrónico</label>
                            <input type="email" wire:model="email" required class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-primary-700 mb-2">Teléfono / WhatsApp</label>
                            <input type="tel" wire:model="telefono" required class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-primary-700 mb-2">
                                @if($tipo === 'restaurante') Número de comensales @else Huéspedes @endif
                            </label>
                            <input type="number" wire:model="personas" min="1" max="20" required class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all">
                        </div>
                    </div>

                    <!-- Datos Específicos Restaurante -->
                    @if($tipo === 'restaurante')
                    <div class="animate-fade-in">
                        <h3 class="font-serif text-xl text-primary-900 mb-4 pt-4 border-t border-primary-100">Detalles de la Cena</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div>
                                <label class="block text-sm font-medium text-primary-700 mb-2">Fecha</label>
                                <input type="date" wire:model="fecha" required class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-primary-700 mb-2">Hora</label>
                                <select wire:model="hora" required class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all bg-white">
                                    <option value="">Seleccione hora</option>
                                    <option value="12:00">12:00 PM (Almuerzo)</option>
                                    <option value="13:00">13:00 PM (Almuerzo)</option>
                                    <option value="19:00">19:00 PM (Cena)</option>
                                    <option value="20:00">20:00 PM (Cena)</option>
                                    <option value="21:00">21:00 PM (Cena)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-primary-700 mb-2">Ocasión Especial</label>
                                <select wire:model="ocasion" class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all bg-white">
                                    <option value="ninguna">Ninguna / Habitual</option>
                                    <option value="cumpleanos">Cumpleaños</option>
                                    <option value="aniversario">Aniversario</option>
                                    <option value="negocios">Cena de Negocios</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-primary-700 mb-2">Ubicación Preferida</label>
                                <select wire:model="ubicacion" class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all bg-white">
                                    <option value="">Cualquiera</option>
                                    <option value="terraza">Terraza al Mar</option>
                                    <option value="salon">Salón Principal (Interior)</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-primary-700 mb-2">Alergias o Restricciones (Opcional)</label>
                                <input type="text" wire:model="alergias" placeholder="Ej: Alérgico a los camarones, vegetariano..." class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all">
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Datos Específicos Hotel -->
                    @if($tipo === 'habitacion')
                    <div class="animate-fade-in">
                        <h3 class="font-serif text-xl text-primary-900 mb-4 pt-4 border-t border-primary-100">Detalles de Hospedaje</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div>
                                <label class="block text-sm font-medium text-primary-700 mb-2">Habitación de Interés</label>
                                <select wire:model="habitacion" required class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all bg-white">
                                    <option value="">Seleccione tipo de suite</option>
                                    <option value="estandar">Habitación Estándar</option>
                                    <option value="vista_mar">Suite Vista al Mar</option>
                                    <option value="master">Master Suite Presidencial</option>
                                    <option value="villa">Villa Privada</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-primary-700 mb-2">Fecha de Check-in</label>
                                <input type="date" wire:model="fecha" required class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-primary-700 mb-2">Hora estimada de llegada</label>
                                <input type="time" wire:model="llegada" class="w-full px-4 py-3 rounded-lg border border-primary-200 focus:ring-2 focus:ring-accent-500 focus:border-accent-500 outline-none transition-all bg-white">
                            </div>
                            <div class="flex items-center h-full pt-6">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" wire:model="transporte" class="rounded border-gray-300 text-accent-500 focus:ring-accent-500 h-5 w-5">
                                    <span class="ml-2 text-primary-800 text-sm">Requiere transporte desde Aeropuerto</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    @endif

                    <button type="submit" class="w-full bg-primary-900 hover:bg-primary-800 text-white font-medium py-4 rounded-lg transition-colors flex justify-center items-center gap-2">
                        <span wire:loading.remove>Enviar Solicitud de Reserva</span>
                        <span wire:loading>Procesando...</span>
                    </button>
                    <p class="text-xs text-center text-primary-500 mt-4">
                        Esto es una solicitud. Nos contactaremos en menos de 1 hora para confirmar disponibilidad y procesar el depósito.
                    </p>
                </form>
            @endif
        </div>
    </div>
</div>
