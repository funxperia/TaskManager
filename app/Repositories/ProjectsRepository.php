<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2016/11/21
 * Time: 13:30
 */
namespace App\Repositories;
use App\Project;
use Image;

class ProjectsRepository{

    public function newProject($request){
        $request -> user() -> projects() -> create(['name' => $request->name, 'thumbnail' => $this -> thumbnail($request)]);
    }

    public function thumbnail($request){
        if($request -> hasFile('thumbnail')){
            $name = str_random(10).'.jpg';
            $path = public_path().'/thumbnails/'.$name;
            Image::make($request -> thumbnail) -> resize(261,98) -> save($path);

            return $name;
        }
    }


    public function updateProject($request, $id){
        $project = Project::findOrFail($id);
        $project -> name = $request -> name;
        if($request -> hasFile('thumbnail')){
            $project -> thumbnail = $this -> thumbnail($request);
        }
        $project -> save();
    }
}