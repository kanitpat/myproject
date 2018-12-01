<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Water as WaterMod ;
use App\Models\Pump ;
use App\Models\User ;

use App\Models\Status as StatusMod;
use App\Models\process_status ;

use Charts;
use DB;
class HomeController extends Controller
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
              
        // dd($process_status_all); exit;

        // ::orderBy('idProcess','desc')->paginate(10);

        // $process_status_all = DB::table('process_statuses')
        //     ->join('waters', 'process_statuses.idWaters', '=', 'waters.idWaters')
        //     ->join('pumps', 'process_statuses.idPumps', '=', 'pumps.idPumps')
        //     ->join('statuses', 'process_statuses.idStatus', '=', 'statuses.idStatus')
        //     ->join('users', 'process_statuses.idUsers', '=', 'users.idUsers')

        //     ->select('process_statuses.*')
        //     ->get();


        $status = StatusMod::orderBy('id','desc')->first();
        $waterLevel = WaterMod::orderBy("waterLevel");
        $stringwaterLevel  =  (string )'CONCAT $waterLevel';

       
        // $chart = Charts::database((WaterMod:: all()),'gauge', 'canvas-gauges')
        // ->title('กราฟแสดงระดับน้ำในสวน')
        // ->elementLabel('ระดับน้ำในสวน(เมตร)')
        // ->groupByYear('stringwaterLevel')
        // ->responsive(true);

        return view('users.homecontent',compact('water','status','process_status_all'));

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
