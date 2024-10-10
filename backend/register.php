<?php
// Verbindung zur Datenbank herstellen
$conn = new mysqli('localhost', 'root', '', 'ideenmanagement');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
    $stmt->execute();
    $stmt->close();
    echo "Registrierung erfolgreich!";
}
?>
<form method="post">
    Vorname: <input type="text" name="first_name" required><br>
    Nachname: <input type="text" name="last_name" required><br>
    E-Mail: <input type="email" name="email" required><br>
    Passwort: <input type="password" name="password" required><br>
    <button type="submit">Registrieren</button>
</form>