<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseData extends Model
{
    //
    public function purchaseditems()
    {
        return $this->hasMany('App\PurchasedItem');
    }

    protected $dates = [
        'date',
    ];
}
