<?php
$conn = mysqli_connect("localhost", "root", "", "contact_message");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_messages (name, email, phone, subject, message) 
        VALUES ('$name', '$email', '$phone', '$subject', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Message Sent Successfully!</h2>";
    echo "<a href='contact.php'>Go Back</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
