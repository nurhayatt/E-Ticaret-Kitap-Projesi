<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $guarded = [];
    static function getField($id, $field)
    {
        $c = Publisher::where('id', '=', $id)->count();
        if ($c != 0) {
            $w = Publisher::where('id', '=', $id)->get();
            return $w[0][$field];
        } else {
            return "Silinmiş YayınEvi";
        }
    }
}