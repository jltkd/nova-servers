<div>
    @forelse($domains as $domain)
        <tr class="{{ $loop->even ? 'bg-gray-50' : '' }}">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                <a class="flex content-center" href="{{ $domain->domain }}" target="_blank">
                    {{ $domain->name }} <x-external-link-icon/>
                </a>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                @if($domain->registrar)
                    {{ $domain->registrar }}
                @endif
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                @if($domain->expires)
                    {{ \Carbon\Carbon::parse($domain->expires)->format('m-d-Y')}}
                @endif
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                @if($domain->manages === 1)
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                  Us
                                </span>
                @else
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                  Client
                                </span>
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td class="px-12 py-12 whitespace-nowrap text-gray-900 font-bold text-2xl text-center" colspan="5">Domains Not Found</td>
        </tr>
    @endforelse
</div>
