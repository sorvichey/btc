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
        $data = array(
            'fullname' => $r->fullname,
            'email' => $r->email,
            'password' => $r->password
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
    }
}
