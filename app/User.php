<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function timeLine()
        //returns all your tweets
    {
        return Tweet::where('user_id', $this->id)->latest()->get();
    }

    public function getAvatarAttribute()
    {
        return "https://i.pravatar.cc/40?u=" . $this->email;
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function follows()
        //if table doesn't follow convention
        // ? explicitly declare table name and foreign keys
    {
        return $this
            ->belongsToMany(User::class,
                'follows',
                'user_id',
                'follows_user_id');
    }
}

testing
