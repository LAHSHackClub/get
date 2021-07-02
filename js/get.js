$("#submit-button").click(function() {
	$('#submit-modal').modal('open');
	if ($("#club_name").val() == "" || $("#name").val() == "" || $("#email").val() == "" || $("#permission-slip").val() == "") {
		$('#submit-modal-title').html("Error");
		$('#submit-modal-body').html("You have not completed all required fields!");
	} else {
		$('#submit-modal-title').html("Loading...");
		$('#submit-modal-body').html("");
		
		var data = new FormData();
		data.append("file", $("#permission-slip").prop('files')[0]);

		var filePath;
		$.ajax({
		  async: false,
		  url: 'file.php',
		  type: 'POST',
		  processData: false,
		  contentType: false,
		  dataType : 'json',
		  data: data,
		  complete: function(response) {
		  	filePath = response.responseText;
		  }
		});

		$.post("get.php", {"club_name": $("#club_name").val(), "name": $("#name").val(), "email": $("#email").val(), "info": $("#info").val(), "slip": filePath}, function(e) {
			if (e == "success") {
				$("#form-action-dismiss").attr("href", "https://lahs.club");
				$('#submit-modal-title').html("Success!");
				$('#submit-modal-body').html("You have successfully signed up your club to get a club site courtesy of the get.lahs.club program. Please wait while we process your request! We've sent a receipt to your email to confirm.");
				
				$("#club_name").val("");
				$("#name").val("");
				$("#email").val("");
				$("#info").val("");
				$("#permission-slip-text").val("");
			} else if (e == "invalid_email") {
				$('#submit-modal-title').html("Error");
				$('#submit-modal-body').html("That email is not a valid school email. Please do not use your personal email, instead use your school-issued email. If you do not have one, please contact us at <a href='mailto:hack@lahs.club'>hack@lahs.club</a>.");
			} else {
				$('#submit-modal-title').html("Error");
				$('#submit-modal-body').html("An unknown error occurred, please contact our system administrators at <a href='mailto:hack@lahs.club'>hack@lahs.club</a> immediately!");
			}
		});
	}
});

$('#permission-slip').on('change', function() {
    if ($('#permission-slip').prop('size') > 102400) {
        $('#submit-modal').modal('open');
        $('#submit-modal-title').html("Error");
		$('#submit-modal-body').html("The maximum file size for the form is 100K!");
    }
});