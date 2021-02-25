@extends('layouts.app-dashboard')

@section('content')
              <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dasboard</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
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
                            <!-- Small boxes (Stat box) -->
                      <div class="row">
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">                              
                              <h3>
                              <?php 
                                $dd = json_decode($countd, TRUE);
                                echo $dd;
                               ?>                                
                              </h3>

                              <p>Domain</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-city"></i>
                            </div>
                            <a href="/domain/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3>
                              <?php 
                                $dr = json_decode($countr, TRUE);
                                echo $dr;
                               ?> 
                              </h3>

                              <p>Records</p>
                            </div>
                            <div class="icon">
                              <i class="fab fa-accusoft"></i>
                            </div>
                            <a href="/record/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <!-- <div class="col-lg-3 col-6"> -->
                          <!-- small box -->
                          <!-- <div class="small-box bg-warning">
                            <div class="inner">
                              <h3> -->
                                <?php 
                                //$dr = json_decode($countr, TRUE);
                                //echo $dr;
                               ?> 
                              <!-- </h3>

                              <p>Type</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-dragon"></i>
                            </div>
                            <a href="/record/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div> -->
                        <!-- ./col -->
                        <!-- <div class="col-lg-3 col-6"> -->
                          <!-- small box -->
                          <!-- <div class="small-box bg-danger">
                            <div class="inner">
                              <h3>65</h3>

                              <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="/record/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div> -->
                        <!-- ./col -->
                      </div>
                      <!-- /.row -->
                    <div class="row">
                      <!-- content -->

                      
                      
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container-fluid -->
                 </div>
            </div>
            
@endsection
