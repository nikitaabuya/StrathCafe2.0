<?php

$conn = new mysqli('localhost', 'root', '', 'strathcafe');
if (mysqli_connect_errno())
    die('Failed to connect to MySQL: ' . mysqli_connect_error());

if (!isset($_POST['Email']) AND !isset($_POST['AdmissionNumber']))
    die('Please fill in all the details!');

$stmt = $conn->prepare('SELECT * FROM Users WHERE Email = ?');
$stmt->bind_param('s', $_POST['Email']);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $token = "abcdefghijklmnopqrstuvwxyz0123456789";
    $token = str_shuffle($token);
    $token = substr($token, 0, 6);
    $Email = $_POST['Email'];

    $sql = mysqli_query($conn, "UPDATE users SET Password = '$token' WHERE Email = '$Email'");
    echo '<h1>' . 'Your password has been reset to: '. '<br><br><br><u>' . $token . '<br><br><br></u>' . '</h1>';

    header("refresh:4; url=./../authentication/forgot_password_2.php");



} else {
    echo '<h1>The email you entered does not exist in the database</h1>';
    header("refresh:2; url=./../authentication/forgot_password.php");
};
mysqli_close($conn);














/*
--------------------------------------------------------------------------------------------------------------------
#use PHPMailer\PHPMailer\PHPMailer;

$conn = new mysqli('localhost', 'root', '', 'strathcafe');
if (mysqli_connect_errno())
    die('Failed to connect to MySQL: ' . mysqli_connect_error());

if (!isset($_POST['Email']))
    die('Please fill in your Email!');

$stmt = $conn->prepare('SELECT * FROM Users WHERE Email = ?');
$stmt->bind_param('s', $_POST['Email']);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $statement = $conn->prepare('SELECT * FROM Password_resets WHERE Email = ?');
    $statement->bind_param('s', $_POST['Email']);
    $statement->execute();
    $statement->store_result();

    if ($statement->num_rows == 0) {
        $sql = $conn->prepare("INSERT INTO password_resets (Email) VALUES (?)");
        $sql->bind_param("s", $_POST['Email']);
        $sql->execute();
        $sql->close();
    }

    $token = "abcdefghijklmnopqrstuvwxyz0123456789";
    $token = str_shuffle($token);
    $token = substr($token, 0, 6);
    $Email = $_POST['Email'];

    $sql = mysqli_query($conn, "UPDATE password_resets SET Token = '$token', TokenExpiration = DATE_ADD(NOW(), INTERVAL 10 MINUTE) WHERE Email = '$Email'");

    /*  
--------------------------------------------------------------------------------------------------------------------
    (--EMAIL SENDING PROCESS--)
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();
    $mail->addAddress($Email);
    $mail->setFrom(address: "strathcafe@strathmore.edu", name: "cafe");
    $mail->subject = "Reset Password";
    $mail->isHTML(isHTML: true);
    $mail->body = "
            Hi,<br><br>

            Please click on the link below to reset your password:<br>        
            <a href=" "></a><br><br>  

            Kind regards,<br>       
            StrathCafe    
            ";
--------------------------------------------------------------------------------------------------------------------

} else {
    echo '<h1>The Email you entered does no exist in the database</h1>';
    header("refresh:2; url=forgot_password.html");
};
mysqli_close($conn);
--------------------------------------------------------------------------------------------------------------------
*/

?>