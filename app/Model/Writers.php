<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Writers extends Model
{
    protected $guarded=[];

    static function getField($id,$field){
        $c = Writers::where('id', '=', $id)->count();
    if($c!=0)
    {
        $w= Writers::where('id', '=', $id)->get();
        return $w[0][$field];
    }
    else
    {
        return "Silinmiş Yazar";
    }
    
    }

}