<?php
	if(isset($_GET['event_token'])) {
		$token = $_GET['event_token'];
		
	}
	   else  {
		  header('location:redirect/404');
	   }
	require('db/connect.php');
	$query = "SELECT * FROM em_events WHERE event_token = '$token'";
	$result = $db->query($query);
$data = $result->fetch_array();
	if($data===null) {
		 header('location:redirect/404');
	}
	$query2  = "SELECT * FROM em_guests WHERE event_token = '$token'";
	$result2  = $db->query($query2);
	
	include 'includes/header.inc.php';?>

	<body>
		<div class="modal animated slideIn fade" id="add-guest" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header colorido">
						<button type="button" class="close" style="color:#fff" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Add a Guests</h4> </div>
					<div class="modal-body colorido-t">
						<form id="addGuest">
							<label>Name</label>
							<div style="display:flex">
								<select name="event-title" class="form-control" style="width:90px">
									<option>Mr.</option>
									<option>Mrs.</option>
									<option>Miss</option>
									<option>Ms.</option>
									<option>Mr. & Mrs.</option>
									<option>Dr.</option>
									<option>Prof.</option>
									<option>Er.</option>
								</select>
								<input type="text" name="guest-name" class="form-control" placeholder="First and Last Name"> </div>
							<br>
							<label>Seats</label>
							<br>
							<input type="number" name="guest-seat" class="form-control" placeholder="2">
							<label>Email</label>
							<input type="email" name="guest-email" class="form-control" placeholder="email@domain.com">
							<br>
							<label>Phone</label>
							<input type="text" name="guest-phone" class="form-control" placeholder="xxx-xxxxxxx">
							<br>
							<label>Address</label>
							<textarea name="guest-address" class="form-control"></textarea>
							<label>Comment</label>
							<textarea name="guest-comment" class="form-control"></textarea>
							<div class="alert"></div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary colorido" gdata-from="addGuest" gdata-to="add_guest" gdata-s="<?php echo $token;?>">Add</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal animated slideIn fade" id="edit-guest" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header colorido">
						<button type="button" class="close" style="color:#fff" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Guest</h4> </div>
					<div class="modal-body colorido-t">
						This is under contruction. Don't use!
						<form id="addGuest">
							<label>Name</label>
							<div style="display:flex">
								<select name="event-title" class="form-control" style="width:90px">
									<option>Mr.</option>
									<option>Mrs.</option>
									<option>Miss</option>
									<option>Ms.</option>
									<option>Mr. & Mrs.</option>
									<option>Dr.</option>
									<option>Prof.</option>
									<option>Er.</option>
								</select>
								<input type="text" name="guest-name" class="form-control" placeholder="First and Last Name"> </div>
							<br>
							<label>Seats</label>
							<br>
							<input type="number" name="guest-seat" class="form-control" placeholder="2">
							<label>Email</label>
							<input type="email" name="guest-email" class="form-control" placeholder="email@domain.com">
							<br>
							<label>Phone</label>
							<input type="text" name="guest-phone" class="form-control" placeholder="xxx-xxxxxxx">
							<br>
							<label>Address</label>
							<textarea name="guest-address" class="form-control"></textarea>
							<label>Comment</label>
							<textarea name="guest-comment" class="form-control"></textarea>
							<div class="alert"></div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary colorido">">Update</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="deleteGuest" tabindex="-1" role="dialog">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header colorido">
				<button type="button" class="close" style="color:#fff" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <h4 class="modal-title"><span class="ion-trash-a colorido"></span> Are you sure about this deletion?</h4>
			  </div>
			  <div class="modal-body">
				<p>All Data Will Be Lost!</p>
			  <div class="del-status"></div>
				</div>
			  <div class="modal-footer"><center>
			  <div class="row" style="padding:20px">
			  	<button type="button" class="btn btn-defualt pull-left" data-dismiss="modal" aria-label="Close"><span class="ion-close-circled"></span> No</button>
				<button type="button" class="btn btn-primary colorido pull-right" id="delGuest" data-s="<?php echo $token;?>"><span class="ion-ios-checkmark-outline"></span> Yes</button>
			  </div>
			  </center>
			  </div>
			</div>
		  </div>
	</div>
		<div class="colorido container-fluid">
			<h3 class="pull-left"><span class="e-title"><?php echo $data['event_name']; ?><span class="badge colorido"><?php echo date("d M, Y",strtotime($data['event_date']));?></span></h3>
			<h3 class="pull-right" click-animate="none" click-load="index"><span class="ion-android-list"> List</span></h3> </div>
		<div class="container">
			<div id="guestUp">
			<div class="row">
				<h3 class="text-center pull-left colorido-t">Guests List</h3>
				
				<h3 class="text-center pull-right btn btn-primary colorido" data-target="#add-guest" data-toggle="modal"><span class="ion-plus"></span> Add New</h3> 
				<h3 class="text-center pull-right btn btn-primary colorido" data-target="#deleteGuest" data-toggle="modal"><span class="ion-ios-trash"></span> Delete Selected</h3>
			</div>
			<hr>
			<div class=" table-responsive">
				<form id="mdel">
				<table id="guest-list" class="table table-striped table-hover">
					<thead class="colorido">
						<tr class="headings">
							<th>
								<input type="checkbox" id="selectall"> </th>
							<th>Sr. No.</th>
							<th>Last Name</th>
							<th>Name</th>
							<th>Seats</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Address</th>
							<th>Comment</th>
							<th>Edit</th>
							
							
						</tr>
					</thead>
					<?php
			if($result2->num_rows>0) {
				$i = 1;
				while ($row = $result2->fetch_assoc()) {
					
					?>
						<tbody>
							<tr class="even pointer">
								<td>
									<input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['guest_id']; ?>"></td>
								<td class="">
									<?php echo $i; ?>
								</td>
								<td>
									<?php 
										$name = $row['guest_name1'];
										$raw = explode(' ',$name);
										$fname = $raw[0];
										$lname  = $raw[count($raw)-1];;
									  echo $lname;
									?>
								</td>
								<td class="">
									<?php
										
										echo $row["guest_title1"]." ". $fname;
									?>
								</td>
								<td class="">
									<?php echo $row['guest_seats'];?>
								</td>
								<td class="">
									<?php echo $row['guest_phone']; ?>
								</td>
								<td class="">
									<?php echo $row['guest_email']; ?>
								</td>
								<td class="">
									<?php  echo $row['guest_address'];?>
								</td>
								<td class="">
									<?php echo $row['guest_notes']; ?>
								</td>
								<td class="">
									<span data-target="#edit-guest" data-toggle="modal" class="ion-edit"></span>
								</td>
							</tr>
						</tbody>
						<?php
				$i++;}
			}else {
				echo "<td class='text-center colorido-t' colspan='9'><h4>You have no guests in your guest list! </h4></td>";
			}
			
		?>
				</table>
				</form>
			</div>
			</div>
		</div>
		<?php include 'includes/js.inc.php'; ?>