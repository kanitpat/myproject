@extends('admin.homeadmin')
@section('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

@endsection


@section('content')

    

<div class="row">
  

  <div class="col-sm-6">
    <div class="card">
    <div class="card-header">
    <h5 class=" text-center">ระดับน้ำในสวนตอนนี้</h5>
            </div>

      <div class="card-body">
     
        <p class="card-text">
        @if($water )
        <center><h1>{{ $water->waterLevel }} เมตร</h1> </center>
        <p align = "right">วันที่ {{ $water->date }}</p>
        <p align = "right"> เวลา {{ $water->time }}</p>
       
        @endif</p>
      </div>
    </div>
  </div>
  <br/>

<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">เครื่องสูบน้ำ สถานะตอนนี้ : 
        @if($status->numstatus==0)
            ปิด
        @else
            เปิด
         @endif</h5>
        <input type="checkbox" checked data-toggle="toggle">
      </div>
    </div>
  </div>
  <br/>


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">คำทำนาย วันพรุ่งนี้</h5>
        <p class="card-text">อุณหภูมิ 33 องศา ปริมาณน้ำฝนในพื้นที่ 10% สถานะการณ์น้ำในสวน ปกติ</p>
      </div>
    </div>
  </div>
  </div>

<br/>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> ตารางการทำงานเครื่องสูบน้ำ 
          
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ดาวน์โหลด</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">.PDF</a>
            <a class="dropdown-item" href="#">.xlsx</a>
           
            </div>

          </div>

        <div class="card-body">
          <div class="table-responsive">
              <!--  id="dataTable" -->
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>คนเปิดเครื่องสูบน้ำ</th>
                  <th>ระดับน้ำในสวน</th>
                  <th>สถานที่เครื่องสูบน้ำ</th>
                  <th>สถานะเครื่องสูบน้ำ</th>
                  <th>วันที่</th>
                  <th>เวลา</th>
                </tr>
              </thead>
              <!--<tfoot>
                <tr>
                    <th>Full Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
            </tfoot>-->
              <tfoot align="right">
              <tr>
                  <!-- <th colspan="6" style="justify-content: right;">Pagination Link</th> -->
                  <th colspan="6" style="justify-content: right;">{{ $process_status_all->links('vendor.pagination.bootstrap-4') }}</th>

              </tr>
              </tfoot>

             
              <tbody>
                    @foreach ($process_status_all as $process)
                    <tr>
                      <td>{{$process->user->name}}    {{$process->user->lastname}}</td>
                      <td>{{$process->water->waterLevel}}</td>
                      <td>{{$process->pump->address}}</td>

                      <td>
                      @if($process->status->numstatus == 1)
                          <span class="badge badge-success">เปิด</span>
                      @else
                          <span class="badge badge-danger">ปิด</span>
                      @endif

                      
                    
                      
                      </td>
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
<br/>

@endsection