<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [
        'id',
        'gender'

    ];
    
    public function customer()
    {
       return $this->hasOne('App\Customer', 'gender_id');
    }
}
