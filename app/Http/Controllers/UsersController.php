<?php

namespace App\Http\Controllers;

use App\Models\Adminstrator;
use App\Models\Consultant;
use App\Models\Consultation;
use App\Models\Customer;
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
        return redirect('/session')->with('message', 'User is Logged in');

        }else{
        return redirect('/login')->with('message', 'Please Login');
        }
    }

    public function consultant(){
        $consultation = Consultation::get();

        return view('consultant_landing_page',[
            'data' => $consultation]);
    }
    public function adminstrator(){
        return view('adminstrator_landing_page');
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
        $check_user_customer = Customer::where('Customer_email', $request->email)->get();
        $check_user_consultant= Consultant::where('Customer_email', $request->email)->get();
        $check_user_adminstrator = Adminstrator::where('Customer_email', $request->email)->get();


        if (Auth::attempt($credentials)) {
            // Authentication passed...

            if($check_user_customer->count() > 0){
                //user is cusomer

                return redirect('/registration')->with('message', '');

            }else if($check_user_consultant->count() > 0){
       //user is consultant
       return redirect('/consultant-landing-page')->with('message', '');


            }else{
                return redirect('/admistration-landing-page')->with('logged in as an admin', '');

            }

            // return redirect()->intended('/home');
        }else{
            return redirect('/login')->with('message', 'Credentials do not match');


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
            $messages = $validator->messages();
            return redirect('/register')->with('message', $messages);
        }


        $input = array(
            'Customer_Name' => $request->username,
            'Consultant_LastName' => $request->username,
            'Customer_email'=> $request->email,
            'Customer_password' => bcrypt($request->password),
        );



        $user = Customer::where('Customer_email', $request->email)->first();

       if($user){
        return redirect('/login')->with('message', 'user already exists');

       }

        $user = Customer::create($input);
        $input_2 = array(
            'name' => $request->username,
            'email'=> $request->email,
            'password' => bcrypt($request->password),
        );
        $user_2 = User::create($input_2);
        if($user_2 || $user){
            return redirect('/login')->with('message', 'User Register Please Login');

        }else{
         return redirect('/register')->with('message', 'User Register Please Login');

        }

    }
    //
}
