@php
    $cards = [
        [
            'title' => 'Básico',
            'text' => 'Perfecto para colegios pequeños',
            'price' => '$29/<span class="text-gray-500! text-lg!">mes</span>',
            'prices' => [
                'Hasta 100 estudiantes',
                '5 aulas virtuales',
                'Almacenamiento 10GB',
                'Soporte por email',
            ],
        ],
        [
            'title' => 'Profesional',
            'text' => 'Ideal para universidades',
            'price' => '$79/<span class="text-gray-500! text-lg!">mes</span>',
            'prices' => [
                'Hasta 500 estudiantes',
                'Aulas virtuales ilimitadas',
                'Almacenamiento 100GB',
                'Soporte prioritario',
                'Integraciones avanzadas',
            ],
        ],
         [
            'title' => 'Enterprise',
            'text' => 'Para grandes instituciones',
            'price' => '$199/<span class="text-gray-500! text-lg!">mes</span>',
            'prices' => [
                'Estudiantes ilimitados',
                'Funciones premium',
                'Almacenamiento 1TB',
                'Soporte 24/7',
                'Personalización completa',
            ],
        ],
    ];
@endphp

<div class="bg-gray-100 p-6">
    <x-general.title>
        Planes y Precios
    </x-general.title>

    <x-general.text class="mt-4">
        Elige el plan perfecto para tu institución educativa
    </x-general.text>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-12 sm:w-11/12 md:w-8/12 lg:w-11/12 xl:w-10/12 2xl:w-9/12 mx-auto">
        @foreach($cards as $card)
            <flux:card class="space-y-6 hover:shadow-md flex flex-col justify-center items-center py-16!">
                <div>
                    <flux:heading class="text-center text-xl md:text-2xl">{{ $card['title'] }}</flux:heading>
                    <flux:text class="mt-2 text-center md:text-base">{{ $card['text'] }}</flux:text>
                    <flux:text class="mt-6 text-center text-2xl font-bold! text-black!">{!! $card['price'] !!}</flux:text>
                </div>

                <div class="flex flex-col justify-start items-center w-full gap-4">
                    @foreach($card['prices'] as $price_text)
                        <div class="w-full flex justify-start items-center gap-2">
                            <flux:icon name="check-circle" variant="solid" class="text-green-500 size-6"/>
                            <flux:text class="text-black font-medium">{{ $price_text }}</flux:text>
                        </div>
                    @endforeach
                </div>

                <x-general.button class="w-full text-center bg-black! hover:bg-black/80! transition-all duration-200 ease-in-out">
                    Comenzar
                </x-general.button>
            </flux:card>
        @endforeach
    </div>
</div>
