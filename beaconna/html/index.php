<!DOCTYPE html>
<html>
<head>
  <title>Beaconna - Dashboard</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
<!--   <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/yellow.css"> -->

</head>
<body style="background-color: #272727;">
  <div class="app app-default">

<!-- <aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">Beconna</span> Dashboard</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="active">
        <a href="./index.html">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>
      
    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div>
</aside> -->

<div class="app-container">

<!--   <nav class="navbar navbar-default" id="navbar">
    <div class="">
      <div class="navbar-collapse collapse in">
        <ul class="nav navbar-nav navbar-mobile">
          <li>
            <button type="button" class="sidebar-toggle">
              <i class="fa fa-bars"></i>
            </button>
          </li>
          <li class="logo">
            <a class="navbar-brand" href="#"><span class="highlight"></span> Admin</a>
          </li>
          <li>
            <button type="button" class="navbar-toggle">
              <img class="profile-img" src="./assets/images/profile.png">
            </button>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
          <li class="navbar-title">Dashboard</li>
          <li class="navbar-search hidden-sm">
            <input id="search" type="text" placeholder="Search..">
            <button class="btn-search"><i class="fa fa-search"></i></button>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown profile">
            <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
              <img class="profile-img" src="./assets/images/profile.png">
              <div class="title">Profile</div>
            </a>
            <div class="dropdown-menu">
              <div class="profile-info">
                <h4 class="username">Scott White</h4>
              </div>
              <ul class="action">
                <li>
                  <a href="#">
                    Profile
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="badge badge-danger pull-right">5</span>
                    My Inbox
                  </a>
                </li>
                <li>
                  <a href="#">
                    Setting
                  </a>
                </li>
                <li>
                  <a href="#">
                    Logout
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

<!--   <div class="btn-floating" id="help-actions">
  <div class="btn-bg"></div>
  <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
    <i class="icon fa fa-plus"></i>
    <span class="help-text">Shortcut</span>
  </button>
  <div class="toggle-content">
    <ul class="actions">
      <li><a href="#">Website</a></li>
      <li><a href="#">Documentation</a></li>
      <li><a href="#">Issues</a></li>
      <li><a href="#">About</a></li>
    </ul>
  </div>
</div> -->

<!-- <div class="row">
  <div class="col-xs-12">
    <div class="card card-banner card-chart card-blue no-br">
      <div class="card-header">
        <div class="card-title">
          <div class="title">Top Sale Today</div>
        </div>
        <ul class="card-action">
          <li>
            <a href="/">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="ct-chart-sale"></div>
      </div>
    </div>
  </div>
</div> -->
<div class="row" style="margin-top: 15vh;">
  <div class="container">
    <!-- Row 1 -->
    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
        <a class="card card-banner card-blue-light" href="Inventory.php">
          <div class="card-body">
            <i class="icon fa fa-archive fa-4x"></i>
            <div class="content">
              <div class="title">Invetory</div>
              
            </div>
          </div>
        </a>
    </div>

    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
        <a class="card card-banner card-blue-light">
          <div class="card-body">
            <i class="icon fa fa-shopping-basket fa-4x"></i>
            <div class="content">
              <div class="title">Pre Orders</div>
            </div>
          </div>
        </a>
    </div>

    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
        <a class="card card-banner card-blue-light">
          <div class="card-body">
            <i class="icon fa fa-shopping-cart fa-4x"></i>
            <div class="content">
              <div class="title">Sales</div>
            </div>
          </div>
        </a>
    </div>

    <!-- Row one end -->

  </div>
</div>

<div class="row" style="margin-top: 10vh;">
  <!-- Second Row Start -->
  <div class="container">
    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
        <a class="card card-banner card-blue-light">
          <div class="card-body">
            <i class="icon fa fa-newspaper-o fa-4x"></i>
            <div class="content">
              <div class="title">Advertistments</div>
            </div>
          </div>
        </a>
    </div>

    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
        <a class="card card-banner card-blue-light">
          <div class="card-body">
            <i class="icon fa fa-bar-chart  fa-4x"></i>
            <div class="content">
              <div class="title">Analytics</div>
            </div>
          </div>
        </a>
    </div>

    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
        <a class="card card-banner card-blue-light">
          <div class="card-body">
            <i class="icon fa fa-cogs fa-4x"></i>
            <div class="content">
              <div class="title">Settings</div>
            </div>
          </div>
        </a>
    </div>
  <!-- Second Row End -->
</div>

    

<footer class="app-footer" style="bottom: 0; position: absolute;"> 
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">
        Copyright &copy; 2017 Team Void
      </div>
    </div>
  </div>
</footer>
</div>

  </div>
  
  <script type="text/javascript" src="./assets/js/vendor.js"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>

<!-- <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card card-mini">
      <div class="card-header">
        <div class="card-title">Last Statuses</div>
        <ul class="card-action">
          <li>
            <a href="/">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body no-padding table-responsive">
        <table class="table card-table">
          <thead>
            <tr>
              <th>Products</th>
              <th class="right">Amount</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>MicroSD 64Gb</td>
              <td class="right">12</td>
              <td><span class="badge badge-success badge-icon"><i class="fa fa-check" aria-hidden="true"></i><span>Complete</span></span></td>
            </tr>
            <tr>
              <td>MiniPC i5</td>
              <td class="right">5</td>
              <td><span class="badge badge-warning badge-icon"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Pending</span></span></td>
            </tr>
            <tr>
              <td>Mountain Bike</td>
              <td class="right">1</td>
              <td><span class="badge badge-info badge-icon"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Confirm Payment</span></span></td>
            </tr>
            <tr>
              <td>Notebook</td>
              <td class="right">10</td>
              <td><span class="badge badge-danger badge-icon"><i class="fa fa-times" aria-hidden="true"></i><span>Cancelled</span></span></td>
            </tr>
            <tr>
              <td>Raspberry Pi2</td>
              <td class="right">6</td>
              <td><span class="badge badge-primary badge-icon"><i class="fa fa-truck" aria-hidden="true"></i><span>Shipped</span></span></td>
            </tr>
            <tr>
              <td>Flashdrive 128Mb</td>
              <td class="right">40</td>
              <td><span class="badge badge-info badge-icon"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Confirm Payment</span></span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card card-tab card-mini">
      <div class="card-header">
        <ul class="nav nav-tabs tab-stats">
          <li role="tab1" class="active">
            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Browsers</a>
          </li>
          <li role="tab2">
            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">OS</a>
          </li>
          <li role="tab2">
            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">More</a>
          </li>
        </ul>
      </div>
      <div class="card-body tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab1">
          <div class="row">
            <div class="col-sm-8">
              <div class="chart ct-chart-browser ct-perfect-fourth"></div>
            </div>
            <div class="col-sm-4">
              <ul class="chart-label">
                <li class="ct-label ct-series-a">Google Chrome</li>
                <li class="ct-label ct-series-b">Firefox</li>
                <li class="ct-label ct-series-c">Safari</li>
                <li class="ct-label ct-series-d">IE</li>
                <li class="ct-label ct-series-e">Opera</li>
              </ul>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab2">
          <div class="row">
            <div class="col-sm-8">
              <div class="chart ct-chart-os ct-perfect-fourth"></div>
            </div>
            <div class="col-sm-4">
              <ul class="chart-label">
                <li class="ct-label ct-series-a">iOS</li>
                <li class="ct-label ct-series-b">Android</li>
                <li class="ct-label ct-series-c">Windows</li>
                <li class="ct-label ct-series-d">OSX</li>
                <li class="ct-label ct-series-e">Linux</li>
              </ul>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab3">
        </div>
      </div>
    </div>
  </div>
</div>

Inventory
Pre Orders
Sales
Advertistments
Analytics
Settings
-->