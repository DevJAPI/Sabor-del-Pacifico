<?php
use function Livewire\Volt\{state, layout, title};
layout('components.layouts.admin');
title('Dashboard General');
?>

<div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Reservas (Restaurante)</p>
                </div>
                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">14</h3>
                    <span class="flex items-center gap-x-1 text-green-600">
                        <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                        <span class="inline-block text-sm">1.7%</span>
                    </span>
                </div>
            </div>
        </div>
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Reservas (Hotel)</p>
                </div>
                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">5</h3>
                </div>
            </div>
        </div>
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500">Visitantes Sitio</p>
                </div>
                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">842</h3>
                    <span class="flex items-center gap-x-1 text-green-600">
                        <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                        <span class="inline-block text-sm">5.2%</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="flex flex-col mt-8">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                    <!-- Header -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Próximas Reservas (Hoy)</h2>
                        </div>
                    </div>
                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Cliente</span></th>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Tipo</span></th>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Hora/Fecha</span></th>
                                <th scope="col" class="px-6 py-3 text-start"><span class="text-xs font-semibold uppercase text-gray-800">Pax</span></th>
                                <th scope="col" class="px-6 py-3 text-end"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800">Juan Pérez</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-blue-100 text-blue-800">Restaurante</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800">19:00 PM</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800">2</span></div></td>
                                <td class="h-px w-px whitespace-nowrap text-end"><div class="px-6 py-1.5"><button class="text-sm text-blue-600">Ver</button></div></td>
                            </tr>
                            <tr>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800">María Gómez</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-teal-100 text-teal-800">Suite Hotel</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800">Hoy (Check-in)</span></div></td>
                                <td class="h-px w-px whitespace-nowrap"><div class="px-6 py-2"><span class="text-sm text-gray-800">2</span></div></td>
                                <td class="h-px w-px whitespace-nowrap text-end"><div class="px-6 py-1.5"><button class="text-sm text-blue-600">Ver</button></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
