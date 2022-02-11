<?php

namespace App\Http\Controllers\Admin\Book;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Model\Books;
use App\Model\Category;
use App\Model\Publisher;
use App\Model\Writers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Books::paginate(10);
        return view('Admin.Book.index',['data' => $data]);
    }
    public function create()
    {
        $writers = Writers::all();
        $publishers = Publisher::all();
        $category = Category::all();
        return view('Admin.Book.create',['writers' => $writers, 'publishers' => $publishers, 'category' => $category]);
    }

    public function store(Request $request)
    {
       
        $all = $request->except('_token');
        $all['selflink']= mHelper::permalink($all['name']);
        //image eklenecek 
       
        $insert = Books::create($all);
 
        if($insert)
        {
            return redirect()->route('admin.book.index')->with('status', 'Kitap Başarılı Bir Şekilde Eklendi.');
        }
        else
        {
            return redirect()->back()->with('status', 'Kitap Eklenemedi.');
        }
        
    } 

    public function edit($id)
    {
      
        $c = Books::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Books::where('id', '=', $id)->get();
            $writers = Writers::all();
            $publishers = Publisher::all();
            $category = Category::all();
            return view('Admin.Book.edit', ['data' => $data, 'writers' => $writers, 'publishers' => $publishers, 'category' => $category]);
        } else {
            return redirect('/');
        }
    }


    public function update(Request $request)
    {
        $id= $request->route('id');
        $c = Books::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Books::where('id', '=', $id)->get();
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            //images/images
            $update = Books::where('id', '=', $id)->update($all);
            if($update) {
                return redirect()->route('admin.book.index')->with('status', 'Kitap Başarı ile Düzenlendi');
            }
            else
            {
                return redirect()->route('admin.book.index')->with('status', 'Kitap Düzenlenemedi');
            }
        } else {
            return redirect('/');
        }
    }
    public function delete($id)
    {

        $c = Books::where('id', '=', $id)->count();
        if ($c != 0) {
            $delete = Books::where('id', '=', $id)->delete();
            return redirect()->back();
        } else {
            return redirect('/');
        }
    }
   
}