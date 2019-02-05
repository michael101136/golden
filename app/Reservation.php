<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    
    protected $table = 'reservations';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'skype',
        'country',
        'fecha',
        'travel_type',
        'numberPersonas',
        'room_type',
        'guide_service',
        'message',
     	'tour_id',
    ];
}

