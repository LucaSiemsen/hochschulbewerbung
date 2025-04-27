<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$nachricht = $_POST['nachricht'];

$sql = "INSERT INTO kontakte (name, email, nachricht) VALUES ('$name', '$email', '$nachricht')";

if ($conn->query($sql) === TRUE) {
    echo "Kontaktanfrage erfolgreich gesendet!";
} else {
    echo "Fehler: " . $conn->error;
}

$conn->close();
?>
