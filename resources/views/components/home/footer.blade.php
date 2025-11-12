@php
    $footer_links =
    [
        [
            'heading' => 'Producto',
            'links' =>
            [
                'Características',
                'Precios',
                'Demo',
            ],
        ],

        [
            'heading' => 'Soporte',
            'links' =>
            [
                'Documentación',
                'Centro de Ayuda',
                'Contacto',
            ],
        ],

         [
            'heading' => 'Empresa',
            'links' =>
            [
                'Acerca de',
                'Blog',
                'Carreras',
            ],
        ],
    ];
@endphp

<div class="px-6 py-12 bg-black">
    <div class="grid grid-cols-1 lg:grid-cols-4 lg:justify-between lg:items-center gap-4 xl:w-10/12 xl:mx-auto justify-between items-center">
        <div class="flex flex-col gap-2">
            <x-general.app-logo text-class="text-white"/>

            <x-general.text class="text-white text-start">
                Transformando la educación a través de la tecnología virtual.
            </x-general.text>
        </div>

        @foreach($footer_links as $footer_link)
            <div class="flex flex-col gap-2">
                <flux:heading class="text-white" size="lg">
                    {{ $footer_link['heading'] }}
                </flux:heading>

                @foreach($footer_link['links'] as $link)
                    <flux:link href="#" class="text-gray-500! hover:text-white! no-underline!">
                        {{ $link }}
                    </flux:link>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
