<?php

namespace App\Http\Controllers;

use App\Models\User as UserMod;
use Illuminate\Http\Request;
use Auth;
use Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_all = UserMod::all();
        //dd($users_all); exit;
        // $users_by_query = User::where('username','min')->get();
        // $data = compact('users_all','users_by_query');
        // return view('users.index',$data);
    
            return view('home',compact('users_all') );

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             

        request()->validate([
          
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'Confirmpassword' => 'required|min:6|same:password',
            'name' => 'required|max:50',
            'lastName' => 'required|max:50',
          


        ], [  //change alet defult
            'name.required' => 'Name is required',
            'name.max' => 'Name should not be greater than 50 characters.',
            'password.min' => 'Password must be at least 6 characters.',
            'Confirmpassword.required' => 'confirm password should not macth password .',

        ]);

        $mod = new UserMod;
        $mod->email    = $request->email;
        $mod->password = bcrypt($request->password);
        $mod->name = $request->name;
        $mod->lastName = $request->lastName;  
        // $mod->is_admin = 'No';    
        $mod->save();

        return redirect('home')
                    ->with('success', 'User ['.$request->email.'] created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
