<?php

namespace App\Models;

use App\Models\BaseModel;

class Role extends BaseModel
{
    protected $tableName = 'role';
    protected $primaryKey = 'idRole';

    protected $fillable = [
        'name',
        'description',
    ];

    public function rUsers()
    {
        return $this->belongsToMany(User::class);
    }
}
