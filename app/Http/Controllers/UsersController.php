<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
   public function index(){
    return view('welcome');
   }
    public function getAuth(){
        if (Auth::check()) {
        return redirect('/welcome')->with('message', 'User is Logged in');

        }else{
        return redirect('/login')->with('message', 'Please Login');
        }
    }

     /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/welcome');
        }
    }
    public function logout(Request $request)
    {

        Auth::logout();
        return redirect('/login')->with('message', 'Please Login');

    }

    public function register(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'username' => 'required|min:3',
                'email' => 'required|min:6',
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password',
            ]
        );


        if ($validator->fails()) {
            return redirect('/register')->with('message', 'Please fill all fields');
        }


        $input = array(
            'name' => $request->username,
            'email'=> $request->email,
            'password' => bcrypt($request->password),
        );

        $user = User::where('email', $request->email)->first();

       if($user){
        return redirect('/login')->with('message', 'user already exists');

       }

        $user = User::create($input);
        return redirect('/login')->with('message', 'User Register Please Login');


    }
    //
}
