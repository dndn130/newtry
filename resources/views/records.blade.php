@extends('layouts.app-dashboard')

@section('content')
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Records Domain</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Record</li>
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

                        
                        <!-- /.card -->
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Domain</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                                <?php

                              // mengubah JSON menjadi array dari function
                               //$data = json_decode($output, TRUE);

                                $data2 = json_decode($domains, true);
                                foreach($data2 as $d2){ 
                                 ?>
                                
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Domain Name</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" disabled="true" name="name"  value="<?php echo $d2['name']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Master</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" disabled="true" name="master"  value="<?php echo $d2['master']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" disabled="true" name="type" value="<?php echo $d2['type']; ?>">
                                </div>
                                <?php
                                  
                                ?>
                          </div>
                              <!-- end form group -->

                          
                        </div>
                       </div>
                       <div class="box box-primary">
                          <div class="box-header with-border">
                            <!-- <h3 class="box-title">List Data Zones</h3>  -->
                            <div class="box-tools pull-right">
                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Records</a>
                            </div>
                          </div>
                        </div>
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
                                      <h4 class="modal-title">Tambah Record</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <!-- <h4 class="modal-title">Modal Header</h4> -->
                                    </div>
                                    <div class="modal-body">
                                      
                                      <form action="/record/postRecords" method="post">
                                      @csrf
                                      <input class="form-control" type="text" placeholder="Domain Id" name="domain_id" value="<?php echo $d2['id']; ?>">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Name" name="name" value="<?php echo $d2['name']; ?>">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Type" name="type">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Content" name="content">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Ttl" name="ttl">
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
                            <!-- end modal -->
                            <?php
                              }
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Type</th>
                              <th>Content</th>
                              <th>Ttl</th>
                              <th>More</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 

                              // mengubah JSON menjadi array dari function
                               //$data = json_decode($output, TRUE);
                                $data = json_decode($records, true);
                                foreach($data as $d){ 
                            ?>
                            <tr>                   
                                <td>
                                  <!-- Modal 2 -->
                                  <div class="modal fade" id="myModal2<?php echo $d['id']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Update Domain <?php echo $d['name']; ?></h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <!-- <h4 class="modal-title">Modal Header</h4> -->
                                        </div>
                                        <div class="modal-body">
                                          
                                          <form action="/record/putRecords" method="post">
                                          @csrf
                                          <input class="form-control" type="text" placeholder="Id" hidden="TRUE" value="<?php echo $d['id']; ?>" name="id_">
                                          <input class="form-control" type="text" placeholder="Name" value="<?php echo $d['name']; ?>" name="name">
                                          <br>
                                          <input class="form-control" type="text" placeholder="Kind" value="<?php echo $d['type']; ?>" name="type">
                                          <br>
                                          <input class="form-control" type="text" placeholder="Masters" value="<?php echo $d['content']; ?>" name="content">
                                          <br>
                                          <input class="form-control" type="text" placeholder="Masters" value="<?php echo $d['ttl']; ?>" name="ttl">
                                          <br>
                                          <button type="submit" class="btn btn-outline-primary btn-sm">Update Data</button>
                                          </form>     

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                  
                                </div>
                                <!-- end modal 2-->

                                 <!-- Modal 3 -->
                                  <div class="modal fade" id="myModal3<?php echo $d['id']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Hapus Records Domain <?php echo $d['name']; ?></h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <!-- <h4 class="modal-title">Modal Header</h4> -->
                                        </div>
                                        <div class="modal-body">
                                          <p>
                                            <table>
                                              <tr>
                                                <td>Content Id</td> 
                                                <td></td>   
                                                <td><?php echo $d['id']; ?> </td>                                            
                                              </tr>
                                              <tr>
                                                <td>Content</td>
                                                <td></td>
                                                <td><?php echo $d['content']; ?> </td>
                                              </tr>
                                            </table>                                             
                                            </p>
                                          <form action="/record/deleteRecords" method="post">
                                          @csrf
                                          <input class="form-control" type="text" placeholder="Id" name="id" hidden="TRUE" value="<?php echo $d['id']; ?>"> 
                                          <input class="form-control" type="text" placeholder="Name" name="name" hidden="TRUE" value="<?php echo $d['name']; ?>">
                                              <button type="submit" class="btn btn-outline-danger btn-sm">Hapus Data</button>
                                              <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Cancel</button>                                            
                                          </form>     

                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                  
                                </div>
                                <!-- end modal 3-->
                                    <?php 
                                    echo $d['domain_id']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['name']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['type']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['content']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['ttl']; 
                                    ?>                                        
                                    </td>
                                <td>
                                  <!-- Trigger the modal with a button -->
                                  <!-- <a href="/records/<?php //echo $d['name'] ?>" class="text-muted" >
                                    <i class="fas fa-search"></i>
                                  </a> -->
                                  <a href="" class="text-muted" data-toggle="modal" data-target="#myModal3<?php echo $d['id']; ?>">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                  <a href="" class="text-muted" data-toggle="modal" data-target="#myModal2<?php echo $d['id']; ?>">
                                    <i class="fas fa-edit"></i>
                                  </a>                                 

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
                              <th>Type</th>
                              <th>Content</th>
                              <th>Ttl</th>
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
