<x-layouts.panel.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="flex flex-col items-start gap-3">
            <x-general.subtitle>
                Panel de Administración
            </x-general.subtitle>

            <x-general.text>
                Bienvenido de vuelta, Admin. Aquí tienes un resumen de la plataforma.
            </x-general.text>
        </div>

        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
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

            @foreach($cards as $card)
                <x-panel.card :title="$card['title']" :icon="$card['icon']" :value="$card['value']" :percentage_text="$card['percentage_text']"/>
            @endforeach
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <livewire:panel.dashboard.organizations />
        </div>
    </div>
</x-layouts.panel.app>
