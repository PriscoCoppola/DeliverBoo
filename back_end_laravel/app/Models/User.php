<?php

namespace App\Models;



use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'zip_code',
        'city',
        'vat'
    ];

    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function galleries(){
        return $this->belongsTo('App\Models\Gallery');
    }
    

    public function types(){
        return $this->belongsToMany('App\Models\Type');
    }


    public function foods(){
        return $this->hasMany('App\Models\Food');
    }

    public function drinks(){
        return $this->hasMany('App\Models\Drink');
    }

    public function souces(){
        return $this->hasMany('App\Models\Souce');
    }

    public function orders(){
        return $this->hasMany('App\Models\Order');
    }

}


