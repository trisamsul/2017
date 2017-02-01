			<!-- =============================================== -->

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Dashboard Admin
						<small>Information Panel</small>
					</h1>
					<h3 class="section-dashboard">News List</h3><a href="<?php echo site_url('Dashboard/ActNews/add'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true" ></span>&nbsp;Add News</a>
				</section>
				<!-- Main content -->
				<section class="content">
					<table id="allAcc" class="table table-condensed" width="100%">
			        <thead>
			            <tr>
			                <th>No</th>
			                <th>Title</th>
			                <th>Date</th>
			                <th>Description</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
			                <th>No</th>
			                <th>Title</th>
			                <th>Date</th>
			                <th>Description</th>
			                <th>Action</th>
			            </tr>
			        </tfoot>
			        <tbody>
			        		<?php $i=1;foreach($data as $list){
			        			?>
			        		<tr>
			        			<td><?php echo $i++; ?></td>
			        			<td><?php echo $list['title']; ?></td>
			        			<td><?php echo $list['date']; ?></td>
			        			<td><?php echo $list['description']; ?></td>
			        			<td>
			        				<button class="btn btn-warning" onclick="location.href='<?php echo site_url('Dashboard/ActNews/edit/'.$list['id']);?>'"><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span></button>		
									 <a class="btn btn-danger" href="javascript:void(0);" onclick="deletes(<?php echo $list['id'];?>);"><span class="glyphicon glyphicon-trash" aria-hidden="true" ></span></a>
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
		   window.location = url+"Dashboard/ActNews/del/"+id+"/";
		});
	}
</script>						   	
				</section>
				<br>
				<br>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

