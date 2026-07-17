<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')] #[Title('Reservas | Sabor del Pacífico')] class extends Component {
    public $tipo = 'restaurante'; 
    public $fecha = ''; 
    public $hora = ''; 
    public $personas = 2; 
    public $nombre = ''; 
    public $email = ''; 
    public $telefono = '';
    
    // Campos Restaurante VIP
    public $zona_mesa = 'ventanal';
    public $tipo_menu = 'carta';
    public $maridaje = false;
    public $celebracion = 'ninguna';
    public $alergias = '';
    
    // Campos Hotel Premium
    public $tipo_habitacion = '';
    public $transporte_vip = false;
    public $amenidad_bienvenida = 'ninguna';
    public $almohada = 'estandar';
    public $restricciones_desayuno = '';
    
    public $success = false;

    public function submit() {
        $this->success = true;
    }
};
?>

<div>
    <!-- Inicialización de Datepicker usando Alpine para evitar duplicados en Livewire -->
    <script type="module">
        import AirDatepicker from 'https://cdn.jsdelivr.net/npm/air-datepicker@3.3.5/+esm'
        
        window.AirDatepicker = AirDatepicker;
        window.localeEs = {
            days: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            daysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
            daysMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            today: 'Hoy',
            clear: 'Limpiar',
            dateFormat: 'yyyy-MM-dd',
            timeFormat: 'hh:mm aa',
            firstDay: 1
        };
    </script>
    <style>
        .air-datepicker {
            min-width: 270px !important;
        }
        .air-datepicker--time {
            padding: 15px !important;
            font-size: 1.1rem !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.3.5/air-datepicker.min.css" rel="stylesheet">

    <div class="bg-primary-50 py-24 sm:py-32 relative min-h-[90vh]">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 relative z-10" x-data="{ appear: false }" x-init="setTimeout(() => appear = true, 100)">
            <div class="text-center mb-12 transition-all duration-700 transform" :class="appear ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-primary-950 mb-4">
                    Su Experiencia Comienza Aquí
                </h1>
                <p class="text-primary-700 text-lg">Personalice cada detalle de su visita a Sabor del Pacífico.</p>
            </div>

            @if($success)
                <div class="bg-white p-10 rounded-2xl shadow-xl border border-primary-100 text-center animate-fade-in">
                    <svg class="mx-auto h-16 w-16 text-green-500 mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h2 class="text-3xl font-serif text-primary-900 mb-4">¡Solicitud Confirmada!</h2>
                    <p class="text-primary-600 text-lg mb-8">Hemos recibido su petición. Nuestro Concierge se comunicará con usted al {{ $email }} en breve para afinar los últimos detalles.</p>
                    <button wire:click="$set('success', false)" class="text-white bg-accent-500 hover:bg-accent-400 transition-colors px-8 py-3 rounded-full font-medium">Hacer otra reserva</button>
                </div>
            @else
                <form wire:submit="submit" class="bg-white p-6 md:p-12 rounded-2xl shadow-2xl border border-primary-100">
                    
                    <h3 class="font-serif text-2xl text-primary-900 mb-6 text-center">¿Qué desea reservar hoy?</h3>
                    
                    <!-- Toggle con Alpine puro vinculado a Livewire -->
                    <div class="mb-12 flex justify-center" x-data="{ tipo: @entangle('tipo').live }">
                        <div class="inline-flex bg-gray-50 border border-gray-200 rounded-full p-1.5 shadow-inner">
                            <button type="button" @click="tipo = 'restaurante'" 
                                    class="px-8 py-3 rounded-full text-sm font-medium transition-all duration-300"
                                    :class="tipo === 'restaurante' ? 'bg-primary-950 text-white shadow-md' : 'text-primary-600 hover:text-primary-900'">
                                Mesa en Restaurante
                            </button>
                            
                            <button type="button" @click="tipo = 'hotel'" 
                                    class="px-8 py-3 rounded-full text-sm font-medium transition-all duration-300"
                                    :class="tipo === 'hotel' ? 'bg-primary-950 text-white shadow-md' : 'text-primary-600 hover:text-primary-900'">
                                Hospedaje en Hotel
                            </button>
                        </div>
                    </div>

                    <!-- Datos Generales -->
                    <h3 class="font-serif text-xl text-primary-900 mb-6 pb-2 border-b border-primary-100">Información del Titular</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 mb-1">Nombre completo</label>
                            <input type="text" wire:model="nombre" required class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 mb-1">Correo electrónico</label>
                            <input type="email" wire:model="email" required class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 mb-1">Teléfono / WhatsApp</label>
                            <input type="tel" wire:model="telefono" required class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 mb-1">
                                @if($tipo === 'restaurante') Número de comensales @else Número de Huéspedes @endif
                            </label>
                            <input type="number" wire:model="personas" min="1" max="20" required class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all outline-none">
                        </div>
                    </div>

                    <!-- DATOS ESPECÍFICOS RESTAURANTE -->
                    @if($tipo === 'restaurante')
                    <div class="animate-fade-in">
                        <h3 class="font-serif text-xl text-primary-900 mb-6 pb-2 border-b border-primary-100">Detalles de su Experiencia Culinaria</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            
                            <div wire:ignore x-data="{
                                init() {
                                    const check = setInterval(() => {
                                        if (window.AirDatepicker && window.localeEs) {
                                            clearInterval(check);
                                            new window.AirDatepicker(this.$refs.input, {
                                                locale: window.localeEs,
                                                dateFormat: 'yyyy-MM-dd',
                                                autoClose: true,
                                                onSelect: ({formattedDate}) => { $wire.set('fecha', formattedDate); }
                                            });
                                        }
                                    }, 50);
                                }
                            }">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Fecha de Reserva</label>
                                <input x-ref="input" type="text" autocomplete="off" placeholder="yyyy-mm-dd" 
                                       class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all outline-none">
                            </div>

                            <div wire:ignore x-data="{
                                init() {
                                    const check = setInterval(() => {
                                        if (window.AirDatepicker && window.localeEs) {
                                            clearInterval(check);
                                            new window.AirDatepicker(this.$refs.input, {
                                                locale: window.localeEs,
                                                timepicker: true,
                                                onlyTimepicker: true,
                                                timeFormat: 'hh:mm aa',
                                                onSelect: ({formattedDate}) => { $wire.set('hora', formattedDate); }
                                            });
                                        }
                                    }, 50);
                                }
                            }">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Hora (Almuerzo / Cena)</label>
                                <input x-ref="input" type="text" autocomplete="off" placeholder="--:-- --" 
                                       class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all outline-none">
                            </div>

                            <!-- Custom Alpine Select: Zona Mesa -->
                            <div class="relative" x-data="{
                                open: false,
                                value: @entangle('zona_mesa').live,
                                options: [
                                    { id: 'ventanal', name: 'Junto al gran ventanal (Vista)' },
                                    { id: 'privada', name: 'Zona Privada (Íntima)' },
                                    { id: 'bar', name: 'Cerca al Bar de Autor' },
                                    { id: 'indiferente', name: 'Indiferente' }
                                ],
                                get selectedLabel() {
                                    let selected = this.options.find(opt => opt.id == this.value);
                                    return selected ? selected.name : 'Selecciona una opción...';
                                }
                            }">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Ubicación Preferida de la Mesa</label>
                                <button type="button" @click="open = !open" @click.away="open = false" 
                                    class="w-full px-4 py-2.5 text-sm rounded-lg border border-gray-200 bg-white focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all flex justify-between items-center text-left">
                                    <span x-text="selectedLabel" class="text-slate-700 truncate pr-4"></span>
                                    <svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div x-show="open" x-transition.opacity.duration.200ms x-cloak class="absolute z-50 w-full mt-1.5 bg-white border border-slate-200 rounded-xl shadow-xl py-1 max-h-48 overflow-auto">
                                    <template x-for="option in options" :key="option.id">
                                        <div @click="value = option.id; open = false" class="px-4 py-2 text-xs sm:text-sm cursor-pointer transition-colors flex items-center justify-between" :class="value == option.id ? 'bg-primary-50 text-primary-950 font-bold' : 'text-slate-600 hover:bg-slate-50'">
                                            <span x-text="option.name" class="truncate pr-2"></span>
                                            <svg x-show="value == option.id" class="w-4 h-4 text-primary-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                    </template>
                                </div>
                            </div>

                            <!-- Custom Alpine Select: Tipo Menú -->
                            <div class="relative" x-data="{
                                open: false,
                                value: @entangle('tipo_menu').live,
                                options: [
                                    { id: 'carta', name: 'Platos a la Carta' },
                                    { id: 'degustacion', name: 'Menú Degustación \'Pacífico\' (7 tiempos)' }
                                ],
                                get selectedLabel() {
                                    let selected = this.options.find(opt => opt.id == this.value);
                                    return selected ? selected.name : 'Selecciona una opción...';
                                }
                            }">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Estilo de Menú</label>
                                <button type="button" @click="open = !open" @click.away="open = false" 
                                    class="w-full px-4 py-2.5 text-sm rounded-lg border border-gray-200 bg-white focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all flex justify-between items-center text-left">
                                    <span x-text="selectedLabel" class="text-slate-700 truncate pr-4"></span>
                                    <svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                </button>
                                <div x-show="open" x-transition.opacity.duration.200ms x-cloak class="absolute z-50 w-full mt-1.5 bg-white border border-slate-200 rounded-xl shadow-xl py-1 max-h-48 overflow-auto">
                                    <template x-for="option in options" :key="option.id">
                                        <div @click="value = option.id; open = false" class="px-4 py-2 text-xs sm:text-sm cursor-pointer transition-colors flex items-center justify-between" :class="value == option.id ? 'bg-primary-50 text-primary-950 font-bold' : 'text-slate-600 hover:bg-slate-50'">
                                            <span x-text="option.name" class="truncate pr-2"></span>
                                            <svg x-show="value == option.id" class="w-4 h-4 text-primary-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            
                            <!-- Custom Alpine Select: Celebracion -->
                            <div class="relative" x-data="{
                                open: false,
                                value: @entangle('celebracion').live,
                                options: [
                                    { id: 'ninguna', name: 'Cena Casual' },
                                    { id: 'aniversario', name: 'Aniversario Romántico' },
                                    { id: 'cumpleanos', name: 'Cumpleaños' },
                                    { id: 'negocios', name: 'Cierre de Negocios' },
                                    { id: 'pedida', name: 'Pedida de Mano' }
                                ],
                                get selectedLabel() {
                                    let selected = this.options.find(opt => opt.id == this.value);
                                    return selected ? selected.name : 'Selecciona una opción...';
                                }
                            }">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Motivo de Celebración</label>
                                <button type="button" @click="open = !open" @click.away="open = false" class="w-full px-4 py-2.5 text-sm rounded-lg border border-gray-200 bg-white focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all flex justify-between items-center text-left">
                                    <span x-text="selectedLabel" class="text-slate-700 truncate pr-4"></span>
                                    <svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                </button>
                                <div x-show="open" x-transition.opacity.duration.200ms x-cloak class="absolute z-50 w-full mt-1.5 bg-white border border-slate-200 rounded-xl shadow-xl py-1 max-h-48 overflow-auto">
                                    <template x-for="option in options" :key="option.id">
                                        <div @click="value = option.id; open = false" class="px-4 py-2 text-xs sm:text-sm cursor-pointer transition-colors flex items-center justify-between" :class="value == option.id ? 'bg-primary-50 text-primary-950 font-bold' : 'text-slate-600 hover:bg-slate-50'">
                                            <span x-text="option.name" class="truncate pr-2"></span>
                                            <svg x-show="value == option.id" class="w-4 h-4 text-primary-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Alergias o Restricciones Alimenticias</label>
                                <input type="text" wire:model="alergias" placeholder="Ej: Celíaco, alérgico a los mariscos..." class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all outline-none">
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- DATOS ESPECÍFICOS HOTEL -->
                    @if($tipo === 'hotel')
                    <div class="animate-fade-in">
                        <h3 class="font-serif text-xl text-primary-900 mb-6 pb-2 border-b border-primary-100">Detalles de su Estadía Premium</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            
                            <!-- Custom Alpine Select: Categoria Habitacion -->
                            <div class="relative" x-data="{
                                open: false,
                                value: @entangle('tipo_habitacion').live,
                                options: [
                                    { id: '', name: 'Seleccione su santuario...' },
                                    { id: 'deluxe', name: 'Deluxe King (Vista Jardín Tropical)' },
                                    { id: 'ocean_suite', name: 'Ocean View Suite (Terraza Privada)' },
                                    { id: 'presidencial', name: 'Master Suite Presidencial' }
                                ],
                                get selectedLabel() {
                                    let selected = this.options.find(opt => opt.id == this.value);
                                    return selected ? selected.name : 'Seleccione su santuario...';
                                }
                            }">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Categoría de Habitación</label>
                                <button type="button" @click="open = !open" @click.away="open = false" class="w-full px-4 py-2.5 text-sm rounded-lg border border-gray-200 bg-white focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all flex justify-between items-center text-left">
                                    <span x-text="selectedLabel" class="text-slate-700 truncate pr-4"></span>
                                    <svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                </button>
                                <div x-show="open" x-transition.opacity.duration.200ms x-cloak class="absolute z-50 w-full mt-1.5 bg-white border border-slate-200 rounded-xl shadow-xl py-1 max-h-48 overflow-auto">
                                    <template x-for="option in options" :key="option.id">
                                        <div @click="value = option.id; open = false" class="px-4 py-2 text-xs sm:text-sm cursor-pointer transition-colors flex items-center justify-between" :class="value == option.id ? 'bg-primary-50 text-primary-950 font-bold' : 'text-slate-600 hover:bg-slate-50'">
                                            <span x-text="option.name" class="truncate pr-2"></span>
                                            <svg x-show="value == option.id" class="w-4 h-4 text-primary-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            
                            <div wire:ignore x-data="{
                                init() {
                                    const check = setInterval(() => {
                                        if (window.AirDatepicker && window.localeEs) {
                                            clearInterval(check);
                                            new window.AirDatepicker(this.$refs.input, {
                                                locale: window.localeEs,
                                                dateFormat: 'yyyy-MM-dd',
                                                autoClose: true,
                                                onSelect: ({formattedDate}) => { $wire.set('fecha', formattedDate); }
                                            });
                                        }
                                    }, 50);
                                }
                            }">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Fecha de Check-in</label>
                                <input x-ref="input" type="text" autocomplete="off" placeholder="yyyy-mm-dd" 
                                       class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all outline-none">
                            </div>

                            <!-- Custom Alpine Select: Sorpresa Bienvenida -->
                            <div class="relative" x-data="{
                                open: false,
                                value: @entangle('amenidad_bienvenida').live,
                                options: [
                                    { id: 'ninguna', name: 'Ninguna' },
                                    { id: 'champana', name: 'Botella de Champaña y Fresas' },
                                    { id: 'frutas', name: 'Cesta de Frutas Exóticas del Pacífico' },
                                    { id: 'quesos', name: 'Tabla de Quesos y Vino Tinto' }
                                ],
                                get selectedLabel() {
                                    let selected = this.options.find(opt => opt.id == this.value);
                                    return selected ? selected.name : 'Selecciona una opción...';
                                }
                            }">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Sorpresa de Bienvenida</label>
                                <button type="button" @click="open = !open" @click.away="open = false" class="w-full px-4 py-2.5 text-sm rounded-lg border border-gray-200 bg-white focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all flex justify-between items-center text-left">
                                    <span x-text="selectedLabel" class="text-slate-700 truncate pr-4"></span>
                                    <svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                </button>
                                <div x-show="open" x-transition.opacity.duration.200ms x-cloak class="absolute z-50 w-full mt-1.5 bg-white border border-slate-200 rounded-xl shadow-xl py-1 max-h-48 overflow-auto">
                                    <template x-for="option in options" :key="option.id">
                                        <div @click="value = option.id; open = false" class="px-4 py-2 text-xs sm:text-sm cursor-pointer transition-colors flex items-center justify-between" :class="value == option.id ? 'bg-primary-50 text-primary-950 font-bold' : 'text-slate-600 hover:bg-slate-50'">
                                            <span x-text="option.name" class="truncate pr-2"></span>
                                            <svg x-show="value == option.id" class="w-4 h-4 text-primary-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            
                            <!-- Custom Alpine Select: Almohada -->
                            <div class="relative" x-data="{
                                open: false,
                                value: @entangle('almohada').live,
                                options: [
                                    { id: 'estandar', name: 'Estándar (Pluma de ganso)' },
                                    { id: 'memoria', name: 'Memory Foam (Ergonómica)' },
                                    { id: 'hipoalergenica', name: 'Hipoalergénica' },
                                    { id: 'firme', name: 'Extra Firme' }
                                ],
                                get selectedLabel() {
                                    let selected = this.options.find(opt => opt.id == this.value);
                                    return selected ? selected.name : 'Selecciona una opción...';
                                }
                            }">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Preferencia de Almohada</label>
                                <button type="button" @click="open = !open" @click.away="open = false" class="w-full px-4 py-2.5 text-sm rounded-lg border border-gray-200 bg-white focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all flex justify-between items-center text-left">
                                    <span x-text="selectedLabel" class="text-slate-700 truncate pr-4"></span>
                                    <svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                </button>
                                <div x-show="open" x-transition.opacity.duration.200ms x-cloak class="absolute z-50 w-full mt-1.5 bg-white border border-slate-200 rounded-xl shadow-xl py-1 max-h-48 overflow-auto">
                                    <template x-for="option in options" :key="option.id">
                                        <div @click="value = option.id; open = false" class="px-4 py-2 text-xs sm:text-sm cursor-pointer transition-colors flex items-center justify-between" :class="value == option.id ? 'bg-primary-50 text-primary-950 font-bold' : 'text-slate-600 hover:bg-slate-50'">
                                            <span x-text="option.name" class="truncate pr-2"></span>
                                            <svg x-show="value == option.id" class="w-4 h-4 text-primary-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-slate-500 mb-1">Restricciones Dietéticas (Para el desayuno incluido)</label>
                                <input type="text" wire:model="restricciones_desayuno" placeholder="Ej: Leche de almendras, sin gluten..." class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent-500/20 focus:border-accent-500 transition-all outline-none">
                            </div>
                        </div>
                    </div>
                    @endif

                    <button type="submit" class="w-full mt-6 bg-primary-900 hover:bg-primary-800 text-white text-lg font-medium py-4 rounded-xl shadow-lg transition-all transform hover:-translate-y-1 hover:shadow-xl flex justify-center items-center gap-2">
                        <span wire:loading.remove>Confirmar Solicitud</span>
                        <span wire:loading>Procesando detalles...</span>
                    </button>
                </form>
            @endif
        </div>
    </div>
</div>
