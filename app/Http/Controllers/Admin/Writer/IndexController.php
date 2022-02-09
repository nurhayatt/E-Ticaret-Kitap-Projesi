<?php

namespace App\Http\Controllers\Admin\Writer;

use App\Http\Controllers\Controller;
use App\Model\Writers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Writers::paginate(10);
        return view('Admin.Writer.index',['data'=> $data]);
        
    }

    public function create()
    {
        return view('Admin.Writer.create');
    }

    public function store(Request $request)
    {
        
    }
}