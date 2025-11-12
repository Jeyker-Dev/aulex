@php
    $questions =
    [
      [
          'title' => '¿Qué incluye el plan gratuito?',
          'text' => 'Nuestro plan gratuito incluye acceso para hasta 25 estudiantes,
                    2 aulas virtuales, almacenamiento de 5GB y funciones básicas de videoconferencia. Es perfecto para profesores que quieren probar la plataforma.',
      ],
      [
          'title' => '¿Es fácil de implementar en mi institución?',
          'text' => 'Sí, Aulex está diseñado para ser implementado rápidamente.
          Nuestro equipo de soporte te ayuda con la configuración inicial, migración de datos y capacitación del personal. La mayoría de instituciones están funcionando en menos de una semana.',
      ],
      [
          'title' => '¿Qué dispositivos son compatibles?',
          'text' => 'Aulex funciona en cualquier dispositivo con navegador web: computadoras, tablets y smartphones.
          También tenemos aplicaciones móviles nativas para iOS y Android para una mejor experiencia en dispositivos móviles.',
      ],
    ];
@endphp

<div
    class="mt-14 w-11/12 sm:w-10/12 md:w-9/12 lg:w-8/12 xl:w-7/12 2xl:w-6/12 mx-auto flex flex-col justify-center items-center">
    <div class="flex flex-col gap-4">
        <x-general.title>
            Preguntas Frecuentes
        </x-general.title>

        <x-general.text>
            Resolvemos las dudas más comunes sobre nuestra plataforma educativa
        </x-general.text>
    </div>

    <div class="flex flex-col gap-6 mt-8">
        @foreach($questions as $question)
            <flux:card class="space-y-6 hover:shadow-md">
                <flux:heading size="lg">{{ $question['title'] }}</flux:heading>
                <flux:text class="mt-2">{{ $question['text'] }}</flux:text>
            </flux:card>
        @endforeach
    </div>
</div>
