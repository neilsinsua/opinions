<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute()
    {
        return "https://i.pravatar.cc/60?u=" . $this->email;
    }

    public function timeLine()
        //returns all your tweets
    {
        //ids of all following
        $following = $this->follows()->pluck('id');
        //users own id
        $following->push($this->id);
        //find tweets where user_id matches ids
        return Tweet::whereIn('user_id', $following)->latest()->get();

        //order by date descending
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function addTag()
    {

    }
}

testing
