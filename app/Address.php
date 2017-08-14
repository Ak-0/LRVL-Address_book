<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use Notifiable;
    protected $fillable = [
        'name', 'addrs1','zip','city','tel'
    ];

}
