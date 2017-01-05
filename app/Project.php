<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model{
    protected $fillable = ['name','thumbnail'];
    public function user(){
        //$projects -> user()
        return $this -> belongsTo('App\User');
    }

    public function tasks(){
        //$projects -> user()
        return $this -> hasMany('App\Task');
    }
}
