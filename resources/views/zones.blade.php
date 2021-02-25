@extends('layouts.app-dashboard')

@section('content')
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Zones</h1>
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

                        <!-- <div class="box box-primary">
                          <div class="box-header with-border">
                            <h3 class="box-title">List Data Zones</h3> 
                            <div class="box-tools pull-right">
                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Zones</a>
                            </div>
                          </div>
                        </div> -->
                        <!-- /.card -->
                      <div class="card">
                        <!-- <div class="card-header">
                          <h3 class="card-title">Data Zones</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                          <!-- modal -->
                            <div class="container">
                              <!-- Trigger the modal with a button -->                           

                              <!-- Modal -->
                              <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Tambah Domain</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <!-- <h4 class="modal-title">Modal Header</h4> -->
                                    </div>
                                    <div class="modal-body">
                                      
                                      <form action="/zones/postZones" method="post">
                                      @csrf
                                      <input class="form-control" type="text" placeholder="Name" name="name">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Kind" name="kind">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Masters" name="masters">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Nameservers" name="nameservers">
                                      <br>
                                      <button type="submit" class="btn btn-outline-primary btn-sm">Tambah Data</button>
                                      </form>     

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              
                            </div>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Kind</th>
                              <th>Account</th>
                              <!-- <th>Masters</th> -->
                              <th>Dnssec</th>
                              <th>Last Check</th>
                              <th>Notified Serial</th>   
                              <th>More</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 

                              // mengubah JSON menjadi array dari function
                               //$data = json_decode($output, TRUE);
                               
                                $data = json_decode($output, TRUE);
                               
                                foreach($data as $d){ 
                            ?>
                            <tr>                   
                                <td>
                                    <?php 
                                    echo $d['id']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['name']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['kind']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['account']; 
                                    ?>                                        
                                    </td>
                                <!-- <td>
                                    <?php 
                                    //echo $d['masters']; 
                                    ?>                                        
                                    </td> -->
                                <td>
                                    <?php 
                                    echo $d['dnssec']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['last_check']; 
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    echo $d['notified_serial']; 
                                    ?>                                        
                                    </td> 
                                <td>
                                  <!-- Trigger the modal with a button -->
                                  <a href="/records/<?php echo $d['name'] ?>" class="text-muted" >
                                    <i class="fas fa-search"></i>
                                  </a>
                                  <a href="" class="text-muted" data-toggle="modal" data-target="#myModal3">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                  <a href="" class="text-muted">
                                    <i class="fas fa-edit" data-toggle="modal" data-target="#myModal2<?php echo $d['id']; ?>"></i>
                                  </a>

                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal2<?php echo $d['id']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Data Domain2</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <!-- <h4 class="modal-title">Modal Header</h4> -->
                                        </div>
                                        <div class="modal-body">
                                          <!-- <p>Tambah data Zone</p> -->
                                          <form>
                                            @csrf
                                            <input class="form-control" type="text" placeholder="Account" name="account" value="<?php echo $d['account']; ?>"></input>
                                            <br>
                                            <input class="form-control" type="text" placeholder="ID" name="id" value="<?php echo $d['id']; ?>"></input>
                                            <br>
                                            <input class="form-control" type="text" placeholder="Kind" name="kind" value="<?php echo $d['kind']; ?>"></input>
                                            <br>
                                            <input class="form-control" type="text" placeholder="Name" name="name" value="<?php echo $d['name']; ?>"></input>
                                            <br>
                                            <button type="button" class="btn btn-outline-primary btn-sm">Update Data</button>
                                          </form>                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>

                                </td>
                            </tr>
                            <?php 
                                }
                               ?>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Kind</th>
                              <th>Account</th>
                              <!-- <th>Masters</th> -->
                              <th>Dnssec</th>
                              <th>Last Check</th>
                              <th>Notified Serial</th>   
                              <th>More</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>




                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container-fluid -->

                 </div>
            </div>
            
@endsection
