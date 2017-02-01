			<!-- =============================================== -->

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Dashboard Admin
						<small>Information Panel</small>
					</h1>
					<h3 class="section-dashboard">News Form</h3>
				</section>
				<!-- Main content -->
				<section class="content">
					<?php if($this->uri->segment(3)=="add"){ ?>
					<?php echo form_open('Dashboard/ActNews/addAct/',array('class' => 'form-horizontal'));} ?>
				<?php if($this->uri->segment(3) == "edit"){  ?>
					<?php echo form_open('Dashboard/ActNews/editAct/'.$this->uri->segment(4),array('class' => 'form-horizontal'));} ?>				
					  <div class="form-group">
					    <label class="col-sm-2 control-label">News Title</label>
					    <div class="col-sm-10">
					      <input type="text" name="title" value="<?php if(isset($edit)) echo $edit['title']; ?>" placeholder="Title" class="form-control">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Date</label>
					    <div class="col-sm-10">
					      <input type="date" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="inputPassword" placeholder="Date" value="<?php if(isset($edit)) echo $edit['date']; ?>">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Description</label>
					    <div class="col-sm-10">
					      <textarea name="description" class="form-control" placeholder="News Description..." rows="7"><?php if(isset($edit)) echo $edit['description']; ?></textarea>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label"></label>
					    <div class="col-sm-10">
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

