<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/logo-its-biru.png">
    <title>SIAKAD - Sistem Akademik</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style2.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue2.css" id="theme" rel="stylesheet">
    <link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
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
                        <b><img src="plugins/images/logo-its.png" alt="home" height="49" width="80"/></b>
                    </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
                    <!-- .Megamenu -->
                    <!-- /.Megamenu -->
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs">Kaprodi</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"> Dosen</a></li>
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
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">SI Akademik</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="user-pro">
                        <a href="#" class="waves-effect" style="display: inline-block;"><img src="plugins/images/users/pakonggo.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">Nama Dosen</span><span class="hide-menu" style="display: inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP Dosen</span>
                        </a>
                    </li>
                    <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-home fa-fw" data-icon="v"></i> <span class="hide-menu"> BERANDA</span></a></li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-book-open-page-variant fa-fw"></i> <span class="hide-menu">KURIKULUM<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="panels-wells.html"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">PRASYARAT MATA KULIAH</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-home-map-marker fa-fw"></i> <span class="hide-menu">KELAS<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">VALIDASI RENCANA PERTEMUAN</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-checkbox-multiple-marked-outline fa-fw"></i> <span class="hide-menu">NILAI<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">VALIDASI ENTRI NILAI</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-account-multiple fa-fw"></i> <span class="hide-menu">MAHASISWA<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">DAFTAR MAHASISWA</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
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
            <li class="active">Penjadwalan Kuliah </li>
          </ol>
        </div>

        <!-- /.col-lg-12 -->
      </div>
      <!-- =======================\
        ======================================= -->
      <!-- Demo table -->
      <!-- ============================================================== -->
      <!-- .row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="white-box">
            <h3 class="box-title m-b-1">Cari Ruang</h3>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="form-inline">Hari
                    <select id="demo-show-entries" class="form-control input-sm">
                      <option>Senin</option>
                      <option>Selasa</option>
                      <option>Rabu</option>
                      <option>Kamis</option>
                      <option>Jumat</option>
                      <option>Sabtu</option>
                      <option>Minggu</option>
                    </select>
                  </label>
                  &nbsp;
                  <button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="panel">
                  <div class="sk-chat-widgets">
                    <div class="panel panel-themecolor">
                      <div class="panel-heading">
                        <center>Jadwal Kuliah</center>
                      </div>
                      <div class="table-responsive">
                        <table id="mainTable" class="table editable-table table-striped m-b-0">
                          <thead>
                            <tr>
                              <th rowspan="2" style="text-align: center;vertical-align: middle;">No.</th>
                              <th rowspan="2" style="text-align: center;vertical-align: middle;">Pukul</th>
                              <th colspan="13" class="text-center">Ruang</th>
                            </tr>
                            <tr>
                              <th class="text-center">IF-101</th>
                              <th class="text-center">IF-102</th>
                              <th class="text-center">IF-103</th>
                              <th class="text-center">IF-104</th>
                              <th class="text-center">IF-105a</th>
                              <th class="text-center">IF-105b</th>
                              <th class="text-center">IF-106</th>
                              <th class="text-center">IF-108</th>
                              <th class="text-center">IF-110</th>
                              <th class="text-center">IF-111</th>
                              <th class="text-center">IF-112</th>
                              <th class="text-center">LP1</th>
                              <th class="text-center">LP2</th>
                            </tr>

                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center">1</td>
                              <td class="text-center">07.00 - 07.50</td>
                              <td class="text-center">Sistem Digital A</td>
                              <td class="text-center">Sistem Digital B</td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                            </tr>
                            <tr>
                              <td class="text-center">2</td>
                              <td class="text-center">08.00 - 08.50</td>
                              <td class="text-center">Sistem Digital A</td>
                              <td class="text-center">Sistem Digital B</td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                            </tr>
                            <tr>
                              <td class="text-center">3</td>
                              <td class="text-center">09.00 - 09.50</td>
                              <td class="text-center">Sistem Digital A</td>
                              <td class="text-center">Sistem Digital B</td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
      <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="js/cbpFWTabs.js"></script>
    <script type="text/javascript">
        (function () {
                [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                new CBPFWTabs(el);
            });
        })();
    </script>
    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
        $('#slimtest2').slimScroll({
            height: '300px'
        });
        $('#slimtest3').slimScroll({
            height: '300px'
        });
        $('#slimtest4').slimScroll({
            height: '300px'
        });
        $('#slimtest5').slimScroll({
            height: '300px'
        });
        $('#slimtest6').slimScroll({
            height: '300px'
        });
        $('#slimtest1').slimScroll({
            height: '235px'
        });
    </script>
     <!-- Editable -->
    <script src="plugins/bower_components/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="plugins/bower_components/datatables/dataTables.bootstrap.js"></script>
    <script src="plugins/bower_components/tiny-editable/mindmup-editabletable.js"></script>
    <script src="plugins/bower_components/tiny-editable/numeric-input-example.js"></script>
    <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
        $(document).ready(function () {
            $('#editable-datatable').DataTable();
        });
    </script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script src="js/convert.js"></script>
    <!--Style Switcher -->
    </body>

    </html>

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->


