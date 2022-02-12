<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Model\Order;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $data = Order::paginate(10);
        return view('Admin.Order.index', ['data'=>$data]);
    }

    public function detail($id)
    {
        //$c = Order::where('id', $id);
    }
}