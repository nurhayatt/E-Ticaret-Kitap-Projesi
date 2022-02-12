<?php

namespace App\Http\Controllers\Front\Book;

use App\Http\Controllers\Controller;
use App\Model\Books;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index($selflink)
   {
       $c = Books::where('selflink','=', $selflink)->count();
       if($c!=0)
       {
           $w= Books::where('selflink', '=', $selflink)->get();
       return view('Front.Book.index',['data'=>$w]);
        }
        else{
            return redirect('/');
        }
   }
}