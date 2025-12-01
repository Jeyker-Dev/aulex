<?php

use Illuminate\Support\Collection;
use Livewire\Volt\Component;
use App\Models\Organization;
use Livewire\Attributes\On;

new class extends Component {
    public ?Collection $organizations = null;

    public function mount(): void
    {
        $this->organizations = Organization::query()
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
    }

    #[On('sort-organization')]
    public function sortOrganizations(string $name): void
    {
        $this->organizations = Organization::query()
            ->orderBy($name)
            ->limit(5)
            ->get();
    }

    #[On('filter-by-subscription-status')]
    public function filterBySubscriptionStatus(string $status): void
    {
        $this->organizations = Organization::query()
            ->where('subscription_status', $status)
            ->limit(5)
            ->get();
    }

    #[On('clear-filter-organizations')]
    public function clearFilters(): void
    {
        $this->organizations = Organization::query()
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
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
            <livewire:panel.dashboard.filter-organizations/>

            <livewire:panel.dashboard.download-organizations/>

            <flux:dropdown>
                <flux:button icon:trailing="ellipsis-vertical"/>

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
            :badgeText="ucfirst($organization->subscription_status)"
            text="10000 estudiantes"
        />
    @endforeach

    <flux:button class="max-w-72! mx-auto!">
        Ver todas las instituciones
    </flux:button>
</div>
