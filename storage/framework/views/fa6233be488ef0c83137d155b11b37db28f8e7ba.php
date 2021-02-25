<?php $__env->startSection('content'); ?>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Records</h1>
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
                          <div class="card-header border-0">
                            <h3 class="card-title">Domain</h3>
                          </div>
                          <div class="card-body table-responsive p-0">
                            <!-- modal -->
                            <div class="container">
                            	
	                           	<table>
	                           		<?php
		                            	//$data = json_decode($output,true);
		                            	foreach ($output as $d){   
                            	 	 ?>
	                           		  <tr>
	                                	<td>Name</td><td>=</td><td><?php echo $d['id'];  ?></td>
	                              	</tr>
	                              	<tr>
	                                	<td>Type</td><td>=</td><td><?php echo $d['kind'];  ?></td>
	                              	</tr>
	                              	<tr>
	                                	<td>Ttl</td><td>=</td><td><?php echo $d['name'];  ?></td>
	                              	</tr>	                             	
	                           	</table>
		                          <?php
                               } 
                              ?>

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
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/din/Desktop/Res/newtry/resources/views//records.blade.php ENDPATH**/ ?>