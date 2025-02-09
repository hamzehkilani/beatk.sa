<?php
namespace App\Traits;
trait ImagesTrait {
    public function handlerImage($path,$file,$defuletVal=null){
           $image = $file;
           $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path($path), $filename);
           if($defuletVal){
            unlink(public_path($defuletVal));
           }
           $imagepath = $path . $filename;
       return $imagepath;
    }
}
