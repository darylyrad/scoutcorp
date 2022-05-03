<?php

function mailFormData($data) {
    // $data (array) contains the form's sent data
    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $website = $data['website'];
    $message = $data['message'];
    
    // perform form data validation - we can use Kirby's validators,
    // available via "v":
    $errors = array();
    
    if(empty(trim($name))){ $errors[] = 'name'; }
    if(!v::email($data['email'])) { $errors[] = 'email'; }
    if(!empty($website)){ $errors[] = 'website'; }
    
    $result = array();
    $result['errors'] = $errors;
    
    // if we have validation errors, we can stop and return them:
    if(!empty($errors)){
        $result['success'] = false;
        $result['msg'] = 'Validation Failed';
        return $result;
    }
    
    // if we have no errors, we can go ahead and build an email message.
    // $to, $from and $subject can be hard-coded here, or can alternatively
    // be retrieved from values entered by the user in a page:
    $to = page('home/contact')->recipient();
    $from = $email;
    $subject = h(page('home/contact')->subject(),false);
    $body = <<<BODY

From: {$name}
--------------------------------------------------------
Email: {$email}
--------------------------------------------------------
Phone: {$phone}
--------------------------------------------------------
Message:

{$message}
BODY;
    
    // now, let's try sending the email:
    $email = email(array('to' => $to,'from' => $from,'subject' => $subject,'body' => $body));
    if($email->send()){
        // email was sent successfully
        $result['success'] = true;
        $result['msg'] = h(page('home/contact')->success_msg(),false);
    } else {
        // email delivery was not successful - report error
        $result['success'] = false;
        $result['msg'] = 'Email Delivery Failed: ' . $email->error()->message();
    }
    
    return $result;
}