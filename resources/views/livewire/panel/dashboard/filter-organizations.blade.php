<?php

use Livewire\Volt\Component;

new class extends Component {
    public function sortOrganizations(string $value): void
    {
        $this->dispatch('sort-organization', name: $value);
    }

    public function filterBySubscriptionStatus(string $status): void
    {
        $this->dispatch('filter-by-subscription-status', status: $status);
    }

    public function clearFilters(): void
    {
        $this->dispatch('clear-filter-organizations');
    }
}; ?>

<div x-data>
    <flux:dropdown>
        <flux:button icon:trailing="chevron-down">Filters</flux:button>

        <flux:menu>
            <flux:menu.submenu heading="Sort by">
                <flux:menu.item wire:click="sortOrganizations('name')">Name</flux:menu.item>
            </flux:menu.submenu>

            <flux:menu.submenu heading="Filter by Subscription Status">
                <flux:menu.item wire:click="filterBySubscriptionStatus('basic')">Basic</flux:menu.item>
                <flux:menu.item wire:click="filterBySubscriptionStatus('professional')">Professional</flux:menu.item>
                <flux:menu.item wire:click="filterBySubscriptionStatus('enterprise')">Enterprise</flux:menu.item>
            </flux:menu.submenu>

            <flux:menu.separator/>

            <flux:menu.item wire:click="clearFilters()">Clear Filters</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</div>
