<?php
header("Content-Type: application/json"); // Since we are sending a JSON response here (not an HTML document), set the MIME Type to application/json
//Because you are posting the data via fetch(), php has to retrieve it elsewhere.
$json_str = file_get_contents('php://input');
//This will store the data into an associative array
$json_obj = json_decode($json_str, true);

echo $json_obj['name'];
// $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

// if ($contentType === "application/json") {
//   //Receive the RAW post data.
//   $content = trim(file_get_contents("php://input"));

//   $decoded = json_decode($content, true);

//   printf($decoded);

//   //If json_decode failed, the JSON is invalid.
//   if(! is_array($decoded)) {
//     echo "There is an error in JSON";
//   } else {
//     echo "Some error happened";
//   }
// }

// $data = json_decode($_POST);


// $to = 'nermin@forgeit.qa';
// $subject = 'Poruka sa webstranice';
// $headers = 'From: www.lug.ba' . "\r\n" . 'Content-type: text/html; charset=utf-8';
// $message = '
// <html>
// 	<head>
// 		<title>Your Site Contact Form</title>
// 	</head>
// 	<body>
// 		<h4>Name: <span style="font-weight: normal;">' . $data->name . '</span></h4>
// 		<h4>Email: <span style="font-weight: normal;">' . $data['email'] . '</span></h4>
// 		<h4>Phohe number: <span style="font-weight: normal;">' . $data['telephone'] . '</span></h4>
// 		<div>
// 			<h4 style="margin-bottom: 5px;">Message from the website:</h4>
// 			<div>' . $data['message'] . '</div>
// 		</div>
// 	</body>
// </html>';

// if (!empty($data['name']) && !empty($data['email']) && !empty($data['telephone']) && !empty($data['message'])) {
//     if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
//         mail($to, $subject, $message, $headers) or die('<span class="text-danger">Error sending Mail</span>');
// 		// echo '<span class="text-success send-true">Your email was sent!</span>';
// 		echo "success";
//     }
// } else {
// 	echo "error";
// }

?>