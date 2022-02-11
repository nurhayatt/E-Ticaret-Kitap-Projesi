<?php

namespace App\Http\Controllers\Admin\Writer;

use App\Helper\mHelper;
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
        $all = $request->except('_token');
        $all['selflink'] = mHelper:: permalink($all['name']);
        //image ekleme kısmı yapılacak
        
        $insert = Writers::create($all);
        if($insert){
            return redirect()->route('admin.writer.index')->with('status', 'Yazar Eklendi');
        }
        else{
            return redirect()->back()->with('status', 'Yazar Eklenemedi');
        }
    
    }
    public function edit($id)
    {
        $c= Writers::where('id', '=', $id)->count();
        if($c!= 0)
        {
           $data=Writers::where('id', '=', $id)->get();
            return view('Admin.Writer.edit',['data'=>$data]);
        }
        else{
            return redirect('/');
        }
        
    }

    public function update(Request $request )
    {
        $id = $request->route('id');
        $c = Writers::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Writers::where('id', '=', $id)->get();
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
           //image update kısmı yapılacak
            
           $update = Writers::where('id', '=', $id)->update($all);
           if($update) {
               return redirect()->route('admin.writer.index')->with('status', 'Yazar Başarı ile Güncellendi');
           }
           else{
               return redirect()->route('admin.writer.index')->with('status', 'Yazar Düzenlenemedi.');
           }
        
           
        } else {
            return redirect('/');
        }
    }

    public function delete($id)
    {

        $c = Writers::where('id', '=', $id)->count();
        if ($c != 0) {
            $delete = Writers::where('id', '=', $id)->delete();
            return redirect()->back();
        } else {
            return redirect('/');
        }
    }
}