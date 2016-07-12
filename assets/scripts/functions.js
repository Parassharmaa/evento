
$(document).ready(function() {
	//create_event

	$('#create').click(function() {
		$('#create').text("Creating..");
		$data = $('#event-create').serialize();
		$.post('functions/create_event.php', $data, response);
		
		function response(res) {
			if(res==0) {
				$('.alert').text("Please Fill All the fields");
				$('#create').text("Create");
			}
			
			else if(res=="error") {
				$('.alert').text("An error occured! please try again");
				$('#create').text("Create");
			}
			
			else {
				$('#list-load').load('index.php #list');
				$('#create').text("Create");
				$('#event-create')[0].reset();
				$('.modal').modal('hide');
			}
		}
	})
	
	//delete_event

$('[event-delete]').click(function() {
	$('.del-status').text('Deleting');
	$target = this.getAttribute('event-delete');
	$data="token="+$target;
	$.post('functions/delete_event.php', $data, response);
	
	function response(res) {
		if (res) {
			
			window.location.href='index';
		}
		
		else {
			alert('Deletion failed, Try Again');
		}
	}
	
	
})



//adding hosts/ venue/ notes/ caterer
$('[data-from]').click(function() {
	$self  = $(this);
	$(this).text("Updating..");
	$from = this.getAttribute('data-from');
	$to = this.getAttribute('data-to');
	$getd = this.getAttribute('data-s');
	$datap = $("#"+$from).serialize();
	$data = $datap +"&token="+$getd;
	$.post("functions/"+$to,$data,response);
	
	
	function response(res) {
		if(res==0) {
				$('.alert').text("Please Fill the required fields");
				$($self).text("Update");
			}
			
			else if(res=="error") {
				$('.alert').text("An error occured! please try again");
				$($self).text("Update");
			}
			
			else {
				
				$('.em-main').load('event-control.php?event_token='+$getd+' #re-up');
				$('.modal').modal('hide');
				$($self).text("Update");
			}
		}
	
})

//add guest
$('[gdata-from]').click(function() {
	$self  = $(this);
	$(this).text("Updating..");
	$from = this.getAttribute('gdata-from');
	$to = this.getAttribute('gdata-to');
	$getd = this.getAttribute('gdata-s');
	$datap = $("#"+$from).serialize();
	$data = $datap +"&token="+$getd;
	$.post("functions/"+$to,$data,response);

	
	function response(res) {
		if(res==0) {
				$('.alert').text("Please Fill the required fields");
				$($self).text("Update");
			}
			
			else if(res=="error") {
				$('.alert').text("An error occured! please try again");
				$($self).text("Update");
			}
			
			else {
				$('.alert').text("Guest Added Succesfully. Add next.");
				$($self).text("Update");
				$('.container').load('guests?event_token='+$getd+' #guestUp');
				$('#'+$from)[0].reset();
				
			}
		}
	
})


//delete confirmation

$('[delete-key]').click(function() {
	$dkey = this.getAttribute('delete-key');
	$('#confirm').attr('event-delete',$dkey);
})


//del guest
$('#delGuest').click(function() {
	$getd = this.getAttribute('data-s');
	$data = $('#mdel').serialize();
	$.post("functions/del_guest",$data, response);
	
	function response(res) {
		if(res) {
			$('.container').load('guests?event_token='+$getd+' #guestUp');
			$('.modal').modal('hide');
			check();
		}
		
		else {
			alert('delete Failed');
		}
	}
})

//rep submit


$('#rep-submit').click(function() {
	$data = $('#report').serialize();
	$.post("functions/bug-report",$data, response);
	
	function response(res) {
		if(res==1) {
			$('.alert').text(res);
			 $('#report')[0].reset();
		}
		
		else {
			$('.alert').text(res);
			 $('#report')[0].reset();
		}
	}
})
function alertTime() {
	$('.alert').text('');
}
setInterval(alertTime,5000);

})