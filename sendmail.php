<?php 

	if($_POST['name']){

	  	$name 		= $_POST['name']; 
	  	$email 		= $_POST['email']; 
	  	$message 	= $_POST['message']; 
	  	$youremail 	= "lowella@suntechnologies.com,tahiri@suntechnologies.com,raghavendranm@suntechnologies.com,bala@suntechnologies.com";
	  	$headers  	= 'MIME-Version: 1.0' . "\r\n";
	    $headers   .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	
	    $message 	= 
	   			"<table border='1'>
			 	<tr>
				<td>Name </td>
				<td>$name </td>
				</tr>
				<tr>
				<td>Email </td>
				<td>$email </td>
				</tr>
				<td>Message </td>
				<td>$message </td>
				</tr>
				</table>";


		mail( $youremail, "Aavega Contact US Messge.", $message, $headers);

  	}	
	$arr = array('message' => "<p class='lead'>Thanks for Contacting us , we will get back to you shortly.</p>");
	echo json_encode($arr);
