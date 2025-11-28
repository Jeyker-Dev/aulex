<?php

use Livewire\Volt\Component;
use App\Models\Organization;

new class extends Component {
    public function with(): array
    {
        return [
            'organizations' => Organization::query()
            ->latest()
            ->limit(5)
            ->get(),
        ];
    }
}; ?>

<div class="flex flex-col gap-4 border rounded-xl border-gray-200 w-6/12 absolute top-20 left-10 p-6">
    <div class="flex items-center justify-between p-6">
        <x-general.title-text
            title="Instituciones Recientes"
            text="Nuevas instituciones registradas en los últimos días"
            title-class="text-lg!"
        />

        <div class="flex gap-2 items-center">
            <flux:dropdown>
                <flux:button icon:trailing="chevron-down">Filters</flux:button>

                <flux:menu>
                    <flux:menu.item icon="plus">New post</flux:menu.item>

                    <flux:menu.separator />

                    <flux:menu.submenu heading="Sort by">
                        <flux:menu.radio.group>
                            <flux:menu.radio checked>Name</flux:menu.radio>
                            <flux:menu.radio>Date</flux:menu.radio>
                            <flux:menu.radio>Popularity</flux:menu.radio>
                        </flux:menu.radio.group>
                    </flux:menu.submenu>

                    <flux:menu.submenu heading="Filter">
                        <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
                        <flux:menu.checkbox checked>Published</flux:menu.checkbox>
                        <flux:menu.checkbox>Archived</flux:menu.checkbox>
                    </flux:menu.submenu>

                    <flux:menu.separator />

                    <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>
                </flux:menu>
            </flux:dropdown>

            <flux:button icon="arrow-down-tray" class="size-6"/>

            <flux:dropdown>
                <flux:button icon:trailing="ellipsis-vertical" />

                <flux:menu>
                    <flux:menu.group heading="Acciones rapidas">
                        <flux:menu.item>Crear nueva organización</flux:menu.item>
                        <flux:menu.item>Permisos</flux:menu.item>
                    </flux:menu.group>
                </flux:menu>
            </flux:dropdown>
        </div>
    </div>

    @foreach($organizations as $organization)
        <x-panel.dashboard.organization-card
            :initial="Str::upper(substr($organization->name, 0, 2))"
            :title="$organization->name"
            badgeText="Enterprise"
            text="10000 estudiantes"
        />
    @endforeach

    <flux:button class="max-w-72! mx-auto!">
        Ver todas las instituciones
    </flux:button>
</div>
