
    <a href="{{ url('/home') }}">Home</a>
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

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
      <i class="fa fa-fw fa-wrench"></i>
      <span class="nav-link-text">Components</span>
    </a>
    <ul class="sidenav-second-level collapse" id="collapseComponents">
      <li>
        <a href="navbar.html">Navbar</a>
      </li>
      <li>
        <a href="cards.html">Cards</a>
      </li>
    </ul>
  </li>
</ul>


<ul class="navbar-nav sidenav-toggler">
  <li class="nav-item">
    <a class="nav-link text-center" id="sidenavToggler">
      <i class="fa fa-fw fa-angle-left"></i>
    </a>
  </li>
</ul>
