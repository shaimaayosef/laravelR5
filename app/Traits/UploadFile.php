<?php

namespace App\Traits;

trait UploadFile
{
    public function upload( $imageFile, $path){
        $imgExt = $imageFile-> getClientOriginalExtension();
        $file_name = time() . '.' . $imgExt;
        $imageFile->move($path, $file_name);
        return $file_name;
        }
}
