
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
				$('body').load('index.php#main-list');
			}
		}
	})
	
	//delete_event

$('[event-delete]').click(function() {
	$target = this.getAttribute('event-delete');
	$data="token="+$target;
	$.post('functions/delete_event.php', $data, response);
	
	function response(res) {
		if (res) {
			$('body').load('index.php#main-list');
		}
		
		else {
			alert('Deletion failed, Try Again')
		}
	}
	
	
})



//adding hosts/ venue/ notes/ caterer
$('[data-from]').click(function() {
	$self  = $(this);
	$(this).text("Updating");
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
				
				$('body').load('event-control.php?event_token='+$getd+'#re-up');
			}
		}
	
})

//delete confirmation

$('[delete-key]').click(function() {
	$dkey = this.getAttribute('delete-key');
	$('#confirm').attr('event-delete',$dkey);
})

})