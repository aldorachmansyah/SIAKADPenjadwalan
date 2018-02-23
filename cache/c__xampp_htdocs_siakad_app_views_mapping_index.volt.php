<!DOCTYPE html>
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
      
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Penjadwalan</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Penjadwalan</a></li>
            <li class="active">Mapping Jadwal Kuliah</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- ============================================================== -->
      <!-- Demo table -->
      <!-- ============================================================== -->
      <!-- .row -->
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="white-box">
            <h3 class="box-title m-b-1">Mapping Jadwal Kuliah</h3>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <!-- <label class="form-inline">Tahun Kurikulum
                    <select id="demo-show-entries" class="form-control input-sm">
                      <option>Pilih Tahun</option>
                      <option value="5">2014</option>
                      <option value="10">2009</option>
                      <option value="10">2004</option>
                      <option value="10">1999</option>
                      <option value="10">1994</option>
                    </select>
                  </label>
                  &nbsp;
                  <label class="form-inline">Semester
                    <select id="demo-show-entries" class="form-control input-sm">
                      <option>Pilih Semester</option>
                      <option value="5">1</option>
                      <option value="10">2</option>
                      <option value="10">3</option>
                      <option value="10">4</option>
                      <option value="10">5</option>
                    </select>
                  </label>
                  &nbsp;
                  <button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Cari</button> -->
                </div>
              </div>
            </div>
            <div class="table-responsive">
                <table class="table color-table success-table table-hover ">
                                <thead>
                                    <tr>
                                        <th class="text-center">KodeMK</th>
                                        <th class="text-center" class="text-center">Matkul</th>
                                        <th class="text-center">SKS</th>
                                        <th class="text-center">Kelas</th>
                                        <th class="text-center">PST</th>
                                        <th class="text-center">Jadwal</th>
                                        <th class="text-center">Ruang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">KIXXXXX</td>
                                        <td>Dasar Pemrograman</td>
                                        <td class="text-center">4</td>
                                        <td class="text-center">A</td>
                                        <td class="text-center">15 Mar 1988</td>
                                        <td class="text-center">Senin, 07.30-10.00</td>
                                        <td class="text-center">IF-101</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">KIXXXXX</td>
                                        <td>Arsitektur Perangkat Lunak</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">-</td>
                                        <td class="text-center">15 Mar 1988</td>
                                        <td class="text-center">Rabu, 13.00-15.30</td>
                                        <td class="text-center">IF-105b</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">KIXXXXX</td>
                                        <td>Penjaminan Mutu Perangkat Lunak</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">-</td>
                                        <td class="text-center">15 Mar 1988</td>
                                        <td class="text-center">Selasa, 13.00-15.30</td>
                                        <td class="text-center">IF-108</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">KIXXXXX</td>
                                        <td>Manajemen Proyek Perangkat Lunak</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">C</td>
                                        <td class="text-center">15 Mar 1988</td>
                                        <td class="text-center">Rabu, 10.00-12.30</td>
                                        <td class="text-center">IF-108</td>
                                    </tr>
                                </tbody>
                            </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <div class="right-sidebar">
            <div class="slimscrollright">
              <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
              <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                  <li><b>With Light sidebar</b></li>
                  <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
                  <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                  <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                  <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                  <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                  <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                  <li><b>With Dark sidebar</b></li>
                  <br/>
                  <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                  <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                  <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                  <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                  <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                  <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                </ul>
                <ul class="m-t-20 all-demos">
                  <li><b>Choose other demos</b></li>
                </ul>
                <ul class="m-t-20 chatonline">
                  <li><b>Chat option</b></li>
                  <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
      </div>
      <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    

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

      
    </body>

    </html>
