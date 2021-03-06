<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'posts';  

    public function user() {
        return $this-> belongsTo('App/Models/User');
    }

    public function likes() {
        return $this-> belongsToMany('App/Models/User');
    }
    
}