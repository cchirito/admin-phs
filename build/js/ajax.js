var root = $("#base_url").val();

$(document).ready(function() {
	var table = $("#table_data_user").DataTable({
		"language": {
	            "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
	        },
		"ajax": root + 'get_users/'
	});

	$("body").on('submit', "#add_data_user", function(e) {
		e.preventDefault();

		var $this = $(this);

		$.ajax({
			url: $this.attr("action"),
			method: 'POST',
			dataType: 'json',
			data: $this.serialize(),
			success: function(data) {
				table.ajax.reload();
				$this[0].reset();
				if(data.type === "success") {
					new PNotify({
                                  title: 'Excelente',
                                  text: data.message,
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });
				} else {
					new PNotify({
                                  title: 'Error',
                                  text: data.message,
                                  type: 'error',
                                  styling: 'bootstrap3'
                              });
				}
			}
		})
	});

	$("body").on('click', ".get_data_user", function() {
		var $this = $(this);
		var id_data_user = $this.attr("data-id");
		$.ajax({
			url: root + 'get_users/' + id_data_user,
			method: 'POST',
			success: function(data) {
				$("#modal_data_user").html(data);
				$(".bs-example-modal-sm").modal('show');
			}
		});
	});

	$("body").on('submit', "#put_data_user", function(e) {
		e.preventDefault();

		var $this = $(this);
		var form_data_user = $this.serialize();

		$.ajax({
			url: $this.attr("action"),
			method: "POST",
			dataType: 'json',
			data: form_data_user,
			success: function(data) {
				$this.find(".close_form").trigger('click');
				table.ajax.reload();
				if(data.type === "success") {
					new PNotify({
                                  title: 'Excelente',
                                  text: data.message,
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });
				}
			}
		});	
	});
});