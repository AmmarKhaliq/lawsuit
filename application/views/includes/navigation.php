<div class="wrapper">
  <!-- Sidebar  -->
  <nav id="sidebar" class="shadow bg-white rounded">
    <div class="sidebar-header text-center bg-white text-dark">
      <h2>Law Suit</h2>
      <!-- <strong>LS</strong> -->
    </div>

    <ul class="list-unstyled components main-ul-ls">

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'caseshome'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Home.png" class="img-fluid icon-size" alt="">
          <span class="ml-5 text-sidenav-hide"> Cases</span>
        </a>
      </li>


      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'schedule'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Schedule.png" class="img-fluid icon-size"
            alt="">
          <span class="ml-5 text-sidenav-hide"> Schedule</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'mapp'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Map.png" class="img-fluid icon-size" alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Map</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'todos'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/To-dos.png" class="img-fluid icon-size" alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> To-dos</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'messages'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Messages.png" class="img-fluid icon-size"
            alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Messages</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'addressbook'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Address-Book.png" class="img-fluid icon-size"
            alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Address Book</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'forms'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Forms.png" class="img-fluid icon-size" alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Forms</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'library'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Library.png" class="img-fluid icon-size" alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Library</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'finance'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Finance.png" class="img-fluid icon-size" alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Finance</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'courts'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Courts.png" class="img-fluid icon-size" alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Courts</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'staff'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Staff.png" class="img-fluid icon-size" alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Staff</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'preferences'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Preference.png" class="img-fluid icon-size"
            alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Preffernces</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'stopwatch'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Stop-Watch.png" class="img-fluid icon-size"
            alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Stop Watch</span>
        </a>

      </li>

      <li class="d-flex">

        <a class="nav-link" href="<?php echo base_url() . 'support'; ?>">
          <img src="<?php echo base_url() . 'assets/'; ?>images/sidebar/Support.png" class="img-fluid icon-size" alt="">
          <span class="ml-5 text-sidenav-hide text-dark"> Support</span>
        </a>

      </li>

    </ul>

  </nav>



  <!-- Page Content  -->
  <div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn font-weight-bolder">
          <i class="fa fa-bars fa-2x text-dark" aria-hidden="true"></i>
          <!-- <span>Toggle Sidebar</span> -->
        </button>

        <p class="lead font-weight-bolder mb-0 ml-2">Address Book</p>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fa fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto align-items-center">

            <!-- Actual search box -->
            <li class="nav-item">
              <div class="form-group mr-4 mb-0 has-search">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Search">
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link">
                <span class="fa-stack" data-count="">
                  <i class="fa fa-bell text-secondary "></i>
                </span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?php echo base_url() . 'assets/'; ?>images/21.png" class="img-fluid" alt="" width="40"
                  height="40" class="rounded shadow-sm">
                <span class="font-weight-bolder"> Robert Fox</span>
              </a>
              <div class="dropdown-menu dropdown-menu-ls" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Dashboard</a>
                <a class="dropdown-item" href="#">Edit Profile</a>
                <a class="dropdown-item" href="<?php echo base_url() . ''; ?>">Log Out</a>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>