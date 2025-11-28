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
    <div class="p-6">
        <x-general.title-text
            title="Instituciones Recientes"
            text="Nuevas instituciones registradas en los últimos días"
            title-class="text-lg!"
        />
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
