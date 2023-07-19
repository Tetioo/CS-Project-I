
<?php

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/PHPMailerAutoload.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';


if (isset($_POST["reset-request-submit"])) {  //if button is clicked

$selector = bin2hex(random_bytes(8)); //generating random bytes used to create token cryptographically(hex used in link sent to user)
$token = random_bytes(32);   //used to authenticate user not in hex for DB till later

$url = "http://localhost/nourishkids3/login_register/create-newpass.php?selector=" . $selector . "&validator=" . bin2hex($token);

$expires = date("U") + 1800; //one hour from now

//add token inside db
//connect to db

require '../config.php';



//no existing token from same user
$sql ="DELETE FROM pwdReset WHERE pwdResetEmail=?";
$stmt= mysqli_stmt_init($conn); //statements

if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Error";
    exit();
}else{
    mysqli_stmt_bind_param($stmt, "s", $email );
    mysqli_stmt_execute($stmt);
}
$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires ) VALUES (?, ?, ?, ?);";

$stmt= mysqli_stmt_init($conn); //statements

if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Error";
    exit();
}else{ //token must be hashed
    $hashedToken = password_hash($token, PASSWORD_DEFAULT );
    mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hashedToken, $expires );  //s for strings
    mysqli_stmt_execute($stmt);
}

mysqli_stmt_close($stmt); 
mysqli_close($conn);  //close connection

//sending email


date_default_timezone_set('Etc/UTC');

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = false;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;

$mail->Username = 'rotich.mercy@strathmore.edu';
$mail->Password = 'wgxpscsxdspeegdd';
$mail->setFrom('Nourishkids@gmail.com', 'From Nourishkids');
$mail->addAddress('rotich.mercy@strathmore.edu'); //call this multiple times for multiple recipients
$mail->Subject = 'Received Message From Nourishkids';
$mail->msgHTML('<p>Here is your reset link: </br> <a href="' . $url . '">' . $url . '</a></p>');
$mail->AltBody = 'alternative body if html fails to load';
//$mail->addAttachment('/path/to/file/); //OPTIONAL attachment

if (!$mail->send()) {
    echo "Mailer Error: ";
    echo $mail->ErrorInfo;
} else {
    echo "Email sent";
}
}
?>