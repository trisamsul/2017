			<!-- =============================================== -->

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Dashboard Admin
						<small>Information Panel</small>
					</h1>
					<h3 class="section-dashboard">Reviewer Form</h3>
				</section>
				<!-- Main content -->
				<section class="content">
					<?php if($this->uri->segment(3)=="add"){ ?>
					<?php echo form_open('Dashboard/ActRev/addAct/',array('class' => 'form-horizontal'));} ?>
				<?php if($this->uri->segment(3) == "edit"){  ?>
					<?php echo form_open('Dashboard/ActRev/editAct/'.$this->uri->segment(4),array('class' => 'form-horizontal'));} ?>				
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Reviewer Name</label>
					    <div class="col-sm-10">
					      <input type="text" name="sci_com_name" value="<?php if(isset($edit)) echo $edit['sci_com_name']; ?>" placeholder="Full Name (Without Title)" class="form-control">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Affiliation</label>
					    <div class="col-sm-10">
					      <input type="text" name="sci_com_aff" class="form-control" id="inputPassword" placeholder="Affiliation" value="<?php if(isset($edit)) echo $edit['sci_com_aff']; ?>">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Email</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" name="sci_com_email" id="inputPassword" placeholder="Email" value="<?php if(isset($edit)) echo $edit['sci_com_email']; ?>">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label"></label>
					    <div class="col-sm-10">
					      <!-- <input type="email" class="form-control" id="inputPassword" placeholder="Email"> -->
					  		<input type="submit" value="Submit" class="btn btn-primary">					  
					    </div>					  
					  </div>
					</form>										   	
				</section>
				<br>
				<br>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

