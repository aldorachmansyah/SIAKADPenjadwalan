a:4:{i:0;s:9673:"<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href='<?= $this->url->get('../plugins/images/logo-its-biru.png') ?>'>
  <title>Sistem Informasi Akademik ITS</title>
  <!-- Bootstrap Core CSS -->
  <?= $this->tag->stylesheetLink('bootstrap/dist/css/bootstrap.min.css') ?>
  <!-- Menu CSS -->
  <?= $this->tag->stylesheetLink('plugins/bower_components/sidebar-nav/dist/sidebar-nav.css') ?>
  <!-- animation CSS -->
  <?= $this->tag->stylesheetLink('css/animate.css') ?>
  <!-- Custom CSS -->
  <?= $this->tag->stylesheetLink('css/style.css') ?>
  <!-- color CSS -->
  <?= $this->tag->stylesheetLink('css/colors/blue.css') ?>
  <!-- Calendar CSS -->
  <?= $this->tag->stylesheetLink('plugins/bower_components/calendar/dist/fullcalendar.css') ?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="fix-header">
  <!-- ============================================================== -->
  <!-- Preloader -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Wrapper -->
  <!-- ============================================================== -->
  <div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
      <div class="navbar-header">
        <div class="top-left-part">
          <!-- Logo -->
          <a class="logo" href="index.html">
            <b><img src='<?= $this->url->get('../plugins/images/logo-its-biru.png') ?>' alt="home" height="49" width="80"/></b>
            <b> <span class="hidden-xs">SIAKAD-ITS</span> </b>
          </a>
        </div>
        <ul class="nav navbar-top-links navbar-left">
          <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
          <li class="dropdown">
            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src='<?= $this->url->get('plugins/images/users/varun.jpg') ?>' alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b><span class="caret"></span> </a>
            <ul class="dropdown-menu dropdown-user animated flipInY">
              <li>
                <div class="dw-user-box">
                  <div class="u-img"><img src='<?= $this->url->get('plugins/images/users/varun.jpg') ?>' alt="user" /></div>
                  <div class="u-text"><h4>Steave Jobs</h4><p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                </div>
              </li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
            <!-- /.dropdown-user -->
          </li>

          <!-- /.dropdown -->
        </ul>
      </div>
      <!-- /.navbar-header -->
      <!-- /.navbar-top-links -->
      <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <b><span class="hide-menu">SIAKAD-ITS</span></b></h3> </div>
            <ul class="nav" id="side-menu">
                <li class="user-pro">
                    <a href="#" class="waves-effect" style="display: inline-block;"><img src='<?= $this->url->get('plugins/images/users/varun.jpg') ?>' alt="user-img" class="img-circle"> <span class="hide-menu">Nama Dosen</span><span class="hide-menu" style="display: inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP Dosen</span>
                    </a>
                    <!-- <div style="display: inline-block"><span class="hide-menu">Nama Mahasiswa</span></div>
                    <div style="display: inline-block"><span class="hide-menu">NRP Mahasiswa</span></div> -->
                </li>
                <li> <a href="<?= $this->url->get('Homepage/mahasiswa') ?>" class="waves-effect"><i class="mdi mdi-view-dashboard fa-fw" data-icon="v"></i> <span class="hide-menu">DASHBOARD<span></span></span></a>
                </li>
                <li> <a href="#" class="waves-effect"><i class="mdi mdi-book-open-variant fa-fw"></i> <span class="hide-menu">AKADEMIK<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="Kurikulum.html"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">KURIKULUM</span></a></li>
                        <li><a href="Prasyarat.html"><i data-icon="&#xe025;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">PRASYARAT MATA KULIAH</span></a></li>
                        <li><a href="Perkuliahan.html"><i class="ti-layout-menu fa-fw"></i> <span class="hide-menu">PERKULIAHAN MAHASISWA</span></a></li>
                    </ul>
                </li>
                <li> <a href="#" class="waves-effect"><i class="mdi mdi-archive fa-fw"></i> <span class="hide-menu">LAPORAN<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?= $this->url->get('SKEM/index') ?>"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">SKEM</span></a></li>
                        <li><a href="<?= $this->url->get('SKPI/index') ?>"><i class="ti-layout-sidebar-left fa-fw"></i> <span class="hide-menu">SKPI</span></a></li>
                        <li><a href="lightbox.html"><i class="fa-fw">L</i> <span class="hide-menu">SPP</span></a></li>
                        <li><a href="treeview.html"><i class="fa-fw">T</i> <span class="hide-menu">REKAPITULASI EKIVALENSI</span></a></li>
                    </ul>
                </li>
                <li><a href="#" class="waves-effect"><i class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">PROSES<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">ISI SKEM</span></a></li>
                        <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">ISI SKPI</span></a></li>
                        <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">UPDATE DATA WISUDA</span></a></li>
                        <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">FRS</span></a></li>
                        <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">ISI IPD</span></a></li>
                    </ul>
                </li>
                <li><a href="#" class="waves-effect"><i class="mdi mdi-format-list-numbers fa-fw"></i> <span class="hide-menu">NILAI<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">TRANSKRIP</span></a></li>
                        <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">RANKING IPK</span></a></li>
                        <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">RANKING IPS</span></a></li>
                        <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">NILAI PER MAHASISWA</span></a></li>
                        <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">NILAI PER SEMESTER</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
      ";s:7:"content";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:8:"
      ";s:4:"file";s:59:"C:\xampp\htdocs\SIAKAD/app/views/layouts/sidebar_dosen.volt";s:4:"line";i:167;}}i:1;s:1404:"

      <!-- jQuery -->
      <?= $this->tag->javascriptInclude('plugins/bower_components/jquery/dist/jquery.min.js') ?>
      <!-- Bootstrap Core JavaScript -->
      <?= $this->tag->javascriptInclude('bootstrap/dist/js/bootstrap.min.js') ?>
      <!-- Menu Plugin JavaScript -->
      <?= $this->tag->javascriptInclude('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') ?>
      <!--slimscroll JavaScript -->
      <?= $this->tag->javascriptInclude('js/jquery.slimscroll.js') ?>
      <!--Wave Effects -->
      <?= $this->tag->javascriptInclude('js/waves.js') ?>
      <!-- Custom Theme JavaScript -->
      <?= $this->tag->javascriptInclude('js/custom.min.js') ?>
      <!--Style Switcher -->
      <?= $this->tag->javascriptInclude('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') ?>
      <?= $this->tag->javascriptInclude('js/cbpFWTabs.js') ?>
      <?= $this->tag->javascriptInclude('plugins/bower_components/toast-master/js/jquery.toast.js') ?>
      <?= $this->tag->javascriptInclude('js/slimscroll.js') ?>
      <!-- Calendar JavaScript -->
      <?= $this->tag->javascriptInclude('plugins/bower_components/moment/moment.js') ?>
      <?= $this->tag->javascriptInclude('plugins/bower_components/calendar/dist/fullcalendar.min.js') ?>
      <?= $this->tag->javascriptInclude('plugins/bower_components/calendar/dist/cal-init.js') ?>

      ";i:2;s:30:"
    </body>

    </html>
";}