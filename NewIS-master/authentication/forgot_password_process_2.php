<?php
$token = $_POST['received_password'];
$pasword1 = $_POST['new_password'];
$password2 = $_POST['confirm_new_password'];
$admissionnumber = $_POST['AdmissionNumber'];

$conn = mysqli_connect('localhost', 'root', '', 'strathcafe');
if (mysqli_connect_errno()) 
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());

$stmt = $conn->prepare("SELECT AdmissionNumber FROM Users WHERE AdmissionNumber = '$admissionnumber'");
$stmt->bind_param('i', $_POST['AdmissionNumber']);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    if($pasword1 === $password2){
        $sql = mysqli_query($conn, "UPDATE users SET Password = '$password1' WHERE AdmissionNumber = '$admissionnumber'");
        echo 'Your password has been changed';
    }else{
        echo "Your new passwords do not match!!";
    }

}else{
    echo "Please enter the correct password you received";
}


?>