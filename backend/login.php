<?php
// Verbindung zur Datenbank herstellen
$conn = new mysqli('localhost', 'root', '', 'ideenmanagement');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        echo "Anmeldung erfolgreich!";
    } else {
        echo "Ungültige E-Mail oder Passwort.";
    }
    $stmt->close();
}
?>
<form method="post">
    E-Mail: <input type="email" name="email" required><br>
    Passwort: <input type="password" name="password" required><br>
    <button type="submit">Anmelden</button>
</form>