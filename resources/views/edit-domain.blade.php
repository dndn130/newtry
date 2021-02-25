@extends('layouts.app-dashboard')

@section('content')
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update Zone</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Zones</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="container">
                <div class="row justify-content-center">
                <!-- Main content -->
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-12">
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                          <div class="card-header">
                            <h3 class="card-title">Zone</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <?php
                            $data =  json_decode($output, true);
                           ?>
                          <form action="/zones/updateZones" method="post">
                          @csrf
                            <div class="card-body">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Account</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="account" value="<?php echo $data['account']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">                                
                                <label class="col-sm-2 col-form-label">Kind</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="kind" value="<?php echo $data['kind']; ?>">
                                  <input type="text" hidden="true" name="id" value="<?php echo $id; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Masters</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="masters" value="<?php //echo $data['masters'][0]; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">dnssec</label>
                                <div class="col-sm-10">
                                  <?php
                                    // $ddnssec =$data['dnssec'];
                                    // if ($ddnssec == 0 ) {
                                    //   $ddnssec= "false";
                                    // }elseif ($ddnssec == "false" ) {
                                    //   $ddnssec = "false";
                                    // }elseif ($ddnssec == "true" ) {
                                    //   $ddnssec= "true";
                                    // }elseif ($ddnssec == 1 ) {
                                    //   $ddnssec= "true";
                                    // }
                                  ?>
                                  <input type="text" class="form-control" name="dnssec" value="<?php echo $data['dnssec']; ?>">
                                </div>
                              </div>                              
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">soa_edit_api</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="soa_edit_api" value="<?php echo $data['soa_edit_api']; ?>">
                                </div>
                              </div> 
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                              <button type="submit" class="btn btn-info">UPDATE</button>
                            </div>
                            <!-- /.card-footer -->
                          </form>
                        </div>
                        <!-- /.card -->

                      </div>
                      
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container-fluid -->

                 </div>
            </div>
            
@endsection
