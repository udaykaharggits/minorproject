<?php

if(isset($_POST['note_subject'])){
    $connect = mysqli_connect("localhost", "root", "", "details");
    $note_subject = $_POST['note_subject'];
    $note_message = $_POST['note_message'];
    $sql = "INSERT INTO notifs (subject, message, date) VALUES ('$note_subject', '$note_message', NOW())";
    if(mysqli_query($connect, $sql)){
        echo 'Notification Posted! Redirecting...';
        header( "refresh:3; url=Notif.php");
    }
}
?>
