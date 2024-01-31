<?php

namespace App\Http\Controllers;
use App\Models\user;
use Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CostumAuthController extends Controller
{
// -----------------------------------------------------------------

    public function Login(Request $request ){

        // && (Hash::check($request->input('signin-password'))==$user->password);

        foreach(user::all() as $user){
            if( $request->input('signin-email') == $user->email ){

                if (Hash::check($request->input('signin-password'),$user->password)) {

                    $request->session()->put('name',$user->name);
                    $request->session()->put('email',$user->email);
                    $request->session()->put('id',$user->id);

                    return redirect('/');
                }
                return redirect('/signin-modal')->with('message','Login details are not valid!');
            }
           
       }
 
    }
// ---------------------------------------------------------------------

    
    public function Register(Request $request ){

        $request->validate([
         'register-name'=>'required',
         'register-email'=>'required',
         'register-password'=>'required',
         'register-confirm'=>'required'
        ]);

        user::create([
            'name'=>$request->input('register-name'),
            'email'=>$request->input('register-email'),
            'password'=>Hash::make($request->input('register-password')),
        ]);


        return redirect('/signin-modal');

    }


    public function LogOut() {
        if(Session::has('name')){
            Session::Pull('name');
            Session::Pull('email');
            return redirect('/signin-modal');
        }
    }
    
} 


