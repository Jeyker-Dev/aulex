@props(['textClass' => ''])

<div {{ $attributes->merge(['class' => 'flex items-center']) }}>
    <x-general.app-logo-icon class="size-6 sm:size-8 lg:size-10" />
    <p class="ml-2 text-lg sm:text-xl lg:text-2xl font-bold text-primary {{ $textClass }}">
        Aulex
    </p>
</div>
