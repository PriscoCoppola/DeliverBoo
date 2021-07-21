<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurants';

    protected $fillable = [
        'name',
        'address',
        'city',
        'zip_code',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function types(){
        return $this->belongsToMany(Type::class);
    }

    public function foods(){
        return $this->hasMany(Food::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
