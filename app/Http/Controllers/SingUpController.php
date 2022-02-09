<?php

namespace App\Http\Controllers;

use App\Model\RoleModel;
use App\Model\RoleUser;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Events\CreatedUser;

class SingUpController extends Controller
{
    public function index()
    {

        $roles = RoleModel::where('id', '=', '2')
            ->get();
        $password = Str::random(6);
        return view('pages.singup')->with([
            'roles' => $roles, 'password' => $password
        ]);
    }
    public function singup(Request $request)
    {
        $user =  new User();
        $user->name = $request->name;
        $user->company = $request->company;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password); //gelen veriyi şifreleyip passworde kaydediyor
        $user->role_id = 2; // gelen rolü buraya id olarak yazıyor kullanıcı rolü id yerine giriyordu dimi ?  evet    //user tabşosunda user_id kolonuna rolü 
        
        $user->save();

        $userRoles = new RoleUser();
        $userRoles->role_id = 2;
        $userRoles->user_id = $user->id;
        $userRoles->save();


       if ($user) {
            event(new CreatedUser($user));
            return redirect()->route('login')->with('success', 'İşlem Başarılı');
        }
        return back()->with('error', 'İşlem Başarısız');
    }
   
}