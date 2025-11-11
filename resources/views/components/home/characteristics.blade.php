@php
    $characteristics = [
        [
            'icon' => 'video-camera',
            'heading' => 'Clases Virtuales',
            'text' => 'Videoconferencias HD con herramientas interactivas para una experiencia inmersiva',
        ],
        [
            'icon' => 'document-chart-bar',
            'heading' => 'Gestión de Contenido',
            'text' => 'Organiza y comparte materiales educativos de forma sencilla y estructurada',
        ],
        [
            'icon' => 'user-plus',
            'heading' => 'Colaboración',
            'text' => 'Foros, chats y espacios de trabajo colaborativo para estudiantes y profesores',
        ],
        [
            'icon' => 'check-circle',
            'heading' => 'Evaluaciones',
            'text' => 'Sistema completo de evaluaciones con calificación automática y retroalimentación',
        ],
];


@endphp

<div class="w-11/12 sm:w-9/12 mx-auto mt-10 flex flex-col gap-4">
    <x-general.title>
        Características Principales
    </x-general.title>

    <x-general.text>
        Todo lo que necesitas para crear una experiencia educativa excepcional
    </x-general.text>

    @foreach($characteristics as $characteristic)
        <flux:card class="space-y-6 hover:shadow-md flex flex-col justify-center items-center py-8!">
            <flux:icon name="{{ $characteristic['icon'] }}" variant="solid" class="text-blue-500 size-16"/>

            <div>
                <flux:heading class="text-center text-xl md:text-2xl">{{ $characteristic['heading'] }}</flux:heading>
                <flux:text class="mt-2 text-center md:text-base">{{ $characteristic['text'] }}</flux:text>
            </div>
        </flux:card>
    @endforeach
</div>
