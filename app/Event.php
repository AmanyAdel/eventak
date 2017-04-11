<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function user() //view
    {
        return $this->belongsToMany('App\User', 'event_user','user_id', 'event_id');
    }

    // public function user() //create
    // {
    //     return $this->belongsTo('App\User');
    // }


      public function location() //location
    {
        return $this->belongsTo('App\Location');
    }

    public function userNotify() //notify
    {
        return $this->belongsToMany('App\User','notify_user', 'user_id', 'event_id');
    }

    public function category() //category
    {
        return $this->belongsTo('App\Category');
    } 

}
