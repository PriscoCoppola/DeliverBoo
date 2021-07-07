<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = [
        'name',
        'slug',
        'price'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function ingredients(){
        return $this->belongsToMany('App\Models\Ingredient');
    }
}
