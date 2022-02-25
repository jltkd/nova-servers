<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $server->name }}
            </h2>
            <a href="http://{{ $server->ip_address }}:2086" target="_blank" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Log In</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="mb-4 w-1/4">
                            <label for="searcg" class="sr-only">Search</label>
                            <input wire:model="search" type="search" name="search" id="search" class="shadow-sm block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Search Domains">
                        </div>
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Registrar
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Expires
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Managed By
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <livewire:server-domain-list :server="$server" />
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-8">
{{--                            {{ $domains->links() }}--}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
