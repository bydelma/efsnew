<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutualfund extends Model
{
     protected $fillable=[
        'customer_id',
        'category',
        'description',
        'acquired_value',
        'acquisition_date',
        'recent_value',
        'recent_date',

    ];
    
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
