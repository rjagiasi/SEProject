<link rel="stylesheet" type="text/css" href="../css/counselling_page.css">

<script type="text/javascript">
	$(document).ready(function() {
		

		$.ajax({
			url: 'get_counselor_list.php',
			type: 'POST',
			dataType: 'json',
			success: function (allcounsellors) {

				var list1 = "";

				allcounsellors[0].forEach( function(nearby_counsellor, index) {
					list1 += 
					"<a class=\"list-group-item\" id=\""+nearby_counsellor.Counsellor_id+"\"><div class=\"list-group-item-heading\"><h4 class=\"c_name\">"+nearby_counsellor.Name+"</h4><p class=\"c_location\">"+nearby_counsellor.Place+"</p></div><div class=\"list-group-item-text\"><p class=\"c_address\">"+nearby_counsellor.Address+"</p><p class=\"c_email_id\">"+nearby_counsellor.Email_id+"</p><p class=\"c_phone\">"+nearby_counsellor.Contact_No+"</p></div></a>";
				});

				if(list1 == "")
					$("#nearby_locations .list-group").html("No Counsellors found.");
				else
					$("#nearby_locations .list-group").html(list1);

				var list2 = "";

				allcounsellors[1].forEach( function(nearby_counsellor, index) {
					list2 += 
					"<a class=\"list-group-item\" id=\""+nearby_counsellor.Counsellor_id+"\"><div class=\"list-group-item-heading\"><h4 class=\"c_name\">"+nearby_counsellor.Name+"</h4><p class=\"c_location\">"+nearby_counsellor.Place+"</p></div><div class=\"list-group-item-text\"><p class=\"c_address\">"+nearby_counsellor.Address+"</p><p class=\"c_email_id\">"+nearby_counsellor.Email_id+"</p><p class=\"c_phone\">"+nearby_counsellor.Contact_No+"</p></div></a>";
				});

				if(list2 == "")
					$("#other_locations .list-group").html("No Counsellors found.");
				else
					$("#other_locations .list-group").html(list2);
			}
		});

		$('.tab-content').on('click', 'a.list-group-item', function(event) {
			event.preventDefault();

			var dialog_element = $('#date_book_dialog');

			$(dialog_element).find('.modal-title').html($(this).find('.c_name').html());

			var counselor_id = $(this).attr('id');

			var content_string = 
				"<p><strong>Unique Counselor Id</strong> : " + counselor_id +"</p>"+
				"<p><strong>Region</strong> : " + $(this).find('.c_location').html()+"</p>"+
				"<p><strong>Address</strong> : " + $(this).find('.c_address').html()+"</p>"+
				"<p><strong>Contact No</strong> : " + $(this).find('.c_phone').html()+"</p>"+
				"<p><strong>Email Id</strong> : " + $(this).find('.c_email_id').html()+"</p>";

			

			$.ajax({
				url: 'get_counselor_availability.php',
				type: 'POST',
				dataType: 'json',
				data: {counselor_id: counselor_id},
				success: function (dates) {
					
					content_string += "<p><strong>Avaliability</strong> - </p>";

					var availability_string = "";

					$.each(dates, function(month, days) {
						
						availability_string += "<p class=\"c_months_available\"><strong>"+month+"</strong> : ";

						$.each(days, function(date, timings) {
							
							availability_string += "<a class=\"c_dates_available\"data-timings='"+JSON.stringify(timings)+"'>"+date+"</a>";
							
						});
					});

					content_string += availability_string;

					$(dialog_element).find('.modal-body').html(content_string);
					$(dialog_element).modal('toggle');
					$(".modal-footer").html("Select a date");
				}
			});
		});

		$(".modal-body").on('click', '.c_dates_available', function(event) {
			event.preventDefault();
			
			var timings = $(this).attr('data-timings');			
			// alert(timings);
			var form_string = "<label for=\"c_date_select_form\">Timings Available</label><form id=\"c_date_select_form\"method=\"post\" action=\"book_appointment.php\" target=\"_blank\">";
			$.each(JSON.parse(timings), function(index, val) {
				 
				 form_string += "<div class=\"radio\"><label><input type=\"radio\" name=\"slot_id\" value=\""+index+"\">"+val+"</label></div>";

			});
			form_string += "<button type=\"submit\" class=\"btn btn-primary\">Book & Pay</button>";
			form_string += "</form>";

			$(".modal-footer").html(form_string);

		});

		$.ajax({
			url: 'get_old_bookings.php',
			type: 'POST',
			dataType: 'json',
			success: function (data) {
				
			}
		});
		
		
	});
</script>

<ul class="nav nav-tabs nav-justified">
	<li class="active"><a data-toggle="tab" href="#book">Book</a></li>
	<li><a data-toggle="tab" href="#old">Older Bookings</a></li>
</ul>

<div class="tab-content">
	<div id="book" class="tab-pane fade in active">
		<h3>Book an appointment</h3>
		
		<div id="nearby_locations">
			<p>Counsellors Near You</p>
			<div class="list-group">
				
			</div>
		</div>

		<div id="other_locations">
			<p>Other Counsellors</p>
			<div class="list-group">
				
			</div>
		</div>
	</div>
	<div id="old" class="tab-pane fade">
		<h3>Older Bookings</h3>
		<div class="list-group">
				
		</div>
	</div>
	
</div>

<div class="modal fade" id="date_book_dialog" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				
				
			</div>
		</div>

	</div>
</div>