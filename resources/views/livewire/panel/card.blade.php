<?php

use Livewire\Volt\Component;
use App\Models\Organization;
use App\Models\User;

new class extends Component {
    public function with(): array
    {
        return [
            'organizations' => Organization::all(),
            'users' => User::all(),
        ];
    }
}; ?>

@php
    $cards =
    [
        [
            'title' =>  'Instituciones Activas',
            'icon'  =>  'home-modern',
            'value' =>  $organizations->count(),
            'percentage_text' =>  '5% más que el mes pasado',
        ],
        [
            'title' =>  'Usuarios Totales',
            'icon'  =>  'users',
            'value' =>  $users->count(),
            'percentage_text' =>  '10% más que el mes pasado',
        ],
        [
            'title' =>  'Ingresos Mensuales',
            'icon'  =>  'currency-dollar',
            'value' =>  '$30,000',
            'percentage_text' =>  '20% más que el mes pasado',
        ],
         [
            'title' =>  'Tasa de conversion',
            'icon'  =>  'arrow-trending-up',
            'value' =>  '1,200',
            'percentage_text' =>  '5% más que el mes pasado',
        ],
    ];
@endphp

<div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @foreach($cards as $card)
        <x-panel.card :title="$card['title']" :icon="$card['icon']" :value="$card['value']"
                      :percentage_text="$card['percentage_text']"/>
    @endforeach
</div>
