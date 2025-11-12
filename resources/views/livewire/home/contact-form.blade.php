<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <div class="flex flex-col gap-6 w-11/12 sm:w-10/12 mx-auto mt-6">
        <form class="border border-gray-200 p-6">
            <div class="flex flex-col gap-2 justify-start">
                <flux:heading class="font-bold! text-black!" size="xl">
                    Envíanos un mensaje
                </flux:heading>

                <flux:text class="text-start md:text-base">Completa el formulario y nos pondremos en contacto contigo pronto</flux:text>
            </div>

            <div class="mt-6 flex flex-col gap-6">
                <div class="grid grid-cols-2 gap-4">
                    <flux:input type="text" label="Nombre" placeholder="Tu Nombre" />
                    <flux:input type="text" label="Apellido" placeholder="Tu Apellido" />
                </div>


                <flux:input type="email" label="Email" placeholder="tu@email.com" />

                <flux:input type="text" label="Institución" placeholder="Nombre de tu institución" />

                <flux:textarea
                    label="Mensaje"
                    placeholder="Cuéntanos sobre tus necesidades..."
                />

                <flux:button type="submit" variant="primary" class="bg-blue-500! hover:bg-blue-600!">Enviar Mensaje</flux:button>
            </div>
        </form>

        <div>
            <flux:heading class="font-bold! text-black!" size="xl">
                Información de Contacto
            </flux:heading>

            @php
                $contact_texts =
                [
                    [
                        'icon' => 'envelope',
                        'text' => 'contacto@aulex.com'
                    ],
                    [
                        'icon' => 'phone',
                        'text' => '+1 (555) 123-4567'
                    ],
                    [
                        'icon' => 'map-pin',
                        'text' => '123 Calle Educación, Ciudad, País'
                    ],
                ];

                $contact_questions =
                [
                    'Más de 1000 instituciones confían en nosotros',
                    'Soporte técnico especializado',
                    'Implementación rápida y sencilla',
                    'Actualizaciones constantes',
                ];
            @endphp

            <div class="">
                <div class="flex flex-col justify-start items-center w-full gap-4">
                    @foreach($contact_texts as $contact_text)
                        <div class="w-full flex justify-start items-center gap-2">
                            <flux:icon name="{{ $contact_text['icon'] }}" variant="solid" class="text-blue-500 size-6"/>
                            <flux:text class="text-black font-medium">{{ $contact_text['text'] }}</flux:text>
                        </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    <flux:heading class="font-bold! text-black!" size="lg">
                        ¿Por qué elegir Aulex?
                    </flux:heading>

                    <div class="flex flex-col justify-start items-center w-full gap-4 mt-4">
                        @foreach($contact_questions as $contact_question)
                            <div class="w-full flex justify-start items-center gap-2">
                                <flux:icon name="star" variant="solid" class="text-yellow-500 size-6"/>
                                <flux:text class="text-black font-medium">{{ $contact_question }}</flux:text>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
