<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateur;
use Auth;
use Hash;
use Session;
class LoginController extends Controller
{
    //
    public function login(Request $request){
        $username=$request['username'];
        $password=$request['password'];
        $findUser=Administrateur::where('email',$username)->first();
        // $password=Hash::make($password);
        // dd($password);
        $both=['email'=>$username,'password'=>$password];
       
        if(Auth::attempt($both)){
            return redirect('/Accueil');
        }else{
            return redirect()->back()->withErrors(['password'=>'Email ou mot de passe incorrect !']);
        }
    }
    public function logout(){
        //   Auth::logout();
          Session::flush();
          return redirect('/');
    }
}
