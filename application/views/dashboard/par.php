			<!-- =============================================== -->

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Dashboard Admin
						<small>Information Panel</small>
					</h1>
					<h3 class="section-dashboard">Participant List</h3>
				</section>
				<!-- Main content -->
				<section class="content">
					<table id="allAcc" class="table table-condensed" width="100%">
			        <thead>
			            <tr>
			                <th>No</th>
			                <th>Full Name</th>
			                <th>Affiliation</th>
			                <th>Category</th>
			                <th>Category ID</th>
			                <th>Contact</th>
			                <th>Paper</th>
			                <!-- <th>Payment</th> -->
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
			                <th>No</th>
			                <th>Full Name</th>
			                <th>Affiliation</th>
			                <th>Category</th>
			                <th>Category ID</th>
			                <th>Contact</th>
			                <th>Paper</th>
			                <!-- <th>Payment</th> -->
			            </tr>
			        </tfoot>
			        <tbody>
			        		<?php $i=1;foreach($data as $list){
			        			?>
			        		<tr>
			        			<td><?php echo $i++; ?></td>
			        			<td><?php echo $list['name']; ?></td>
			        			<td><?php echo $list['affiliation']; ?></td>
			        			<td><?php echo $list['category']; ?></td>
			        			<td><?php echo $list['studentid'].$list['ieeeid']; ?></td>
			        			<td><?php echo $list['email']."/".$list['phone']; ?></td>
			        			<td><a tabindex="0" class="btn btn-sm btn-success pop" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" title="Paper Title" data-content="<?php echo $list['papertitle']; ?>"><?php echo $list['paperid']; ?></a></td>
			        			<!-- <td>
									 <center><a title="Payment Detail" target="_blank" class="btn btn-primary" href="<?php echo base_url('assets/uploads/'.$list['payment']);?>"><span class="glyphicon glyphicon-file"></span></a></center>
			        			</td> -->
			        		</tr>	        			
			        		<?php 
			        			} 
			        		 ?>    			
			        </tbody>
			   	</table>
				</section>
				<br>
				<br>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

