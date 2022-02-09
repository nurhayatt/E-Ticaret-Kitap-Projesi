<?php

namespace App\Http\Controllers\Admin\Publisher;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Model\Publisher;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Publisher::paginate(10);
        return view('Admin.Publisher.index', ['data'=> $data]);
    }
    public function create()
    {
        return view('Admin.Publisher.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink']= mHelper::permalink($all['name']);
   
        $insert = Publisher::create($all);
        if($insert)
        {
            return redirect()->back()->with('status', 'YayınEvi ile Başarı ile Eklendi');
        }
        else
        {
            return redirect()->back()->with('status', 'YayınEvi eklenemedi');
        }
    
    }

    public function edit($id)
    {
       
        $c=Publisher::where('id', '=', $id)->count();
        if($c!=0){
            $data = Publisher::where('id', '=', $id)->get();
            return view('Admin.Publisher.edit', ['data' => $data]);
        }
        else
        {
            return redirect('/');
        }
      
    }
    public function update(Request $request)
    {
      
        $id = $request->route('id');
        $c = Publisher::where('id', '=', $id)->count();
        if ($c != 0) {
           
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
           
           $update = Publisher::where('id', '=', $id)->update($all);
            
           if($update) {
               
               return redirect()->back()->with('status', 'Yayın Evi Düzenlendi');
           }
           else
           {
              
               return redirect()->back()->with('status','Yayın Evi Düzenlenemedi');
               
           }
          
        } 
        else {
            return redirect('/');
        }
       
    }
    public function delete($id)
    {

        $c = Publisher::where('id', '=', $id)->count();
        if ($c != 0) 
        {
            $delete = Publisher::where('id', '=', $id)->delete();
            return redirect()->back();
        }
        
        else 
        {
            return redirect('/');
        }
       
    }
}