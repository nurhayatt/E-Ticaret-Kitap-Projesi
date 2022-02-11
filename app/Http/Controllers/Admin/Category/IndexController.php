<?php

namespace App\Http\Controllers\Admin\Category;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Category::paginate(10);
        return view('Admin.Category.index', ['data' => $data]);
    }
    public function create()
    {
        return view('Admin.Category.create');
    }
    public function store(Request $request)
    {
       
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);

        $insert = Category::create($all);
       
        if ($insert) {
            return redirect()->back()->with('status', 'Kategori ile Başarı ile Eklendi');
        } else {
            return redirect()->back()->with('status', 'Kategori eklenemedi');
        }
    }

    public function edit($id)
    {

        $c = Category::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Category::where('id', '=', $id)->get();
            return view('Admin.Category.edit', ['data' => $data]);
        } else {
            return redirect('/');
        }
    }
    public function update(Request $request)
    {

        $id = $request->route('id');
        $c = Category::where('id', '=', $id)->count();
        if ($c != 0) {

            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);

            $update = Category::where('id', '=', $id)->update($all);

            if ($update) {

                return redirect()->back()->with('status', 'Kategori Düzenlendi');
            } else {

                return redirect()->back()->with('status', 'Kategori Düzenlenemedi');
            }
        } else {
            return redirect('/');
        }
    }
    public function delete($id)
    {

        $c = Category::where('id', '=', $id)->count();
        if ($c != 0) {
            $delete = Category::where('id', '=', $id)->delete();
            return redirect()->back();
        } else {
            return redirect('/');
        }
    }
}