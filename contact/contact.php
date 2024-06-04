<?php

// Email address verification
function isEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if($_POST) {

    // Enter the email where you want to receive the message
    $emailTo = 'lumesh2911@gmail.com';

    $name = addslashes(trim($_POST['name']));
    $clientEmail = addslashes(trim($_POST['email']));
    $mobile = addslashes(trim($_POST['mobile']));
    $message = addslashes(trim($_POST['message']));

    $array = array('nameMessage' => '', 
    				'emailMessage' => '', 
    				'mobiledata' => '', 
    				'messageMessage' => ''
    			);

    if($name == '') {
    	$array['nameMessage'] = 'Empty name!';
    }
    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Invalid email!';
    }
    if($mobile == '') {
        $array['mobiledata'] = 'Empty mobile!';
    }
    if($message == '') {
        $array['messageMessage'] = 'Empty message!';
    }
    
    if($name!='' && isEmail($clientEmail) && $clientEmail!='Client Email' && $mobile!='' && $message!='') {
		// Send email
		$message = "Message from:" . $name . "\r\n" ."Mobile Number:" . $mobile . "\r\n" . "Email Id:" . $clientEmail . "\r\n" ."Message:" . $message ;
		$headers = "From:" . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To:" . $clientEmail;
		mail($emailTo,$name, $message, $headers);
    }

    echo"<script>
     alert('Thanks for contacting us! We will get back to you very soon....!!');
    window.location.href='http://gaganvegetables.com/';
     </script>";

}

?>