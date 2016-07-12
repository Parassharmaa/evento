<?php
	require ('db/connect.php');
	include 'includes/header.inc.php';
	$query = "SELECT event_name, event_date, event_token, id FROM em_events ORDER BY id DESC";
	$result = $db->query($query);
	
?>
</head>

<body class="colorido-o">
	<div id="mail-list">
	<div class="modal fade" id="new-event" tabindex="-1" role="dialog">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header colorido">
				<button type="button" class="close" style="color:#fff" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add New Event</h4>
			  </div>
			  <div class="modal-body colorido-t">
			  <form id="event-create">
				<label>Event Type</label>
			  	<select name="event-type" class="form-control">
					<option>Dinner</option>	
					<option>Corporate</option>	
					<option>Wedding</option>
					<option>Birthday</option>
					<option>Other</option>
			  	</select><br>
			  	<label>Event Name</label>
			  	<input type="text" name="event-name" class="form-control" placeholder="Mega Show, Night-Mega Party"><br>
				<label>Event Date</label><br>
				<input type="date" name="event-date" class="form-control" placeholder="Event Date">
				  <div class="alert"></div>
			  </form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary colorido" id="create">Create</button>
			  </div>
			</div>
		  </div>
	</div>
	<div class="modal fade" id="delete-event" tabindex="-1" role="dialog">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header colorido">
				<button type="button" class="close" style="color:#fff" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><span class="ion-trash-a colorido"></span> Delete Event</h4>
			  </div>
			  <div class="modal-body">
				<p>All Data Will Be Lost!</p>
			  <div class="del-status"></div>
				</div>
			  <div class="modal-footer"><center>
			  <div class="row" style="padding:20px">
			  	<button type="button" class="btn btn-defualt pull-left" data-dismiss="modal" aria-label="Close"><span class="ion-close-circled"></span> No</button>
				<button type="button" event-delete="" class="btn btn-primary colorido pull-right" id="confirm"><span class="ion-ios-checkmark-outline"></span> Yes</button>
			  </div>
			  </center>
			  </div>
			</div>
		  </div>
	</div>
	<div class="colorido container-fluid">
		<h3 class="text-center" click-animate="none" click-load="index">Evento <small class="colorido">Manage with ease!</small></h3>
	</div>
	<div class="main-s ">
	<div class="container-fluid  panel panel-body colorido-t">
			<center><div class="btn btn-info colorido" data-toggle="modal" data-target="#new-event"><span class="ion-plus"></span>&nbsp;&nbsp;Create Event</div></center><br>
			<div id="list-load" class="container">
			<ul class="list-group" style="min-height:30vw" id="list">
				<?php 
					if($result->num_rows>0) {
						while($data=$result->fetch_assoc()) {
							?>
					<li class="list-group-item row e-list">
					  <a href="event-control?event_token=<?php echo $data['event_token']; ?>" class="colorido-t"><h4 class="col-md-6"><span class="badge colorido"><?php echo date("d M, Y",strtotime($data['event_date'])) ?></span><span class="e-title"> <?php echo $data['event_name'];?></span></h4></a>
					  <h4 data-toggle="modal" data-target="#delete-event"  delete-key="<?php echo $data['event_token'];?>" class="col-md-6 ion-trash-a text-right del-icon"></h4>
				  	</li>
				<?php
						}
					}
				
				else {
					echo "<hr><h4 class='text-center ion-android-list'>  Your Event List Is Empty</h4>";
				}
				?>
			</ul>
		</div>
	</div>
	</div>
	
	<div class="colorido container foot-c">
		<div class="col-md-3">
			<h5 class="text-center ion-bug"><span  click-animate="none" click-load="report" style="text-decoration:underline"> Report Bug</span></h5> </div>
		<div class="col-md-offset-9">
			<h5 class="text-center">&copy; 2016  <span style="font-weight:500">v 0.1.0</span></h5> </div>
	</div>
	</div>
	
	<?php
		include 'includes/js.inc.php';
	?>