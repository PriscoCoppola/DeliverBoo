<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'surname',
        'address',
        'zip_code',
        'city',
        'email',
        'phone',
    ];

    public function order(){
        return $this->belongsTo('App\Models\Order');
    }
}
