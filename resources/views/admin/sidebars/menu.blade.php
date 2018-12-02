<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="หน้าแรก">
    <a class="nav-link" href="{{URL::to ('admin/home')}}">
      <i class="fa fa-fw fa-dashboard"></i>
      <span class="nav-link-text">หน้าแรก</span>
    </a>
  </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
    <a class="nav-link" href="{{URL::to ('admin/charts')}} ">
      <i class="fa fa-fw fa-area-chart"></i>
      <span class="nav-link-text">Charts</span>
    </a>
  </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
    <a class="nav-link" href="{{URL::to ('admin/components')}}" data-parent="#exampleAccordion">
      <i class="fa fa-fw fa-wrench"></i>
      <span class="nav-link-text">Components</span>
    </a>
    
  </li>
</ul>


<ul class="navbar-nav sidenav-toggler">
  <li class="nav-item">
    <a class="nav-link text-center" id="sidenavToggler">
      <i class="fa fa-fw fa-angle-left"></i>
    </a>
  </li>
</ul>
