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
				if(data.type === "success") {
					new PNotify({
                                  title: 'Excelente',
                                  text: data.message,
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });
					table.ajax.reload();
					$this[0].reset();
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

	/* PAGINAS */

	var reload_pages = function() {
		$("#page-sortable").load(location.href + " #page-sortable >*","");
	}

	$( "#page-sortable" ).sortable({
		update: function (event, ui) {
			var order = $(this).sortable('toArray', {
				attribute: 'data-id'
			});

			size = order.length;

			$.ajax({
				url: root + 'put_position_pages',
				method: "POST",
				dataType: 'json',
				data: {
					'size-sortable': size,
					'id-sortable': order
				},
				success: function(data) {
					if(data.type === "success") {
						new PNotify({
	                             			title: data.title,
		                                     text: data.message,
		                                     type: data.type,
		                                     styling: 'bootstrap3'
		                             });
					}
				}
			});	

		}
	});

	$("body").on('click', ".btn_page_edit", function() {
		var $this = $(this);
		$this.hide();
		$this.siblings().show();
		$this.parent().parent().children(".page-block").hide();
		$this.parent().parent().siblings().children(".page-block").css('z-index', '20');
		$("#page-sortable").sortable("disable");
		$this.parent().parent().find("[contenteditable]").addClass("active");
	});

	$("body").on('click', ".btn_page_edit_cancel", function() {
		$("#page-sortable").sortable("enable");
		reload_pages();
	});

	$("body").on('click', ".btn_page_edit_confirm", function() {
		var $this = $(this);
		var array_content = [];
		var id = $this.parent().parent().attr('data-id');

		$this.parent().parent().find("[contenteditable]").each(function() {
			array_content.push($(this).html());
		});

		$.ajax({
			url: root + 'put_pages',
			method: "POST",
			dataType: 'json',
			data: {
				'id-sortable': id,
				'array-sortable': array_content
			},
			success: function(data) {
				if(data.type === "success") {
					new PNotify({
                             			title: data.title,
	                                     text: data.message,
	                                     type: data.type,
	                                     styling: 'bootstrap3'
	                             });

					$("#page-sortable").sortable("enable");
					reload_pages();

				} else {
					new PNotify({
                             			title: data.title,
	                                     text: data.message,
	                                     type: data.type,
	                                     styling: 'bootstrap3'
	                             });
				}
			}
		});	

		
	});

	$("body").on('click', ".btn_page_edit_state", function(e) {
		e.preventDefault();

		var $this = $(this),
			id = $this.parent().parent().attr("data-id"),
			state = $this.attr("data-state");
			
			$.ajax({
				url: root + "put_state_pages",
				method: "POST",
				dataType: 'json',
				data: {
					'id_page': id,
					'state_page': state
				},
				success: function(data) {
					if(data.type === "success") {
						new PNotify({
							title: data.title,
							text: data.message,
							type: data.type,
							styling: 'bootstrap3'
						});
						reload_pages();
					} else {
						new PNotify({
							title: data.title,
							text: data.message,
							type: data.type,
							styling: 'bootstrap3'
						});
					}
				}
			});	
		//reload_pages();
	});

	$("body").on('submit', "#add_data_page", function(e) {
		e.preventDefault();

		var $this = $(this);

		$.ajax({
			url: $this.attr("action"),
			method: "POST",
			dataType: 'json',
			data: $this.serialize(),
			success: function(data) {
				if(data.type === "success") {
					new PNotify({
						title: data.title,
						text: data.message,
						type: data.type,
						styling: 'bootstrap3'
					});
					$this[0].reset();
					reload_pages();
				} else {
					new PNotify({
						title: data.title,
						text: data.message,
						type: data.type,
						styling: 'bootstrap3'
					});
				}
			}
		});	
	});

	$("#templates").sortable();

	$("body").on('click', ".adm-edit", function(e) {
		e.stopPropagation();
		var $this = $(this);
		$(".adm-edit").next().fadeOut("fast")
		$this.next().fadeIn("fast");
	})

	$("body").on('click', "#templates .main-temp .btn-edit", function() {
		var $this = $(this);
		$main_temp = $this.parents(".main-temp");
		
		$main_temp.siblings().find(".adm-block").addClass("active").css("z-index", "1");
		$main_temp.find(".adm-block").css("z-index", "-1");
		$main_temp.siblings().find(".adm-cancel, .adm-save").hide()
		$main_temp.find(".adm-cancel, .adm-save").show();
	});

	$("body").on('click', ".adm-cancel", function() {
		var $this = $(this);
		$this.parents(".main-temp").siblings().find(".adm-block").removeClass("active").css("z-index", "1");
		$this.parents(".main-temp").find(".adm-cancel, .adm-save").hide();
	});

	$('body').click(function() {
		$("#templates .main-temp .menu-edit").fadeOut();
	});
});