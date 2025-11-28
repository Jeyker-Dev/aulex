@php
    $cards =
    [
        [
            'title' =>  'Instituciones Activas',
            'icon'  =>  'home-modern',
            'value' =>  '1,200',
            'percentage_text' =>  '5% más que el mes pasado',
        ],
        [
            'title' =>  'Usuarios Totales',
            'icon'  =>  'users',
            'value' =>  '2303',
            'percentage_text' =>  '10% más que el mes pasado',
        ],
        [
            'title' =>  'Ingresos Mensuales',
            'icon'  =>  'currency-dollar',
            'value' =>  '$30,000',
            'percentage_text' =>  '20% más que el mes pasado',
        ],
         [
            'title' =>  'Tasa de conversion',
            'icon'  =>  'arrow-trending-up',
            'value' =>  '1,200',
            'percentage_text' =>  '5% más que el mes pasado',
        ],
    ];
@endphp

<x-layouts.panel.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-col gap-4 rounded-xl">
        <div class="flex flex-col items-start justify-between gap-3">
            <x-general.subtitle>
                Panel de Administración
            </x-general.subtitle>

            <x-general.text>
                Bienvenido de vuelta, Admin. Aquí tienes un resumen de la plataforma.
            </x-general.text>
        </div>

        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach($cards as $card)
                <x-panel.card :title="$card['title']" :icon="$card['icon']" :value="$card['value']"
                              :percentage_text="$card['percentage_text']"/>
            @endforeach
        </div>

        <div class="relative h-full rounded-xl border border-neutral-200 dark:border-neutral-700">
            <livewire:panel.dashboard.organizations/>

            <div class="absolute right-20 top-20 border rounded-xl border-neutral-200 p-6 w-4/12">

                    <x-general.title-text
                        title="Alertas del Sistema"
                        text="Notificaciones importantes que requieren atención"
                        title-class="text-lg!"
                    />


                <div class="flex flex-col gap-4 mt-4 border border-neutra-200 rounded-xl p-4">
                    <div class="flex items-center gap-4">
                        <div class="w-2 h-2 rounded-full bg-yellow-500"></div>

                        <div>
                            <flux:heading size="lg" class="text-start! w-full!">
                                No hay alertas en este momento.
                            </flux:heading>

                            <p class="text-gray-400 text-sm">
                                hace 6 minutos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.panel.app>
