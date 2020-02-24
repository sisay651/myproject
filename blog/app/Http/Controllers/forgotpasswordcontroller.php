<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Mail;

class forgotpasswordcontroller extends Controller
{
    //
    use SendsPasswordResetEmails;
}
