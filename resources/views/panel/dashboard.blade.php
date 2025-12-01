<x-layouts.panel.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-col gap-4 rounded-xl">
        <div class="flex flex-col items-start justify-between gap-3">
            <x-general.subtitle>
                Panel de Administración
            </x-general.subtitle>

            <x-general.text>
                Bienvenido de vuelta, Admin. Aquí tienes un resumen de la plataforma.
            </x-general.text>
        </div>

        <livewire:panel.card/>

        <div class="relative h-full rounded-xl border border-neutral-200 dark:border-neutral-700">
            <livewire:panel.dashboard.recent-organizations/>

            <div class="absolute right-20 top-20 border rounded-xl border-neutral-200 p-6 w-4/12">

                <x-general.title-text
                    title="Alertas del Sistema"
                    text="Notificaciones importantes que requieren atención"
                    title-class="text-lg!"
                />


                <div class="flex flex-col gap-4 mt-4 border border-neutra-200 rounded-xl p-4">
                    <div class="flex items-center gap-4">
                        <div class="w-2 h-2 rounded-full bg-yellow-500"></div>

                        <div>
                            <flux:heading size="lg" class="text-start! w-full!">
                                No hay alertas en este momento.
                            </flux:heading>

                            <p class="text-gray-400 text-sm">
                                hace 6 minutos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.panel.app>
