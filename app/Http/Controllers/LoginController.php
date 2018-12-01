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

        request()->validate([
          
            'email' => 'required|email|',
            'password' => 'required|',
           
          


        ], [  //change alet defult
            'name.required' => 'Name is required',
            'name.max' => 'Name should not be greater than 50 characters.',
            'password.min' => 'Password must be at least 6 characters.',

        ]);
     
            if(Auth::attempt([
                'email'=> $request->email, 
                'password'=> $request->password
            ]))

            {
                $user = UserMod::where('email',$request->email)->first();
                if($user->is_admin())
                {
                    return redirect('admin/home');

                }
                    return redirect('home');

            }
            redirect()->back();

    //     $credentials = $request->only('email', 'password');
    //    //dd($credentials); exit;
    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         // Get the currently authenticated user...
    //         //$user = Auth::user();   
          
    //             return redirect('home');
    
    //     } else {
    //         return redirect('login')
    //                     ->with('error', 'Invalid User Or Password.');
    //     }
    }

    public function logout()
    {
       Auth::logout();
       return redirect('login');
    }


}
