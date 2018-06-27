<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Intervention\Image\ImageManagerStatic as Image;
class SigninController extends Controller
{
    // index
    public function index()
    {
        return view('fronts.sign-in');
    }
    
    public function login(Request $r) {
        $email = $r->email;
        $pass = $r->pass;
        $membership = DB::table('memberships')->where('active',1)->where('email', $email)->first();
      
        if($membership!=null)
        {  
            if(password_verify($pass, $membership->password))
            {
              
                if($r->session()->get('membership')!=NULL)
                {
                    $r->session()->forget('membership');
                    $r->session()->flush();
                }
                // save user to session
                $r->session()->put('membership', $membership);
              
                return redirect('/');
            }
            else{
                $r->session()->flash('sms1', "Invalid email or password. Try again!");
                return redirect('/sign-in')->withInput();
            }
        }
        else{
            $r->session()->flash('sms1', "Invalid email or password!");
            return redirect('/sign-in')->withInput();
        }
    }

    // logout function
    public function logout(Request $request)
    {
        $request->session()->forget('membership');
        $request->session()->flush();
        return redirect('/');
    }

    public function profile(Request $r) {
        $data['profile'] = DB::table('memberships')->where('id',$r->session()->get('membership')->id)->first();
        return view('fronts.profile', $data);
    }
     
    public function upload(Request $r)
    {
        if($r->photo) {
           
            $file = $r->file('photo');
            $file_name = $file->getClientOriginalName();
            $ss = substr($file_name, strripos($file_name, '.'), strlen($file_name));
            $file_name = 'profile' .$r->id . $ss;
          
            $destinationPath = 'uploads/profiles/'; // usually in public folder
         
            // upload 250
            $n_destinationPath = 'uploads/profiles/small/';
            $new_img = Image::make($file->getRealPath())->resize(100, null, function ($con) {
                $con->aspectRatio();
            });
           

            $nn_destinationPath = 'uploads/profiles/smaller/';
            $new_img1 = Image::make($file->getRealPath())->resize(25, null, function ($con) {
                $con->aspectRatio();
            });
            $new_img1->save($nn_destinationPath . $file_name, 80);
            $new_img->save($n_destinationPath . $file_name, 80);
            $file->move($destinationPath, $file_name);
            $data['photo'] = $file_name;
            $i = DB::table('memberships')->where('id', $r->id)->update($data);
            $sms = "All changes have been saved successfully.";
            $r->session()->flash('sms', $sms);
            return redirect('/profile');
        } 
            else
            {   
                $sms1 = "Fail to to save changes, please check again!";
                $r->session()->flash('sms1', $sms1);
                return redirect('/profile');
            }
        }
  
}
