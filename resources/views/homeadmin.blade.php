<?php
$url = url('');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ระบบช่วยสนับสนุนเครื่องสูบน้ำสวนวัฒนาเพาะพันธุ์มะพร้าว</title>

    {!! Charts::assets() !!}

    {{--stylesheet files--}}
    <!-- Bootstrap core CSS-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


    @yield('css')
    {{--javascript files--}}
    
  
    @yield('js')

    </head>



    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">สวนวัฒนาเพาะพันธุ์มะพร้าว</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- #################### Sidebars/Menu Start #################### -->
        @include('admin.sidebars.menu')
        <!-- #################### Sidebars/Menu End #################### -->

        <!-- #################### headers/top Start #################### -->
        @include('admin.headers.top')
        <!-- #################### headers/top End #################### -->
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- #################### Main Start #################### -->
      @yield('content')
     <!--  <h1>CONTENT BLOCK</h1> -->
      <!-- #################### Main Start #################### -->

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
 
    <!-- #################### headers/top Start #################### -->
    @include('admin.footers.footer')
    <!-- #################### headers/top Start #################### -->

    <!-- Logout Modal-->

    <!-- #################### generals/modal Start #################### -->
    @include('admin.partials.modal')
    <!-- #################### generals/modal Start #################### -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>

  </div>
</body>

</html>
