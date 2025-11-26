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
            <div class="border rounded-xl border-gray-200 w-6/12 absolute top-20 left-10 p-6">
                <div class="p-6">
                    <x-general.title-text
                        title="Instituciones Recientes"
                        text="Nuevas instituciones registradas en los últimos días"
                        title-class="text-lg!"
                    />
                </div>

                <div class="p-6 border rounded-xl border-gray-200">
                    <div class="flex gap-4">
                        <p class="">
                            U
                        </p>

                        <div class="flex items-center justify-between gap-2 w-full">
                            <div class="flex flex-col gap-2 items-center">
                                <p>
                                    Universidad Nacional de Colombia
                                </p>

                                <div class="flex items-center gap-2">
                                    <flux:badge>
                                        Enterprise
                                    </flux:badge>

                                    <p>
                                        100 Students
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="flex flex-col gap-2">
                                    <p class="font-bold">
                                        $199/mes
                                    </p>

                                    <flux:badge>
                                        Activo
                                    </flux:badge>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:button icon="home"/>
                                    <flux:button icon="home"/>
                                    <flux:button icon="home"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.panel.app>
