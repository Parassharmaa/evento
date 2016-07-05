<?php
	if(isset($_GET['event_token'])) {
		$token = $_GET['event_token'];
		
	}
	   else  {
		   header('location:index');
	   }
	require('db/connect.php');
	
	
	
		
	
	$query = "SELECT * FROM em_events, em_hosts, em_venue, em_notes, em_caterer WHERE em_events.event_token = '$token' AND em_hosts.event_token = '$token' AND  em_venue.event_token = '$token' AND  em_caterer.event_token = '$token' AND  em_notes.event_token = '$token'";
	$result = $db->query($query);

	$data = $result->fetch_array();
	
	
	include 'includes/header.inc.php';
	
	
?>
	</head>

	<body>
		
		<?php include 'includes/modal-up.inc.php'; ?>
		<div class="colorido container-fluid">
			<h3 class="pull-left"><span class="e-title"><?php echo $data['event_name']; ?><span class="badge colorido"><?php echo date("d M, Y",strtotime($data['event_date']));?></span></h3>
			<h3 class="pull-right" click-animate="none" click-load="index"><span class="ion-android-list"> List</span></h3> </div>
		<div class="em-main">
		<div id="re-up" class="e-content container" >
			<div class="row">
				<div class="col-md-6">
					<div class="part panel panel-default">
						<div class="panel-heading colorido-t">
							<h4 class="text-center"><span class="ion-ios-body-outline"></span>  Host Name</h4> <span class="p-edit ion-edit" data-toggle="modal" data-target="#up-hosts"> Edit</span> </div>
						<div class="panel-body">
							<h4> <label>Name:</label>
							<?php echo $data['host_name'];?></h4>
							<h4><label>Email</label>:
							<?php echo $data['host_email'];?></h4>
							<h4><label>Number</label>:
							<?php echo $data['host_number'];?></h4>
							<h4><label>Address</label>:
							<?php echo $data['host_address'];?></h4> </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="part panel panel-default ">
						<div class="panel-heading colorido-t">
							<h4 class="text-center"><span class="ion-ios-home"></span>  Venue</h4> <span class="p-edit ion-edit" data-toggle="modal" data-target="#up-venue"> Edit</span> </div>
						<div class="panel-body">
							<h4><label>Name</label>:
							<?php echo $data['venue_name'];?></h4>
							<h4><label>Email</label>:
							<?php echo $data['venue_email'];?></h4>
							<h4><label>Number</label>:
							<?php echo $data['venue_number'];?></h4>
							<h4><label>Address</label>:
							<?php echo $data['venue_address'];?></h4> </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="part panel panel-default ">
						<div class="panel-heading colorido-t">
							<h4 class="text-center"><span class="ion-fork"></span>  Caterer</h4> <span class="p-edit ion-edit" data-toggle="modal" data-target="#up-caterer"> Edit</span> </div>
						<div class="panel-body">
							<h4><label>Name</label>:
							<?php echo $data['caterer_name'];?></h4>
							<h4><label>Email</label>:
							<?php echo $data['caterer_email'];?></h4>
							<h4><label>Number</label>:
							<?php echo $data['caterer_number'];?></h4>
							<h4><label>Address</label>:
							<?php echo $data['caterer_address'];?></h4> </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="part panel panel-default ">
						<div class="panel-heading colorido-t">
							<h4 class="text-center"><span class="ion-ios-list"></span>  Important Notes</h4> <span class="p-edit ion-plus" data-toggle="modal" data-target="#up-notes"> Add</span> </div>
						<div class="panel-body">
							<?php if($data['event_notes'] !=null) { echo "<h4>".$data['event_notes']."</h4>";} 
							else {
								echo "<h4 class='text-center'>No Notes Found</h4>";
							}  ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="colorido container-fluid help-tab">
			<h5 class="text-center ion-help" click-animate="none" click-load="report">  Report Error | 
				<span style="font-weight:500"> v 0.1.0</span></h5> </div>
		
		<?php 
		include 'includes/js.inc.php';
	?>