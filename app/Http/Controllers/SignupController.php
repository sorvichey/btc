<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SignupController extends Controller
{
    // index
    public function index()
    {
        return view('fronts.sign-up');
    }
}
