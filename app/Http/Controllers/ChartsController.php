<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Water as WaterMod ;
use Charts;
use DB;
class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $water = WaterMod::where(DB::raw("(DATE_FORMAT(date,'%Y'))"),date('Y'))->get();

        // $chart = Charts::database($water, 'line', 'highcharts')
		// 	      ->title("กราฟแสดงระดับน้ำในสวน")
		// 	      ->elementLabel("ระดับน้ำในสวน(เมตร)")
		// 	      ->dimensions(1000, 500)
		// 	      ->responsive(true)
		// 	      ->groupByMonth(date('Y'), true);

        $line_chart = Charts::create('line', 'highcharts')
                  ->title('กราฟแสดงระดับน้ำในสวน')
                  ->elementLabel('ระดับน้ำในสวน(เมตร)')
                  ->labels(['2018-11-01', '2018-11-02', '2018-11-03', '2018-11-04', '2018-11-05', '2018-11-06'])
                  ->values([1.5,1.9,1.7, 1.5,1.8,2.0])
                  ->dimensions(1000,500)
                  ->responsive(true);

         

        //  $chart = Charts::database(WaterMod::all(), 'area', 'google')
        //  ->elementLabel("ระดับน้ำในสวน(เมตร)")
        //  ->GroupByMouth();
        //      return view('users.charts',compact('chart'));
              
        return view('users.charts',compact('line_chart'));

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
