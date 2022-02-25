<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public $domainCount;

    public function show(Server $server)
    {
        $domainCount = Domain::where('server_id', $server->id)->count();
        return view('servers.show', [
            'server' => $server
        ], compact('domainCount'));
    }

}
