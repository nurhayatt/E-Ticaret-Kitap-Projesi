<?php

namespace App\Http\Controllers\Front\Category;

use App\Http\Controllers\Controller;
use App\Model\Books;
use App\Model\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index($selflink)
   {
       $c = Category::where('selflink','=',$selflink)->count();
       if($c!=0)
       {
            $w = Category::where('selflink', '=', $selflink)->get();
              $data = Books::where('category_id','=', $w[0]['id'])->paginate(10);
            return view('Front.Category.index',['info'=> $w,'data'=>$data]);
    
        }
       else
       {
           return redirect('/');
       }
   }
}