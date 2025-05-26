<?php
include 'db.php';

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$studiengang = $_POST['studiengang'];

$sql = "INSERT INTO bewerbungen (vorname, nachname, studiengang) VALUES ('$vorname', '$nachname', '$studiengang')";

if ($conn->query($sql) === TRUE) {
    echo "Bewerbung erfolgreich eingereicht!";
} else {
    echo "Fehler: " . $conn->error;
}

$conn->close();
?>
