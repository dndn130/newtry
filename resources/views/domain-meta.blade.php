@extends('layouts.app-dashboard')

@section('content')
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Domain Metadata</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Domain metadata</li>
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
                          <div class="card-header border-0">
                            <h3 class="card-title">Domain Metadata</h3>
                            <div class="card-tools">
                              <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-download"></i>
                              </a>
                              <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-bars"></i>
                              </a>
                            </div>
                          </div>
                          <div class="card-body table-responsive p-0">
                            <!-- modal -->
                            <div class="container">
                              <!-- Trigger the modal with a button -->
                              <!-- <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#myModal">Tambah Data</button>
 -->
                              <!-- Modal -->
                              <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Tambah Data Domain</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <!-- <h4 class="modal-title">Modal Header</h4> -->
                                    </div>
                                    <div class="modal-body">
                                      
                                      <form action="/zones/postZones" method="post">
                                      @csrf
                                      <input class="form-control" type="text" placeholder="Namet" name="name">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Kind" name="kind">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Dnssec" name="dnssec">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Soa-edit" name="soaedit" value="INCEPTION-INCREMENT">
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
                            </div>
                            <div class="table-responsive">
                              <table class="table table-striped table-valign-middle">
                              <thead>
                              <tr>
                                <!-- <th>Product</th> -->
                                <th>Id</th>
                                <th>Domain ID</th>
                                <th>Kind</th>
                                <th>Content</th>
                                <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php 

                                // mengubah JSON menjadi array dari function
                                 //$data = json_decode($output, TRUE);
                                
                                 foreach($domainmetadata as $d){ 
                                 ?>
                              <tr>                   
                                <td>
                                    <?php 
                                    echo $d['id']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['domain_id']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['kind']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['content']; 
                                    ?>
                                </td>                               
                                <td>

                                  <div class="container">
                                  <!-- Trigger the modal with a button -->
                                  <a href="#" class="text-muted">
                                    <i class="fas fa-search" data-toggle="modal" data-target="#myModal2"></i>
                                  </a>

                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal2" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Data Domain Meta Data</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                          <form>
                                            @csrf
                                            <input class="form-control" type="text" placeholder="Account" name="account" value=""></input>
                                          <br>
                                          <input class="form-control" type="text" placeholder="ID" name="id" value=""></input>
                                          <br>
                                          <input class="form-control" type="text" placeholder="Kind" name="kind" value=""></input>
                                          <br>
                                          <input class="form-control" type="text" placeholder="Name" name="name" value=""></input>
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
                                  
                                </div>

                                </td>
                                <?php 
                                }
                               ?>
                              </tr>

                              </tbody>
                            </table>

                            </div>
                            
                          </div>
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
