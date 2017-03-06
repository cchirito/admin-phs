var root = $("#base_url").val();

$(document).ready(function() {
	$(".put_data_user").on('click', function() {
		$.ajax({
			url: root + 'get_users/1',
			method: 'POST',
			success: function(data) {
				$("#modal_data_user").html(data);
				$(".bs-example-modal-sm").modal('show');
			}
		});
	});

/*	$(".delete_data_user").on('click', function() {
		$()
	});*/
});