<footer class="main-footer">
	<div class="pull-right hidden-xs">
		Supported by<b> CodeIgniter and <a href="http://almsaeedstudio.com">AdminLTE</a></b>
	</div>
	<strong>&copy; 2016 - 2017 <a href="#">ICSITech 2017 Developer Team</a></strong>
</footer>
		</div>
		<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/js/adminlte/app.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highchart.js"></script>
<script>
	$('.pop').popover();	
	$('#allAcc').DataTable();
	$(function () {
	    Highcharts.chart('myChart', {
	        chart: {
	            plotBackgroundColor: null,
	            plotBorderWidth: null,
	            plotShadow: true,
	            type: 'pie'
	        },
	        title: {
	            text: 'ICSITech2017 Verified Participant'
	        },
	        tooltip: {
	            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	        },
	        plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: 'pointer',
	                dataLabels: {
	                    enabled: true,
	                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	                    style: {
	                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	                    }
	                }
	            }
	        },
	        series: [{
	            name: 'Participant',
	            colorByPoint: true,
	            data: [{
	                name: 'Verified',
	                y: <?php if(isset($v)) echo $v; else echo "0"; ?>,
	                color :'yellow'
	            }, {
	                name: 'Unverified',
	                y: <?php if(isset($v)) echo $uv; else echo "0";?>,
	                color : 'skyblue'
	                // sliced: true
	            }]
	        }]
	    });
	});
</script>

</body>
</html>