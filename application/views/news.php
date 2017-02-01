</style>
<div class="container con950">
  <h1 class="head1">News</h1>
  <hr>
  	<?php foreach($news as $list){ ?>
	<div class="row" style="font-family:'Roboto'; margin-left: 10px; text-align: justify">
		<h3 style="color: #FF5722; font-weight: bold;"><?php echo $list['title'] ?></h3>
		<h4><?php echo date('F jS, Y',strtotime($list['date'])); ?></h4>
		<?php echo $list['description']; ?>
		<br>
		<br>
		<br>
		<br>
	</div>
  	<?php } ?>
 </div>

<br>
<br>
<br>