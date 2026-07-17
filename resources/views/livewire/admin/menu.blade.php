<?php
use function Livewire\Volt\{state, layout, title};
layout('components.layouts.admin');
title('Gestión de Menú');
?>

<div>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Menú del Restaurante</h2>
                            <p class="text-sm text-gray-600">Administra los platillos y precios.</p>
                        </div>
                        <div>
                            <button class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-primary-900 text-white hover:bg-primary-800 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                Agregar Platillo
                            </button>
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Platillo</span></th>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Categoría</span></th>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Precio</span></th>
                                <th scope="col" class="px-6 py-3 text-end"><span class="text-xs font-semibold uppercase text-gray-800">Acciones</span></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800 font-medium">Crudo de Pesca del Día</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-600">Entradas</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800">$24</span></div></td>
                                <td class="h-px w-px whitespace-nowrap text-end"><div class="px-6 py-1.5"><button class="text-sm text-blue-600">Editar</button></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
