<div class="flex flex-col mt-8">
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
                            Server
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
                    <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($domains as $domain)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a class="flex content-center" href="{{ $domain->domain }}" target="_blank">{{ $domain->name }} <x-external-link-icon/></a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a class="flex content-center" href="http://{{$domain->server->ip_address}}:2086" target="_blank">{{ $domain->server->name }} <x-external-link-icon/></a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            @if($domain->registrar)
                                {{ $domain->registrar }}
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            @if($domain->expires)
                            {{ \Carbon\Carbon::parse($domain->expires)->format('m-d-Y')}}
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            @if($domain->manages === 1)
                                Us
                            @else
                                Client
                            @endif
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="px-12 py-12 whitespace-nowrap text-gray-900 font-bold text-2xl text-center" colspan="5">Domain Not Found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-8">
                {{ $domains->links() }}
            </div>
        </div>
    </div>
</div>
