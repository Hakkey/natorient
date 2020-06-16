<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

    public $primaryKey = 'id';

    protected $fillable = [
        'name', 'ic', 'phone', 'address', 'email', 'password', 'leave',
    ];
}
