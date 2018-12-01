
    <!-- <a href="{{ url('/home') }}">Home</a> -->

<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
    <a class="nav-link" href="{{URL::to ('home')}}">
      <i class="fa fa-fw fa-dashboard"></i>
      <span class="nav-link-text">หน้าแรก</span>
    </a>
  </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
    <a class="nav-link" href="chart">
      <i class="fa fa-fw fa-area-chart"></i>
      <span class="nav-link-text">charts</span>
    </a>
  </li>

@if (Route::has('admin/home'))
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
    <a class="nav-link "  href="#collapseComponents" >
      <i class="fa fa-fw fa-wrench"></i>
      <span class="nav-link-text">Components</span>
    </a>
   
  </li>
@endif

</ul>


<ul class="navbar-nav sidenav-toggler">
  <li class="nav-item">
    <a class="nav-link text-center" id="sidenavToggler">
      <i class="fa fa-fw fa-angle-left"></i>
    </a>
  </li>
</ul>
