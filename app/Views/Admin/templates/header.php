<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Dashboard - BDPIS</title>
  <meta content="Disaster Preparedness" name="description">
  <meta content="Disaster Preparedness" name="keywords">
  <meta name="author" content="Group 6">
  <link href="/adminassets/img/logo.gif" rel="icon"> 
  
  <!-- Custom Fonts -->
  <link href="/adminassets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Vendor Files -->
  <link href="/adminassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Styles -->
  <link href="<?php echo base_url(); ?>//adminassets/css/style.css" rel="stylesheet">
  <link href="/adminassets/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

<!-- Session Login == true -->
<?php if (session()->get('isLoggedIn')): ?> 
<?php
    $uri = service('uri');
   ?>
   
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
        <img src="/adminassets/img/logo.gif" class="img-fluid" width="70%">
        </div>
        <div class="sidebar-brand-text mx-3">BDPIS <sup>Dashboard</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
        <a class="nav-link" href="/dashboard">
          
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Guides Upload
      </div>

      <!-- Nav Item -  Maps -->
      <li class="nav-item <?= ($uri->getSegment(1) == 'maps' ? 'active' : null) ?>">
        <a class="nav-link" href="/maps">
        <i class="fas fa-map-marked-alt"></i>
          <span>Maps</span>
        </a>
      </li>

      <!-- Nav Item - Image Guides Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#img" aria-expanded="true" aria-controls="img">
          <i class="far fa-image"></i>
          <span>Image Guides Upload</span>
        </a>
        <div id="img" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item <?= ($uri->getSegment(1) == 'igflood' ? 'active' : null) ?>" href="/igflood">Floods</a>
            <a class="collapse-item <?= ($uri->getSegment(1) == 'iglandslide' ? 'active' : null) ?>" href="/iglandslide">Landslide</a>
            <a class="collapse-item <?= ($uri->getSegment(1) == 'igtyphoon' ? 'active' : null) ?>" href="/igtyphoon">Typhoon</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Video Guides Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vid" aria-expanded="true" aria-controls="vid">
          <i class="fas fa-video"></i>
          <span>Video Guides Upload</span>
        </a>
        <div id="vid" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item <?= ($uri->getSegment(1) == 'vgflood' ? 'active' : null) ?>" href="/vgflood">Floods</a>
            <a class="collapse-item <?= ($uri->getSegment(1) == 'vglandslide' ? 'active' : null) ?>" href="/vglandslide">Landslide</a>
            <a class="collapse-item <?= ($uri->getSegment(1) == 'vgtyphoon' ? 'active' : null) ?>" href="/vgtyphoon">Typhoon</a>
          </div>
        </div>
      </li>

      <!-- Officials Upload -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOfficials" aria-expanded="true" aria-controls="collapseOfficals">
          <i class="fas fa-user-alt"></i>
          <span>Barangay Officials</span>
        </a>
        <div id="collapseOfficials" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item <?= ($uri->getSegment(1) == 'officials' ? 'active' : null) ?>" href="/officials">Officials</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
        Others
      </div>

      <!-- Nav Item -  FAQs Generator -->
      <li class="nav-item <?= ($uri->getSegment(1) == 'faqgenerator' ? 'active' : null) ?>">
        <a class="nav-link" href="/faqgenerator">
        <i class="fas fa-question-circle"></i>
          <span>FAQs Generator</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
        User Control
      </div>

      <!-- Nav Item -  FAQs Generator -->
      <li class="nav-item <?= ($uri->getSegment(1) == 'users' ? 'active' : null) ?>">
        <a class="nav-link" href="/users">
        <i class="fas fa-question-circle"></i>
          <span>Users</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
        
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session()->get('firstname') ?></span>
                <img class="img-profile rounded-circle" src="/adminassets/img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
          <?php else: ?>
    
    <?php endif; ?>
        </nav>
        <!-- End of Topbar -->
       

  <!-- Scroll to Top Button
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a> -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
 
  