<?php
namespace App\Helper;
use Illuminate\Support\Facades\Session;

class basketHelper
{
   // static function add($id,$price, $image, $name){
         static function add($id,$price, $name){
        $basket = Session::get('basket');
        $array=[
            'id' => $id,
            'name' => $name,
           // 'image' => $image,
            'price' => $price,
        ];
        Session::put('basket'.rand(1,9000),$array);
    }

   static function alList()
   {
       $x = Session::get('basket');
       return $x;
   }

    
    static function totalPrice()
    {
        $data = self::alList();
        return collect($data)->sum('price');
    }

    static function countData()
    {
        return count(Session::get('basket'));
    }

    static function remove($id){
       
        Session::forget('basket'.$id);
    }
}