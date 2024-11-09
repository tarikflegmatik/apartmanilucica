<?php
	header("Access-Control-Allow-Origin: *");
  $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: Apartmani Lučica <info@apartmanilucica.com>\r\n";
	$headers .= "Reply-To: ".$_REQUEST['email']."\r\n";
	$headers .= "X-Mailer: PHP/".phpversion();
	$message = "Šalje: <strong>".$_REQUEST['name']."</strong>";
	$message .= "<br>E-mail: <strong>".$_REQUEST['email']."</strong>";
	$message .= "<br>Check in: <strong>".$_REQUEST['check_in_date']."</strong>";
	$message .= "<br>Check out: <strong>".$_REQUEST['check_out_date']."</strong>";
	$message .= "<br>Adults: <strong>".$_REQUEST['number_adults']."</strong>";
	$message .= "<br>Children: <strong>".$_REQUEST['number_children']."</strong>";
	$message .= "<br>Apartment: <strong>".$_REQUEST['apartment']."</strong>";
	$message .= "<br>Message: <strong>".$_REQUEST['message']."</strong>";
	
	$headers2 = "MIME-Version: 1.0" . "\r\n";
	$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers2 .= "From: Apartments Lucica <info@apartmanilucica.com>\r\n";	
	$message2 = "Dear,<br><br>we're glad to hear that You wan't to stay in our apartment.<br>We'll answer as fast as we can after we check for overlaps on Booking.<br><br>Best wishes,<br>Apartments Lucica";
	if(mail("info@apartmanilucica.com", "Rezervacija s WEB stranice", $message, $headers))
		if(mail($_REQUEST['email'], "Inquery received", $message2, $headers2)){
			echo "success";
		}
	else
		echo "fail";
?>