			<!-- =============================================== -->

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Dashboard Admin
						<small>Information Panel</small>
					</h1>
					</section>
				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-lg-4 col-xs-6">
						<!-- small box -->
							<div class="small-box bg-aqua">
								<div class="inner">
									<h3><?php echo $tRev; ?></h3>
									<p>Scientific Committee</p>
								</div>
								<div class="icon">
									<i class="fa fa-users "></i>
								</div>
								<a href="<?php echo site_url('Dashboard/reviewer'); ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-4	 col-xs-6">
						<!-- small box -->
							<div class="small-box bg-red">
								<div class="inner">
									<h3><?php echo $tPar; ?></h3>
									<p>Listed Participants</p>
								</div>
								<div class="icon">
									<i class="fa fa-list-ul "></i>
								</div>
								<a href="<?php echo site_url('Dashboard/Participant'); ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
			
						<!-- ./col -->
					</div>				
					<div class="row">
						<div class="col-md-12">
							<div class="box box-default">
								<div class="box-header with-border">
									<h3 class="box-title">Participant Data</h3>
									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									</div>
								</div>
								<div class="box-body collapsed-box">
									<div id="myChart" style="width:100%; height:400px;"></div>
									<!-- /.row -->
								</div>
								<!-- /.box-body -->
							<!-- /.footer -->
							</div>		
						</div>	
					</div>
				</section>
				<br>
				<br>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

