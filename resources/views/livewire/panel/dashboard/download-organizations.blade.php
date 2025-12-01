<?php

use Livewire\Volt\Component;
use App\Http\Controllers\OrganizationController;
use Livewire\Features\SupportRedirects\Redirector;

new class extends Component {
    public function export(): Redirector
    {
        return redirect()->route('organizations.export');
    }
}; ?>

<div>
    <flux:button icon="arrow-down-tray" class="size-6" wire:click="export"/>
</div>
