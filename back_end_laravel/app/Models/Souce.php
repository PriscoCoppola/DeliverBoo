<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souce extends Model
{
    use HasFactory;

    protected $table = 'souces';

    protected $fillable = [
        'name',
        'slug',
        'price'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
