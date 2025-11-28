@props([
    'initial' => '',
    'title' => '',
    'badgeText' => '',
    'text' => '',
])

<div class="p-6 border rounded-xl border-gray-200">
    <div class="flex gap-4">
        <div class="flex items-center justify-center">
            <flux:avatar circle initials="{{ $initial }}" />
        </div>

        <div class="flex items-center justify-between gap-2 w-full">
            <div class="flex flex-col gap-2 items-center">
                <flux:heading size="lg" class="text-start! w-full!">
                    {{ $title }}
                </flux:heading>

                <div class="w-full flex items-center gap-2">
                    <flux:badge variant="solid" class="bg-black!">
                        {{ $badgeText }}
                    </flux:badge>

                    <p>
                        {{ $text }}
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
                    <flux:button icon="eye"/>
                    <flux:button icon="pencil-square"/>
                    <flux:button icon="trash"/>
                </div>
            </div>
        </div>
    </div>
</div>
