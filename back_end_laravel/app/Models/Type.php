<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    protected $fillable = [
        'type',
        'slug',
    ];
}