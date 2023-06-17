<?
/**************************************
* PHP Sending email for Sign Up section
***************************************/

// Email to:
$to = 'rockthaigirl@yahoo.com';


// Email Subject:
$subject = 'VIETROSE-sign up to receive a notification when we launch our new website';


// Email header:
/*
$headers = "From: " . strip_tags($_POST['emailSingUp']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['emailSingUp']) . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
*/

// Email body:
/*
$message = '<html><body>';
$message .= '<img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['emailSingUp']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['emailSingUp']) . "</td></tr>";
$addURLS = $_POST['addURLS'];
if (($addURLS) != '') {
    $message .= "<tr><td><strong>URL To Change (additional):</strong> </td><td>" . strip_tags($addURLS) . "</td></tr>";
}
$curText = htmlentities($_POST['curText']);           
if (($curText) != '') {
    $message .= "<tr><td><strong>CURRENT Content:</strong> </td><td>" . $curText . "</td></tr>";
}
$message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlentities($_POST['newText']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
*/

$headers = 'From: Apple';
$message = 'TEST';

// Email sending by PHP code
$status = mail($to, $subject, $message, $headers);

// return the result from sending email -> True is success, False is fail
if($status) {
	echo json_encode(array("valid"=>"true"));
}else{
	echo json_encode(array("valid"=>"false"));
}
?>