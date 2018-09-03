<?php
session_start();
include("include/function.php");
include("include/config.php");
include("include/lang.php");
if (!isset($_SESSION['user'])){header("Location: ".$home_path;);}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Heras Admin Panel">
  <meta name="author" content="Heras">
  <meta name="keyword" content=",">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Heras Panel</title>

  <!-- Icons -->
  <link href="vendors/css/flag-icon.min.css" rel="stylesheet">
  <link href="vendors/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/css/simple-line-icons.min.css" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Styles required by this views -->

</head>



<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none mr-auto">

      <li class="nav-item px-3">
        <a class="nav-link" href="<?php echo $home_path; ?>">Home</a>
      </li>
      
    </ul>
    
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $home_path ?>"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-info">NEW</span></a>
          </li>

          <li class="nav-title">
            Credit Card
          </li>
          <li class="nav-item">
            <a href="<?php echo $card_path;?>" class="nav-link"><i class="icon-drop"></i> Card database</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $bin_path;?>" class="nav-link"><i class="icon-pencil"></i> Bin</a>
          </li>
          <li class="nav-title">
            Dump
          </li>
          <li class="nav-item">
            <a href="<?php echo $dump_path;?>" class="nav-link"><i class="icon-drop"></i> Dump database</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $dumpformat_path;;?>" class="nav-link"><i class="icon-pencil"></i> Dump format</a>
          </li>
          <li class="divider"></li>
		  <li class="nav-title">
            Tool
          </li>
          <li class="nav-item">
            <a href="<?php echo $filter_path;?>" class="nav-link"><i class="icon-drop"></i> Filter CC</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $hack_path;?>" class="nav-link"><i class="icon-pencil"></i> Hack</a>
          </li>
          <li class="divider"></li>
          <li class="nav-title">
            System Utilization
          </li>
          <li class="nav-item px-3 hidden-cn">
            <div class="text-uppercase mb-1">
              <small><b>CPU Usage</b></small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">348 Processes. 1/4 Cores.</small>
          </li>
          <li class="nav-item px-3 hidden-cn">
            <div class="text-uppercase mb-1">
              <small><b>Memory Usage</b></small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">11444GB/16384MB</small>
          </li>
          <li class="nav-item px-3 hidden-cn">
            <div class="text-uppercase mb-1">
              <small><b>SSD 1 Usage</b></small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">243GB/256GB</small>
          </li>

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
        </li>
      </ol>

      <div class="container-fluid">
        <div class="animated fadeIn">
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-5">
                      <h3 class="card-title clearfix mb-0">Dashboard &amp; Report</h3>
                    </div>
                    <div class="col-sm-7">
                      <button type="button" class="btn btn-outline-primary float-right ml-3"><i class="icon-cloud-download"></i> &nbsp; Download</button>
                      <fieldset class="form-group float-right">
                        <div class="input-group float-right" style="width:240px;">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input name="daterange" class="form-control date-picker" type="text">
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <hr class="m-0">
                  <div class="row">
                    <div class="col-sm-12 col-lg-8">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="callout callout-info">
                            <small class="text-muted">Credit Cards</small>
                            <br>
                            <strong class="h4">$creditcard_number</strong>
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-3">
                          <div class="callout callout-danger">
                            <small class="text-muted">Bin</small>
                            <br>
                            <strong class="h4">$bin</strong>
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
						 <div class="col-sm-3">
                          <div class="callout callout-warning">
                            <small class="text-muted">Hack site</small>
                            <br>
                            <strong class="h4">$hacksite</strong>
                            <div class="chart-wrapper">
                              <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                            </div>
                          </div>
                        </div>
                        <!--/.col-->
                      </div>
                      <!--/.row-->
                      <hr class="mt-0">
                      
                    </div>
                    <!--/.col-->
                    
                    <!--/.col-->
                   
                    <!--/.col-->
                  </div>
                  <!--/.row-->
                  <br>
                  <table class="table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center"><i class="icon-people"></i></th>
                        <th>Credit Card</th>
                        <th class="text-center">Exp</th>
                        <th>CVV</th>
                        <th class="text-center">Other info</th>
                        
                      </tr>
                    </thead>
                    
                  </table>
                </div>
              </div>
            </div>
            <!--/.col-->
          </div>
        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>

    

  </div>
  <footer class="app-footer">
    <span><a href="<?php echo $home_path;?>">Heras Panel</a> © 2018 .</span>
    <span class="ml-auto">Powered by <a href="<?php echo $home_path;?>">Heras aka Shinbi</a></span>
  </footer>


  <script src="vendors/js/jquery.min.js"></script>
  <script src="vendors/js/popper.min.js"></script>
  <script src="vendors/js/bootstrap.min.js"></script>
  <script src="vendors/js/pace.min.js"></script>

  <script src="vendors/js/Chart.min.js"></script>



  <script src="js/app.js"></script>

</body>
</html>
