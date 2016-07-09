<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    public $table = "Devices";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type','model','manufacturer','mac','serial_number'
    ];
}
