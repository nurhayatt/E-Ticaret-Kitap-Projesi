<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guarded = [];

    static function getField($id, $field)
  {
    $c = User::where('id','=', $id)->count();
    if($c!=0)
    {
        $w = User::where('id', '=', $id)->get();
        return $w[0][$field];
    }
    else
    {
        return "Silinmiş Kullanıcı";
    }
  }

}