<?php

printf($_POST);
$to = 'nermin@forgeit.qa';
$subject = 'Poruka sa webstranice';
$headers = 'From: www.lug.ba' . "\r\n" . 'Content-type: text/html; charset=utf-8';
$message = '
<html>
	<head>
		<title>Your Site Contact Form</title>
	</head>
	<body>
		<h4>Name: <span style="font-weight: normal;">' . $_POST['name'] . '</span></h4>
		<h4>Email: <span style="font-weight: normal;">' . $_POST['email'] . '</span></h4>
		<h4>Phohe number: <span style="font-weight: normal;">' . $_POST['telephone'] . '</span></h4>
		<div>
			<h4 style="margin-bottom: 5px;">Message from the website:</h4>
			<div>' . $_POST['message'] . '</div>
		</div>
	</body>
</html>';

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['message'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        mail($to, $subject, $message, $headers) or die('<span class="text-danger">Error sending Mail</span>');
		// echo '<span class="text-success send-true">Your email was sent!</span>';
		echo "success";
    }
} else {
	echo "error"; 
}
?>