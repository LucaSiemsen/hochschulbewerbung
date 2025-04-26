<?php
// Kontaktformular empfangen
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nachricht = $_POST['nachricht'];

    // Hier könntest du eine E-Mail versenden oder speichern

    echo "Vielen Dank für deine Nachricht, wir melden uns unter $email!";
}
?>
