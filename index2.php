<?php

class FileUpload  {

    protected $path;

    public  function save($callback){

        $this->path = 'temp/lara';

        $callback($this->path);
    }
}

class Profile{

    public function updateProfile()
    {
        $f = new FileUpload();

        $f->save(function ($path){
            echo 'El fitche esta ben guardat a'. $path;
        });
    }
}

$profile = new Profile();
$profile->updateProfile();