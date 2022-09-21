<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'id',
        'gender_id',
        'user_id',
        'name',
        'name_ruby',
        'birthday',
        'phone_number',
        'address',
        'repeater'

    ];

    public function customerGender()
    {
       return $this->belongsTo('App\Gender', 'gender_id');
    }

    public function purchasedDate()
    {
        return $this->hasMany('App\PurchaseData','customer_id');
    }
}
