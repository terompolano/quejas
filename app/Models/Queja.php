<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'celphone',
        'email',
        'names',
        'charge',
        'dependences',
        'note',
        'narration',
        'firma',
    ];
}
