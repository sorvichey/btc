<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SignupController extends Controller
{
    // index
    public function index()
    {
        return view('fronts.sign-up');
    }
    public function save(Request $r)
    {
        // check the email if it is valid or not
        if (!filter_var($r->email, FILTER_VALIDATE_EMAIL)) {
            $r->session()->flash('sms1', "Your email is invalid. Check it again!");
            return redirect('/sign-up')->withInput();
        }
        $count_email = DB::table('memberships')
            ->where('email', $r->email)
            ->count();
        $pass_leg = strlen($r->password);
        if($count_email === 0 && $pass_leg >= 6) {
            $data = array(
                'first_name' => $r->first_name,
                'last_name'=> $r->last_name,
                'gender' => $r->gender,
                'email' => $r->email,
                'password' => password_hash($r->password, PASSWORD_BCRYPT)
            );
            $sms = "The sign up has been created successfully.";
            $sms1 = "Fail to create the sign up, please check again!";
            $i = DB::table('memberships')->insert($data);
            if ($i)
            {
                $r->session()->flash('sms', $sms);
                return redirect('/sign-up');
            }
            else
            {
                $r->session()->flash('sms1', $sms1);
                return redirect('/sign-up')->withInput();
            }
        } else {
            if ($email > 0) {
                $sms1 = "Your email already exist. Please use a different one!";
            } 
            if ($pass_leg < 6) {
                $sms1 = "Your password should be equal or max than 6 characters";
            } 
            $r->session()->flash('sms1', $sms1);
            return redirect('/sign-up')->withInput();
        }
    } 
}
