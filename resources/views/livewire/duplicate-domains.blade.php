<div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6 mt-14">
    <h2 class="text-lg font-bold text-gray-900">Duplicate Domains</h2>
    <ul class="divide-y divide-gray-200">
        @foreach($duplicates as $duplicate)
            <li class="text-sm py-4 text-gray-500 hover:text-gray-900">
                <a href="http://{{ $duplicate->server->ip_address }}:2086" target="_blank">
                    {{ $duplicate->name }}<br />
                    {{ $duplicate->server->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
