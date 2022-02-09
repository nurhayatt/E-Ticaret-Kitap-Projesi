<?php
namespace App\Helper;

use Facade\FlareClient\Stacktrace\File as StacktraceFile;
use File;
use Illuminate\Http\File as HttpFile;
use Illuminate\Support\Facades\File as FacadesFile;
use Intervention\Image\File as ImageFile;

class imageUploader
{
    static function singleUpload($name, $directory,$filename){
        $rand = $name;
        $dir = 'image/'.$directory.'/'.$rand;
        $dirLarge = $dir.'large';
        if(!empty($file))
        {
            if (!File::exits($dir)) {
                File::makeDirectory($dir, 0755, true);
            }
           
            if(!File::exits($dirLarge))
            {
               File::makeDirectory($dirLarge,0755,true); 
            }
        }
        else
        {
            return "";
        }
    }
}