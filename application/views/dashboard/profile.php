			<!-- =============================================== -->

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Dashboard Admin
						<small>Information Panel</small>
					</h1>
					<h3 class="section-dashboard">Admin Profile</h3>
				</section>
				<!-- Main content -->
				<section class="content">
					<?php
						if($rep!=0){
					 ?>
					<div class="alert alert-<?php if($rep==1) echo "success"; else echo "danger"; ?> alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <?php if($rep==1) echo " <strong>Sukses!</strong> Berhasil Ganti Password"; else echo " <strong>Gagal!</strong> Silahkan Coba Kembali"; ?>
					  <!-- <strong>Sukses!</strong> Berhasil Ganti Password -->
					</div>					 
					 <?php 
						}
						?>			
					<?php echo form_open('Dashboard/editPass/',array('class' => 'form-horizontal')); ?>				
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Old Password</label>
					    <div class="col-sm-10">
					      <input type="text" name="old" placeholder="Old Password" class="form-control">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">New Password</label>
					    <div class="col-sm-10">
					      <input type="password" name="new" class="form-control" id="inputPassword" placeholder="New Password">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Re-Enter Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" name="new2" id="inputPassword" placeholder="Re-Enter Password" >
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label"></label>
					    <div class="col-sm-10">
					      <!-- <input type="email" class="form-control" id="inputPassword" placeholder="Email"> -->
					  		<input type="submit" value="Edit" class="btn btn-primary">					  
					    </div>					  
					  </div>
					</form>										   	
				</section>
				<br>
				<br>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

