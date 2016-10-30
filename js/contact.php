<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['comments'];
    $from = $email; 
//    yinghui@stanford.edu 
    $to = 'xiayh2013@gmail.com'; 
    $subject = $_POST['subject'];
    $verify = $_POST['verify'];
    
			
    $body = "From: $name\n E-Mail: $email\n Subject: \n $subject Message:\n $message";
				
    if ($verify == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your email has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($verify != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>