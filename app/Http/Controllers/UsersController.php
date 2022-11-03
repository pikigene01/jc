<?php

namespace App\Http\Controllers;

use App\Models\Adminstrations;
use App\Models\Adminstrator;
use App\Models\Consultant;
use App\Models\Consultation;
use App\Models\Customer;
use Aws\S3\S3Client;
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
        $consultation = Consultant::get();

        return view('consultant_landing_page',[
            'data' => $consultation]);

    }
    public function adminstrator(){
        $consultation = Consultation::get();

        return view('adminstrator_landing_page', [
            'data'=> $consultation
        ]);
    }
    public function customer(){
        $consultation = Consultation::get();

        return view('customer_landing_page', [
            'data'=> $consultation
        ]);
    }

     /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function edit_consultant_data(Request $request,$id)
    {
$cunsultation = Consultation::where('Appointment_id', $id)->update(
    array(
    'Email'=> $request->email,
    'DateTime'=>  $request->date,
    'Message'=> $request->message

    ));
  return redirect('/home')->with('message', 'Data updated Successfully!!!');

    }
    public function edit_consultant(Request $request,$id)
    {

        $consu_data = Consultation::where('Appointment_id', $id)->get();
        return view('edit_page',[
            'data'=> $consu_data,

        ]);

    }
    public function upload_testimonial(Request $request)
    {

       if ($request->hasFile('file')) {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();

         // Instantiate an Amazon S3 client.
         $s3Client = new S3Client([
            'version' => '2006-03-01',
            'use_path_style_endpoint' => true,
            'region'  => 'ca-central-1',
            'credentials' => [
                'secret'    => '1pH/XTNXzTBYXYDqEqLtwXBW/9y3NKsznvRLcX9L',
                'key' => 'AKIA6IILK3FZIJF3473G'
            ]
        ]);

         $bucket = 'juanonebucket';
        $file =  $image;
        // $file = 'download.php';
        $key = basename($file);

        // Upload a publicly accessible file. The file size and type are determined by the SDK.
        try {
            $result = $s3Client->putObject([
                'Bucket' => $bucket,
                'Key'    => $key,
                // 'Body'   => fopen($file, 'r'),
                'SourceFile'   => $file,
                'ACL'    => 'public-read', // make file 'public'
            ]);
            echo "File uploaded successfully. Image path is: ". $result->get('ObjectURL');
            $script = "<script text='text/javascript'>";
            $script .= "

            var link = document.createElement('a');
            link.setAttribute('href', '". $result->get('ObjectURL')."');
            link.download = true;
            link.innerHtml = 'Click this link to download file';
            link.click();

            ";
            $script .= '</script>';

            echo $script;
            dd('upload successfully');
        } catch (null) {
            echo "There was an error uploading the file.\n";
        }

    }

    }
    public function consultations(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                //no neeed to validate customer id and name since they are coming from auth session
                'message' => 'required|min:3',
                'email' => 'required|min:6',
                'date' => 'required|min:6',
                'selected_specialty'=> 'required',
            ]
        );


        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect('/consultation-landing-page')->with('message', $messages);
        }else{
        $consultation = new Consultation();

        $consultation->Email =$request->email;
        $consultation->DateTime =$request->date;
        // $consultation->Admin_id =Auth::id();
        // $consultation->Consultant_id =Auth::id();
        // $consultation->Customer_id =Auth::id();
        $consultation->Message =$request->message;
        $consultation->Time =$request->date;
        $consultation->save();
        $consultation_data = Consultation::get();
        return redirect('/customer-landing-page')->with(['data'=>$consultation_data]);

        }

    }
    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');
        $check_user_customer = Customer::where('Customer_email', $request->email)->get();
        $check_user_consultant= Consultation::where('Email', $request->email)->get();
        // $check_user_adminstrator = Adminstrations::where('Admin_email', $request->email)->get();

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
