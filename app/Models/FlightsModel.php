<?php

namespace App\Models;

use App\Models\BaseModel;

class FlightsModel extends BaseModel
{
    protected $tableName = 'flights';
    protected $primaryKey = 'idFlight';

    protected $fillable = [
        'flightNumber',
        'airline',
        'typeDirection',
        'originDestination',
        'scheduledTime',
        'gate',
        'status'
    ];
}
