@props([
    'title' => '',
    'text' => '',
    'titleClass' => '',
    'textClass' => '',
])

<div class="flex flex-col gap-2">
    <h3 class="text-3xl font-bold {{ $titleClass }}">
        {{ $title }}
    </h3>

    <p class="text-gray-500 {{ $textClass }}">
        {{ $text }}
    </p>
</div>
