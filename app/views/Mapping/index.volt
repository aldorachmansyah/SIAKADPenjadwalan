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
                <table class="table color-table info-table table-hover ">
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
    {% endblock %}