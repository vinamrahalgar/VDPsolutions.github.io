<?php
include_once 'contact.dbh.php';
if(isset($_POST['contactSubmit']))
{    
     $username = $_POST['username'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     $sql = "INSERT INTO contactus (username,email,subject,message)
     VALUES ('$username','$email','$subject','$message')";
     if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>