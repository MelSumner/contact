<?php
// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  function submission_scrub($value) {
        // list of things I want to prevent
    $bad_things = array('to:','cc:','bcc:','content-type:','mime-version:','multipart-mixed:','content-transfer-encoding:');

        // if any of the bad things are in the submission, return an empty string
    foreach ($bad_things as $v) {      
      if (stripos($value, $v) !==false)
        return '';
    }  
    // replace any newline characters with spaces
    $value = str_replace(array( "\r", "\n", "%0a", "%0d"), ' ', $value);

    // return the value
    return trim($value);
  }
    //end submission_scrub function

    // clean form data
  $scrubbed = array_map
  ('submission_scrub', $_POST);

    // check the trap!
  if(!empty($_POST['month'])){
    echo '<div class="alert alert-danger"><p>We are sorry, an error has occurred. Your message has not been sent.</p></div>';
    exit();
  }

    // Minimal form validation:
  if (!empty($scrubbed['name']) && !empty($scrubbed['email']) && !empty($scrubbed['q1']) ) {


// multiple recipients (note the commas)
$to = "me@example.com, "; //your email address
$to .= "another@example.com"; //another email address

// subject
$subject = "New submission: Tell Me About Yourself";

// compose message
$message = "
<html>
  <head>
    <title>Tell Me About Yourself</title>
  </head>
  <body>
  <table cellpadding='5' width='570' cellspacing='0' border='0' style='max-width: 100%;' align='center'>
  <tr>
  <td width='100%' style='font-family:Open Sans,Helvetica,Arial,sans-serif;font-size:14px; line-height:22px;text-align:left;'>
    <div><p><strong>Name:</strong> {$scrubbed['name']} </p></div>
    <div><p><strong>Email:</strong> {$scrubbed['email']}</p></div>
    <div><p><strong>Question One:</strong></p>
    <p> {$scrubbed['q1']} </p></div>
    <div><p><strong>Question Two:</strong></p> 
    <p>{$scrubbed['q2']} </p></div>
    <div><p>Question Three:</strong></p>
    <p>{$scrubbed['q3']}</p></div>
    </td>
    </tr>
    <tr>
    <td width='100%' style='font-family:Open Sans,Helvetica,Arial,sans-serif;font-size:9px;line-height:12px;color:#4d4d4d;'>
    <p>You are getting this email because...</p>
    </td>
    </tr>
    </table>
  </body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Your Name <email@example.com>'\r\n"; //your correct header info should go here to lower spam rating

// send email
mail($to, $subject, $message, $headers);
}
// End of main isset() IF. 
}
else {
  exit();
}

header("Location:thankyou.php");
?>
