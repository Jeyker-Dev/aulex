@props([
    'title' => '',
    'icon' => '',
    'value' => '',
    'percentage_text' => '',
])

<div class="flex items-center justify-center relative border rounded-xl border-neutral-200 dark:border-neutral-700 p-20">
    <div class="absolute inset-0 flex flex-col items-start justify-center gap-2 p-6">
        <flux:heading class="text-gray-500">
            {{ $title }}
        </flux:heading>

        <p class="font-bold text-3xl">
            {{ $value }}
        </p>

        <p class="text-green-500">
            {{ $percentage_text }}
        </p>
    </div>

    <div class="w-20 h-20 flex items-center justify-center bg-blue-100/50 rounded-full absolute right-4">
        <flux:icon name="{{ $icon }}" variant="solid" class="size-10 text-blue-500"/>
    </div>
</div>
