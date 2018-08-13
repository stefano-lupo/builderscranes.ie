<?php

$postArray=$_POST['posted'];

$fn=$postArray[0];
$ln=$postArray[1];
$phone=$postArray[2];
$emailAddress=$postArray[3];
$message=$postArray[4];


$to='info@builderscranes.ie';
$subject='Mail from builderscranes.ie';

$headers='MIME-Version: 1.0'."\r\n";
$headers.='Content-type: text/html; charset=iso-8859-1'."\r\n";

$headers.='From: '.$fn.' '.$ln.' <'.$emailAddress.'>'."\r\n";
$headers.='Reply-To: '.$fn.' '.$ln.' <'.$emailAddress.'>'."\r\n";


$headers.='Sender: Web Mail <webmail@emailer.stefanolupo.com>'."\r\n";
/*$message = str_replace("\r\n", "<br>", $message);*/

$email='
<html>
<head>
  <title>New mail received from website</title>
</head>

<body>
<h3>Email from '.$fn." ".$ln.'</h3>
<h4>Phone Number: '.$phone.'</h4>
<h4>Email: '.$emailAddress.'</h4>

<p>'.$message.'</p>
</body>
</html>
';

//send mail to me
mail($to,$subject,$email,$headers);

?>
