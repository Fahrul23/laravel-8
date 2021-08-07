<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    PUBLIC FUNCTION __invoke(Request $request,$identifier)
    {
        return view('profile',['username' => $identifier]);
    }
}
