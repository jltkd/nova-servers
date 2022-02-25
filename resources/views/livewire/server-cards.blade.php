<div>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        @foreach($servers as $server)
            <livewire:server-card :key="$server->id" :server="$server" />
        @endforeach
    </dl>
</div>
