<x-layouts.home.app>
    <x-general.header>
        <div class="flex items-center justify-between">
            <x-general.app-logo/>

            <flux:button command="show-modal" commandfor="drawer" icon="bars-3" class="md:hidden"></flux:button>
        </div>


        <el-dialog>
            <dialog id="drawer" aria-labelledby="drawer-title"
                    class="fixed inset-0 size-auto max-h-none max-w-none overflow-hidden bg-transparent backdrop:bg-transparent">
                <div tabindex="0" class="absolute inset-0 pl-10 focus:outline-none sm:pl-16">
                    <el-dialog-panel
                        class="ml-auto block size-full max-w-md transform transition duration-500 ease-in-out data-closed:translate-x-full sm:duration-700">
                        <div
                            class="relative flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl dark:divide-white/10 dark:bg-gray-800 dark:after:absolute dark:after:inset-y-0 dark:after:left-0 dark:after:w-px dark:after:bg-white/10">
                            <div class="h-0 flex-1 overflow-y-auto">
                                <div class="bg-white px-4 py-6 sm:px-6">
                                    <button type="button" command="close" commandfor="drawer"
                                            class="relative rounded-md text-indigo-200 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white dark:text-indigo-300 dark:hover:text-white">
                                        <span class="absolute -inset-2.5"></span>
                                        <span class="sr-only">Close panel</span>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="1.5" data-slot="icon" aria-hidden="true"
                                             class="size-6">
                                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex flex-1 flex-col justify-between">
                                    <div class="divide-y divide-gray-200 px-4 sm:px-6 dark:divide-white/10">
                                        <div class="pb-8">
                                            <x-general.app-logo/>
                                        </div>

                                        <flux:spacer/>

                                        <div class="flex flex-col gap-4 py-8 w-7/12">
                                            <flux:button icon="video-camera" class="text-lg! justify-start! !border-none !shadow-none hover:bg-white! hover:text-blue-500">
                                                Caracteristicas
                                            </flux:button>

                                            <flux:button icon="currency-dollar" class="text-lg! justify-start! !border-none !shadow-none hover:bg-white! hover:text-blue-500">
                                                Precios
                                            </flux:button>

                                            <flux:button icon="envelope" class="text-lg! justify-start! !border-none !shadow-none hover:bg-white! hover:text-blue-500">
                                                Contacto
                                            </flux:button>
                                        </div>

                                        <flux:spacer/>

                                        <div class="pt-10">
                                            <x-general.button>
                                                Iniciar Sesión
                                            </x-general.button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </el-dialog-panel>
                </div>
            </dialog>
        </el-dialog>

    </x-general.header>
</x-layouts.home.app>
