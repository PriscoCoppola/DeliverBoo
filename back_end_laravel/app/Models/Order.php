<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'amount'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function payment(){
        return $this->hasOne('App\Models\Payment');
    }
}
