<?php $__env->startSection('content'); ?>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Domain</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Domain</li>
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

                        <div class="box box-primary">
                          <div class="box-header with-border">
                            <!-- <h3 class="box-title">List Data Zones</h3>  -->
                            <div class="box-tools pull-right">
                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Domain</a>
                            </div>
                          </div>
                        </div>
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
                                      
                                      <form action="/domain/postDomains" method="post">
                                      <?php echo csrf_field(); ?>
                                      <input class="form-control" type="text" placeholder="Name" name="name">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Type" name="type">
                                      <br>
                                      <input class="form-control" type="text" placeholder="Master" name="master">
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
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Masters</th>
                              <th>type</th>
                              <th>Last Check</th>
                              <th>Notified Serial</th>
                              <th>Account</th> 
                              <th>More</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 

                              // mengubah JSON menjadi array dari function
                               //$data = json_decode($output, TRUE);
                               
                                foreach($domains as $d){ 
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
                                          
                                          <form action="/domain/putDomains" method="post">
                                          <?php echo csrf_field(); ?>
                                          <input class="form-control" type="text" placeholder="Id" hidden="TRUE" value="<?php echo $d['id']; ?>" name="id">
                                          <input class="form-control" type="text" placeholder="Name" value="<?php echo $d['name']; ?>" name="name">
                                          <br>
                                          <input class="form-control" type="text" placeholder="Kind" value="<?php echo $d['type']; ?>" name="type">
                                          <br>
                                          <input class="form-control" type="text" placeholder="Masters" value="<?php echo $d['master']; ?>" name="master">
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
                                          <h4 class="modal-title">Hapus Domain <?php echo $d['name']; ?></h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <!-- <h4 class="modal-title">Modal Header</h4> -->
                                        </div>
                                        <div class="modal-body">
                                          
                                          <form action="/domain/deleteDomains" method="post">
                                          <?php echo csrf_field(); ?>
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
                                    echo $d['master']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['type']; 
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
                                    <?php 
                                    echo $d['account']; 
                                    ?>                                        
                                    </td>
                                <td>
                                  <!-- Trigger the modal with a button -->
                                  <a href="/records/<?php echo $d['name'] ?>" class="text-muted" >
                                    <i class="fas fa-search"></i>
                                  </a>
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
                              <th>Masters</th>
                              <th>type</th>
                              <th>Last Check</th>
                              <th>Notified Serial</th>
                              <th>Account</th> 
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
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/din/Desktop/Res/newtry/resources/views/domain.blade.php ENDPATH**/ ?>