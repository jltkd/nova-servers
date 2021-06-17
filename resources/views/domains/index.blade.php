<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Domains') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid gap-6 lg:grid-flow-col-dense lg:grid-cols-4">
            <div class="lg:col-start-1 lg:col-span-3">
                <livewire:domain-list/>
            </div>
            <div class="lg:col-start-4 lg:col-span-1">
                <livewire:duplicate-domains/>
            </div>
        </div>
    </div>
</x-app-layout>
