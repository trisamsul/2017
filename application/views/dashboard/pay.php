			<!-- =============================================== -->

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Dashboard Admin
						<small>Information Panel</small>
					</h1>
					<h3 class="section-dashboard">Submission List</h3>
				</section>
				<!-- Main content -->
				<section class="content">
					<table id="allAcc" class="table table-bordered" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>No</th>
			                <th>Full Name</th>
			                <th>Affiliation</th>
			                <th>Email</th>
			                <th>Category</th>
			                <th>Category ID</th>
			                <th>Paper</th>			                
			                <th>Payment</th>
			                <th>Action</th>
			        </thead>
			        <tfoot>
			            <tr>
			                <th>No</th>
			                <th>Full Name</th>
			                <th>Affiliation</th>
			                <th>Email</th>
			                <th>Category</th>
			                <th>Category ID</th>
			                <th>Paper</th>			                
			                <th>Payment</th>
			                <th>Action</th>
			            </tr>
			        </tfoot>
			        <tbody>
			        		<?php $i=1;foreach($data as $list){
			        			?>
			        		<tr class="<?php if($list['status'] == 1) echo "success"; else echo "danger";?>">
			        			<td><?php echo $i++; ?></td>
			        			<td><?php echo $list['name']; ?></td>
			        			<td><?php echo $list['affiliation']; ?></td>
			        			<td><?php echo $list['email']; ?></td>
			        			<td><?php echo $list['category']; ?></td>
			        			<td><?php echo $list['studentid'].$list['ieeeid']; ?></td>
			        			<td><center><a tabindex="0" class="btn btn-sm btn-success pop" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" title="Paper Title" data-content="<?php echo $list['papertitle']; ?>"><?php echo $list['paperid']; ?></a></center></td>			        			
			        			<td>
									 <center><a title="Payment Detail" target="_blank" class="btn btn-primary" href="<?php echo base_url('assets/uploads/'.$list['payment']);?>"><span class="glyphicon glyphicon-file"></span></a></center>
			        			</td>
			        			<td>
									<center><button title="<?php if($list['status'] == 0) echo "Verification"; else echo "Unverification";?>" onclick="location.href='<?php echo site_url('Dashboard/ActPay/activate/'.$list['id']);?>'" class="btn btn-<?php if($list['status'] == 1) echo "warning"; else echo "success";?>">
			              		<span class="glyphicon glyphicon-<?php if($list['status'] == 0) echo "ok"; else echo "remove";?>" aria-hidden="true"></span></button>
			              		<a class="btn btn-danger" href="javascript:void(0);" onclick="deletes(<?php echo $list['id'];?>);"><span class="glyphicon glyphicon-trash" aria-hidden="true" ></span></a>
			              		</center>
			        			</td>
			        		</tr>	        			
			        		<?php 
			        			} 
			        		 ?>        			
			        </tbody>
			   	</table>
<script type="text/javascript">
	var url="<?php echo site_url();?>";
	function deletes(id){
		swal({
		  title: "Are you sure?",
		  text: "You will not be able to recover this data again!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "Yes, delete it!",
		  closeOnConfirm: false
		},
		function(){
		   window.location = url+"Dashboard/ActPay/delete/"+id+"/";
		});
	}
</script>			   	
				</section>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

