<?php 
include 'header.php';
 ?>
  <body>
<nav class="navbar navbar-primary fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Leave Management System</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <!--<a class="nav-link " href="#logout"><button class="btn btn-">Sign out</button></a>-->
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <br/>
              <div ><strong></strong>
               
              </div><br/>
              <p>
              <li class="nav-item" style="margin-bottom: 10px;">
                <a class="btn btn-info nav-link active" href="#">
                  <span class="fa fa-home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item" style="margin-bottom: 10px;">
                <a class="nav-link btn btn-primary" href="residential.php">
                  <span class="fa fa-file"></span>
                  Residential
                </a>
              </li>
              <li class="nav-item" style="margin-bottom: 10px;">
                <a class="nav-link btn btn-primary" href="leave_due_list.php">
                  <span class="fa fa-setting"></span>
                  Financial Aid
                </a>
              </li>
              <li class="nav-item" style="margin-bottom: 10px;">
                <a class="nav-link btn btn-secondary" href="leave_setup.php">
                  <span class="fa fa-users"></span>
                  Leader, Governance 
                </a>
              </li>
              <li class="nav-item" style="margin-bottom: 10px;">
                <a class="nav-link btn btn-secondary" href="approve_leave.php">
                  <span data-feather="bar-chart-2"></span>
                  Counselling, Carrier
                </a>
              </li>
              <li class="nav-item" style="margin-bottom: 10px;">
                <a class="nav-link btn btn-success" href="department.php">
                  <span data-feather="layers"></span>
                  Academics
                </a>
              </li>
              <br/>
              <p></p>
              <li class="nav-item">
                <a class="nav-link btn btn-waring" href="#">
                  <span data-feather="layers"></span>
                  Sign Out
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="col-md-10 d-none d-md-block">{% block content %}{% endblock %}</div>

    <!-- Optional JavaScript -->
    <!-- JavaScript Dependencies: jQuery, Popper.js, Bootstrap JS, Shards JS -->
    <script src="js/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/shards.min.js"></script>
  </body>
</html>
 