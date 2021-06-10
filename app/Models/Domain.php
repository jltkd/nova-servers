<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = [
        'server_id', 'name', 'domain', 'registrar', 'manages', 'expires', 'notes'
    ];

    protected $casts = [
        'expires' => 'date'
    ];

    public function server()
    {
        return $this->belongsTo(Server::class);
    }
}
