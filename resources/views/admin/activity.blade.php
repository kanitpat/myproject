@extends('homeadmin')
@section('css')

@endsection

@section('js')

@endsection


@section('content')


@include('admin.partials.flash-message')

<div class="card mb-3">
  <div class="card-header">ระดับน้ำในสวนตอนนี้</div>
  <div class="card-body">
    <form method="POST" action="{{URL::to('admin/config')}}">
            </div>

      <div class="card-body">
     
        <p class="card-text">
        @if($water )
        <center><h1>{{ $water->waterLevel }} เมตร</h1> </center>
        <p align = "right">วันที่ {{ $water->date }}</p>
        <p align = "right"> เวลา {{ $water->time }}</p>
       
        @endif</p>

    <div class="card border-dark">
          <div class="card-header">
            แก้ไขระดับน้ำในสวน
          </div>
          <div class="card-body text-dark">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">ค่าระยะห่างของเซนเซอร์</span>
                    </div>
                    <input type="text" class="form-control"   value="25 เซนติเมตร" > 
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">ระดับน้ำที่อยู่ในสวน</span>
                    </div>
                    <input type="text" class="form-control" value="1.8 เมตร" disabled> 
           

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Submit" class="btn btn-primary">&nbsp;
            <input type="reset" value="Reset" class="btn btn-danger">

                  </div>
                </div>
              </div>
          </div>

    <br />
     
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> ตารางการแก้ไข
    

          </div>

        <div class="card-body">
          <div class="table-responsive">
              <!--  id="dataTable" -->
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ค่าระยะเซนเซอร์ที่กำหนดไว้(เซนติเมตร)</th>
                  <th>วันที่</th>
                  <th>เวลา</th>
                </tr>
              </thead>
            
              <tfoot align="right">
              <tr>
                  <!-- <th colspan="6" style="justify-content: right;">Pagination Link</th> -->
                  <th colspan="6" style="justify-content: right;">{{ $process_status_all->links('vendor.pagination.bootstrap-4') }}</th>

              </tr>
              </tfoot>

             
              <tbody>
                    @foreach ($process_status_all as $process)
                    <tr>
                      <td>{{$process->water->waterLevel}}</td>
                      <td>{{$process->water->date}}</td>
                      <td>{{$process->water->time}}</td>
                    
                    </tr>
                    @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <!--<input type="hidden" name="_method" value="PUT">-->
     
    </form>
  </div>
</div>

@endsection