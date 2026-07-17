<?php
use function Livewire\Volt\{state, layout, title};
layout('components.layouts.admin');
title('Todas las Reservas');
?>

<div>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Gestión de Reservas</h2>
                            <p class="text-sm text-gray-600">Revisa y aprueba las reservas del restaurante y el hotel.</p>
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Cliente</span></th>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Contacto</span></th>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Tipo</span></th>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Fecha/Hora</span></th>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Estado</span></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800 font-medium">Juan Pérez</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-600">juan@email.com</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800">Restaurante</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800">12 Oct 2026, 19:00</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-green-100 text-green-800">Confirmada</span></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
