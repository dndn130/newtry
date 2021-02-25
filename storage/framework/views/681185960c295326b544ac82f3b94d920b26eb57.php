<?php $__env->startSection('content'); ?>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Records</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Records</li>
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
                        <!-- <div class="card-header">
                          <h3 class="card-title">Data Zones</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                          <!-- modal -->
                            <div class="container">
                              <!-- Trigger the modal with a button -->                          
                              
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Domain ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Content</th>
                                <th>Ttl</th>
                                <th>Prio</th>
                                <th>Change Date</th>
                                <th>Disabled</th>
                                <th>Order Name</th>
                                <th>Auth</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 

                              // mengubah JSON menjadi array dari function
                               //$data = json_decode($output, TRUE);
                               
                                foreach($record as $d){ 
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
                                    <?php 
                                    echo $d['prio']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['change_date']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['disabled']; 
                                    ?>                                        
                                    </td>
                                <td>
                                    <?php 
                                    echo $d['ordername']; 
                                    ?>                                        
                                    </td>   
                                <td>
                                    <?php 
                                    echo $d['auth']; 
                                    ?>                                        
                                    </td>                                   
                            </tr>
                            <?php 
                                }
                               ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Domain ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Content</th>
                                <th>Ttl</th>
                                <th>Prio</th>
                                <th>Change Date</th>
                                <th>Disabled</th>
                                <th>Order Name</th>
                                <th>Auth</th>
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

<?php echo $__env->make('layouts.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/din/Desktop/Res/newtry/resources/views/record.blade.php ENDPATH**/ ?>