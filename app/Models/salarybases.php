<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salarybases extends Model
{
    use HasFactory;
    protected $table='salarybases';

    public function employee(){
        return $this->hasOne('App\Models\salarybases');
    }
}
 