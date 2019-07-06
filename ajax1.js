
$(document).ready(function () {
	// Handle the form submit
	$('form').on('submit', function (e) {
		// Stop the page reloading
		e.preventDefault();

		// send the ajax request and get the submitted data as HTML and show it in div
		$.ajax({
			url: $('#formid').attr('action'),
			type: 'post',
			data: $('#formid').serialize(),
			success: function (data) {
				$("#mydiv").html(data);
			}
		});
	});
});