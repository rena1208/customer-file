<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseData extends Model
{
    //
    public function purchasedItems()
    {
        return $this->hasMany('App\PurchasedItem');
    }

    // protected $dates = [
    //     'date',
    // ];
    public function customer()
    {
        return $this->belongsTo('App\Customer','customer_id');
    }
}
