<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05-Mar-19
 * Time: 7:55 PM
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function login(){
        return view('Frontend.register');
    }
}