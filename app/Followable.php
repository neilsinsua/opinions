<?php


namespace App;


trait Followable
{

    public function isFollowing(User $user)
        //OUTPUT: checks if you follow a user
    {
        return $this->
        follows()->
        where('follows_user_id', $user->id)->
        exists();
    }

    public function follows()
        //OUTPUT: list who you follow
        //if table doesn't follow convention
        // ? explicitly declare table name and foreign keys
    {
        return $this
            ->belongsToMany(User::class,
                'follows',
                'user_id',
                'follows_user_id');
    }

    public function follow(User $user)
        //OUTPUT: follows a user
    {
        return $this->follows()->save($user);
    }

    public function unFollow(User $user)
        //OUTPUT: unfollow a user
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        if($this->isFollowing($user)) {
            return $this->unFollow($user);
        }
        return $this->follow($user);
    }
}
