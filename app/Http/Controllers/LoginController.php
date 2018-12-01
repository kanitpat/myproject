<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User as UserMod;
use App\Models\process_status as process_statusMod;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        //dd($request); exit;
        $credentials = $request->only('email', 'password');
       //dd($credentials); exit;
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // Get the currently authenticated user...
            //$user = Auth::user();
    
        
            return redirect('home');

        } else {
            return redirect('login')
                        ->with('error', 'Invalid User Or Password.');
        }
    }

    public function logout()
    {
       Auth::logout();
       return redirect('login');
    }


}
