<div>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        @foreach($servers as $server)
        <div x-data="" class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
            <dt class="text-sm font-medium text-gray-500 truncate">
                {{ $server->name }}
            </dt>
            @if($server->domains->count() >= 30)
            <dd class="mt-1 text-3xl font-semibold text-red-500">
                {{ $server->domains->count() }} <span class="text-sm text-gray-400">Domains</span>
            </dd>
            @else
                <dd class="mt-1 text-3xl font-semibold text-green-500">
                    {{ $server->domains->count() }} <span class="text-sm text-gray-400">Domains</span>
                </dd>
            @endif
        </div>
        @endforeach
    </dl>
</div>
