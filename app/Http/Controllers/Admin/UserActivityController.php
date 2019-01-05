<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\userActivity;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Models\User as UserMod;
use App\Models\Water as WaterMod ;
use App\Models\userActivity as userActivityMod ;

use App\Models\Pump ;
use App\Models\User ;

use App\Models\Status as StatusMod;
use App\Models\process_status ;

class UserActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $water = WaterMod::orderBy('id','desc')->first();

        $process_status_all = process_status ::orderBy('id','desc')->paginate(10);
        $status = StatusMod::orderBy('id','desc')->first();
        $users_all = UserMod::all();
        $userActivity_all = userActivityMod::all();

        //dd($users_all); exit;
        // $users_by_query = User::where('username','min')->get();
        // $data = compact('users_all','users_by_query');
        // return view('users.index',$data);

            return view('admin.activity',compact('users_all','water','status','process_status_all','userActivity_all') );

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userActivity  $userActivity
     * @return \Illuminate\Http\Response
     */
    public function show(userActivity $userActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userActivity  $userActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(userActivity $userActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userActivity  $userActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userActivity $userActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userActivity  $userActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(userActivity $userActivity)
    {
        //
    }
}
