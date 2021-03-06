<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model{
    protected $fillable = ['title','project_id','completed'];

    public function project(){
        //$projects -> tasks()
        //$task ->projects()
        return $this -> belongsTo('App\Project');
    }

    public function getProjectListAttribute(){
        return $this -> project -> id;
    }
}
