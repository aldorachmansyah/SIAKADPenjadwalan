{% extends 'layouts/sidebar_dosen.volt' %}
{% block content %}
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
            <li class="active">Gedung</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- ============================================================== -->
      <!-- Demo table -->
      <!-- ============================================================== -->
      <!-- .row -->
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="white-box">
            <h3 class="box-title m-b-1">Gedung</h3>
            <div class="row">
              <div class="col-sm-6">

                <!-- Modal -->
                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Gedung</h4> </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                            <div class="form-group">
                              <div class="col-md-10 m-b-20">
                                <label class="control-label">Kode Gedung</label>
                                <input type="text" class="form-control" placeholder="Masukkan kode ruang"> </div>
                                <div class="col-md-5 m-b-20">
                                  <label class="control-label">Nama Gedung</label>
                                  <input type="text" class="form-control" placeholder="Masukkan nama gedung"> </div>
                                  <div class="col-md-5 m-b-20">
                                    <label class="control-label">Luas</label>
                                    <input type="text" class="form-control" placeholder="Masukkan luas ruangan (m2)"> </div>
                                    <div class="col-md-5 m-b-20">
                                      <label class="control-label">Jumlah Ruang</label>
                                      <select class="form-control" data-placeholder="Pilih Kuota" tabindex="1">
                                        <option value="Category 1">1</option>
                                        <option value="Category 2">2</option>
                                        <option value="Category 3">3</option>
                                        <option value="Category 4">4</option>
                                      </select> <span class="help-block"> Pilih Jumlah Ruang. </span>
                                    </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i class="ti-close m-r-5 pull" aria-hidden="true"></i> Batal</button>
                                  <button type="button" class="btn btn-info waves-effect" data-dismiss="modal"><i class="ti-save m-r-5 pull" aria-hidden="true"></i> Simpan</button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel">
                          <div class="sk-chat-widgets">
                            <div class="panel panel-themecolor">
                              <div class="panel-heading">
                                <center>Daftar Gedung</center>
                              </div>
                                  <div class="table-responsive">
                                    <table class="table table-hover manage-u-table ">
                                      <thead>
                                        <tr>
                                          <th class="text-center">Kode Gedung</th>
                                          <th class="text-center" class="text-center">Nama Gedung</th>
                                          <th class="text-center">Luas (m2)</th>
                                          <th class="text-center">Jumlah Ruang</th>
                                          <th class="text-center">Fungsi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th class="text-center">IF</th>
                                          <th class="text-center" class="text-center">Gedung Informatika</th>
                                          <th class="text-center">285</th>
                                          <th class="text-center">20</th>
                                          <td class="text-nowrap" style="text-align: center">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i></a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th class="text-center">TC</th>
                                          <th class="text-center" class="text-center">Gedung Sistem Informasi</th>
                                          <th class="text-center">350</th>
                                          <th class="text-center">15</th>
                                          <td class="text-nowrap" style="text-align: center">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th class="text-center">TL</th>
                                          <th class="text-center" class="text-center">Teknik Lingkungan</th>
                                          <th class="text-center">240</th>
                                          <th class="text-center">14</th>
                                          <td class="text-nowrap" style="text-align: center">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-success waves-effect btn-sm" data-toggle="modal" data-target="#add-contact"><i class="ti-plus m-r-5-pull" aria-hidden="true"></i> Tambah</button>
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
    {% endblock %}