<?php
	require ('db/connect.php');
	
include 'includes/header.inc.php';
	
?>
</head>

<body class="colorido-o">
	
	
	<div class="colorido container-fluid">
		<h3 class="text-center pull-left">Report Bug</h3>
		<h3 class="pull-right" click-animate="none" click-load="index"><span class="ion-android-list"> List</span></h3>
	</div>
	<div class="main-s " id="main-list">
	<div class="container panel panel-body colorido-t">
		<form id="report">
			<label>Name *</label>
			<input class="form-control" name="name" type="text" placeholder="Lionel Messi"><br>
			<label>Email *</label>
			<input type="email" placeholder="email@domain.com" name="email" type="email" class="form-control"><br>
			<label>Your Message *</label>
			<textarea class="form-control" placeholder="What you were doing when you encountered with bug/error?" name="message"></textarea><br>
			<div class="alert"></div>
			<div class="btn btn-default colorido" id="rep-submit">Send</div>
		</form>
	</div>
	</div>
	
	<div class="colorido container foot-c">
		<div class="col-md-3">
			<h5 class="text-center ion-bug"><span  click-animate="none" click-load="https://parassharmaa.github.io/Colorido.JS/" style="text-decoration:underline"> Colors By Colorido.JS</span></h5> </div>
		<div class="col-md-offset-9">
			<h5 class="text-center">&copy; 2016  <span style="font-weight:500">v 0.1.0</span></h5> 
		</div>
	</div>
	
	
	<?php
		include 'includes/js.inc.php';
	?>