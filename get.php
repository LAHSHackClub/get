<?php
if (isset($_POST['club_name'])) {
	require_once("conf.ini.php");

	$club_name = $_POST['club_name'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$info = $_POST['info'];
	$slip = $_POST['slip'];

	if (substr($email, 0, 4) == "1000" && is_numeric(substr($email, 4, 5)) && substr($email, -9) == "@mvla.net" && strlen($email) == 18) {
		$mail->setFrom('hack@lahs.club', 'LAHS Hack Club');
		$mail->addAddress('hack@lahs.club');
		$mail->isHTML(true);

		$mail->Subject = 'New Get Form Submission';
		$mail->Body = "<head><link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'></head><body style='font-family: \"Roboto\", sans-serif;'><div style='width: 90%; height: 100%; padding: 5% 5%;'><div style='width: calc(100% - 20px); padding: 10px; background-color: #1565c0; color: white; text-align: center; font-size: 2em; margin: 0'>New Get Form Submission</div><div style='background-color: #efefef; padding: 10px;'><p>Greetings!</p><p>There has been a new form submission by a club president for the program get.lahs.club. Here's the info:<br><b>Club Name: </b>$club_name<br><b>Club President Name: </b>$name<br><b>Club President Email: </b>$email<br><b>Any additional info? </b>$info<br><b>Permission Slip: </b>https://get.lahs.club$slip</p>Best Regards,<br>The LAHS Hack Club Bot</p></div></div></body>";

		$mail->send();

		$receipt->setFrom('hack@lahs.club', 'LAHS Hack Club');
		$receipt->addAddress($email);
		$receipt->addBCC('hack@lahs.club');
		$receipt->isHTML(true);

		$receipt->Subject = 'Receipt From get.lahs.club';
		$receipt->Body = "<head><link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'></head><body style='font-family: \"Roboto\", sans-serif;'><div style='width: 90%; height: 100%; padding: 5% 5%;'><div style='width: calc(100% - 20px); padding: 10px; background-color: #1565c0; color: white !important; text-align: center; font-size: 2em; margin: 0'>Receipt From get.lahs.club</div><div style='background-color: #efefef; padding: 10px;'><p>Dear $name,</p><p>Thank you so much for registering for a domain for your club. The get.lahs.club program is honored to have your club participate, and we are currently working out the logistics. We'll get back to you as soon as we can with more info! Please continue to check this email for more instructions.</p>Best Regards,<br>The LAHS Hack Club Team</p></div></div></body>";

		$receipt->send();

		$slack_message = "There has been a new form submission by a club president for the program get.lahs.club. Here's the info:\n*Club Name:* $club_name\n*Club President Name:* $name\n*Club President Email:* $email\n*Any additional info?* $info\n*Permission Slip:* https://get.lahs.club$slip\n\nBest Regards,\nThe LAHS Hack Club Bot";

		$url = 'https://slack.com/api/chat.postMessage';
		$data = array(
			'token' => $token,
			'channel' => $get_channel,
			'as_user' => 'true',
			'parse' => 'full',
			'mrkdwn' => 'true',
			'attachments' => '[{
	            "fallback": "New Get Form Submission",
	            "color": "#1565c0",
	            "pretext": "New get.lahs.club form submission!",
	            "mrkdwn_in": ["pretext", "text"],
	            "text": "' . $slack_message . '",
	            "unfurl_links": "false",
	            "unfurl_media": "false",
	            "footer": "LAHS Hack Club Slack Bot"
	        }]'
		);

		$options = array(
		    'http' => array(
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($data)
		    )
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);

		echo "success";
	} else {
		echo "invalid_email";
	}
}