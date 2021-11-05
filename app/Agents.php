<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    protected $fillable = [
        'agent_id','name', 'zipcode'
    ];
}
