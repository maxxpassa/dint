// Select 2 for property search
	$('.select2').select2({
	// minimumInputLength: 3,
	ajax: {
		url: 'bookings/property_search',
		processResults: function (data) {
		$('#property').val('DSD');
		return {
			results: data
		};
		}
	}
	});

	$('.select2customer').select2({
	ajax: {
		url: 'bookings/customer_search',
		processResults: function (data) {
		$('#customer').val('DSD');
		return {
			results: data
		};
		}
	}
	});

	$(function() {
		var startDate      = $('#startDate').val();
		var endDate        = $('#endDate').val();
		dateRangeBtn(startDate,endDate, dt=1);
		formDate (startDate, endDate);
		
		$(document).ready(function(){
			$('#dataTableBuilder_length').after('<div id="exportArea" class="col-md-4 col-sm-4 "><div class="row mt-m-2"><div class="btn-group"><button type="button" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">Export</button><ul class="dropdown-menu"><li><a href="" title="CSV" id="csv">CSV</a></li><li><a href="" title="PDF" id="pdf">PDF</a></li></ul></div><div class="btn btn-group btn-refresh"><a href="" id="tablereload" class="form-control"><span><i class="fa fa-refresh"></i></span></a></div></div></div>');
		});

		//csv convert
		$(document).on("click", "#csv", function(event){
		event.preventDefault();
		var property = $('#property').val();
		var customer = $('#customer').val();
		var status = $('#status').val();
		var to = $('#endDate').val();
		var from = $('#startDate').val();
		window.location = "booking/booking_list_csv?to="+to+"&from="+from+"&property="+property+"&status="+status+"&customer="+customer;
		});
		//pdf convert
		$(document).on("click", "#pdf", function(event){
		event.preventDefault();
		var property = $('#property').val();
		var customer = $('#customer').val();
		var status = $('#status').val();
		var to = $('#endDate').val();
		var from = $('#startDate').val();
		window.location = "booking/booking_list_pdf?to="+to+"&from="+from+"&property="+property+"&status="+status+"&customer="+customer;
		});
		//reload Datatable
		$(document).on("click", "#tablereload", function(event){
		event.preventDefault();
		$("#dataTableBuilder").DataTable().ajax.reload();
		});
	});