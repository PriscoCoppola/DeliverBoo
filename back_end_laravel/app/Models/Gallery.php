<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Gallery extends Model

{
    use HasFactory;

    protected $table = 'galleries';

    public function users(){
        return $this->hasMany('App\Models\User');
    }

}
