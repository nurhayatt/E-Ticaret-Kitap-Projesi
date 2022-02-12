<?php

namespace App\Http\Controllers\Front\Basket;

use App\Helper\baskeetHelper;
use App\Helper\basketHelper;
use App\Http\Controllers\Controller;
use App\Model\Books;
use App\Model\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        return view('Front.Basket.index');
    }
    public function add($id)
    {
        $c = Books::where('id', '=', $id)->count();
        if ($c != 0) {
            $w = Books::where('id', '=', $id)->get();
           // basketHelper::add($id, $w[0]['price'], asset([0]['image']), $w[0]['name']);
            basketHelper::add($id, $w[0]['price'], $w[0]['name']);
            return redirect()->back()->with('status', 'Sepete Eklediniz.');
        } else {
            return redirect()->route('index');
        }
    }
    public function remove($id)
    {
        basketHelper::remove($id);
        return redirect()->back();
    }
    public function complete()
    {
        if (basketHelper::countData() != 0) {
            return view('Front.Basket.complete');
        } else {
            return redirect('/');
        }
    }
    public function completeStore(Request $request)
    {
        $request->validate(['adress' => 'required', 'phone' => 'required']);
        $adress = $request->input('adress');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $json = json_encode(basketHelper::allist());
        $array =
            [
                'user_id' => Auth::id(),
                'adress' => $adress,
                'phone' => $phone,
                'message' => $message,
                'json' => $json,
            ];

            $insert = Order::create($array);
            if($insert){
                Session::forget('basket');
                return redirect()->back()->with('status','Siparişiniz Alındı');
            }
            else
            {
                return redirect()->back()->with('status','Sipariş Alınamadı');
            }
    }
}