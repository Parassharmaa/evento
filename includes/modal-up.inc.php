<!--Host add -->
		<div class="modal fade" id="up-hosts" tabindex="-1" role="dialog">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header colorido">
				<button type="button" class="close" style="color:#fff" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Update Hosts</h4>
			  </div>
			  <div class="modal-body colorido-t">
			 <form id="host-e">
				<label>Name</label>
			  	<input type="text" value="<?php echo $data['host_name'];?>" class="form-control" name="host-name" placeholder="Enter Host/Client Name"><br>
			  	<label>Number</label>
			  	<input type="text" value="<?php echo $data['host_number'];?>"  class="form-control" name="host-number" placeholder="+91-XXXX-XX-XXXX"><br>
			  	<label>Email</label>
			  	<input type="text" value="<?php echo $data['host_email'];?>"   class="form-control" name="host-email" placeholder="name@domain.com"><br>
			  	<label>Address</label>
				  <textarea type="text" name="host-address" class="form-control" placeholder=""><?php echo $data['host_address'];?></textarea>
			  <div class="alert"></div>
				 
				<center><button type="button" class="btn btn-primary colorido" data-from="host-e" data-to="host_up" data-s="<?php echo $data['event_token'];?>" >Update</button></center>	
			  </form>
			  </div>
			  
			</div>
		  </div>
	</div>
			
<!--Venue-->
		<div class="modal fade" id="up-venue" tabindex="-1" role="dialog">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header colorido">
				<button type="button" class="close" style="color:#fff" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Update Venue</h4>
			  </div>
			 <div class="modal-body colorido-t">
			 <form id="venue-e">
				<label>Name</label>
			  	<input type="text"  class="form-control" value="<?php echo $data['venue_name'];?>" name="venue-name" placeholder="Venue Name / Title"><br>
			  	<label>Number</label>
			  	<input type="text" value="<?php echo $data['venue_number'];?>" class="form-control" name="venue-number" placeholder="+91-XXXX-XX-XXXX"><br>
			  	<label>Email</label>
			  	<input type="text" value="<?php echo $data['venue_email'];?>"  class="form-control" name="venue-email" placeholder="name@domain.com"><br>
			  	<label>Address</label>
				  <textarea type="text" name="venue-address" class="form-control" placeholder=""></textarea>
			  <div class="alert"><?php echo $data['venue_address'];?></div>
				 
				<center><button type="button" class="btn btn-primary colorido" data-from="venue-e" data-to="venue_up" data-s="<?php echo $data['event_token'];?>">Update</button></center>
			  </form>
				</div>
			  </div>
			  
			</div>
		  </div>
	</div>
		
		<!--Caterer-->
		<div class="modal fade" id="up-caterer" tabindex="-1" role="dialog">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header colorido">
				<button type="button" class="close" style="color:#fff" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Update Caterer</h4>
			  </div>
			  <div class="modal-body colorido-t">
			  <form id="caterer-e">
				<label>Name</label>
			  	<input type="text" value="<?php echo $data['caterer_name'];?>"  class="form-control" name="caterer-name" placeholder="Enter Caterar Name"><br>
			  	<label>Number</label>
			  	<input type="text" value="<?php echo $data['caterer_number'];?>"   class="form-control" name="caterer-number" placeholder="+91-XXXX-XX-XXXX"><br>
			  	<label>Email</label>
			  	<input type="text" value="<?php echo $data['caterer_email'];?>"  class="form-control" name="caterer-email" placeholder="name@domain.com"><br>
			  	<label>Address</label>
				  <textarea type="text" name="caterer-address" class="form-control" placeholder=""></textarea>
			  <div class="alert"><?php echo $data['caterer_address'];?></div>
				 
				<center><button type="button" class="btn btn-primary colorido" data-from="caterer-e" data-to="caterer_up" data-s="<?php echo $data['event_token'];?>">Update</button></center>
			  </form>
			  </div>
			</div>
		  </div>
	</div>
		
		<!--Notes-->
		<div class="modal fade" id="up-notes" tabindex="-1" role="dialog">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header colorido">
				<button type="button" class="close" style="color:#fff" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add Notes</h4>
			  </div>
			  <div class="modal-body colorido-t">
			  <form id="notes-e">
				
			  
				  <textarea type="text" name="event-notes" class="form-control" placeholder=""><?php echo $data['event_notes']; ?><?php echo $data['event_notes'];?></textarea>
			  <div class="alert"></div>
				 
				<center><button type="button" class="btn btn-primary colorido" data-from="notes-e" data-to="notes_up" data-s="<?php echo $data['event_token'];?>">Update</button></center>
			  </form>
			  </div>
			 
			</div>
		  </div>
	</div>