<?php
// Bewerbung empfangen
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $studiengang = $_POST['studiengang'];

    // Hier könntest du die Daten in die Datenbank speichern

    echo "Vielen Dank, $name! Deine Bewerbung für $studiengang wurde erhalten.";
}
?>
