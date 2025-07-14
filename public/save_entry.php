<?php
    $title = "Eintrag speichern";
    require __DIR__ . '/../_header.php'; // Header einbinden
?>


<?php
    // Festgelegte Benutzername-Passwort-Kombination
    $valid_username = "admin";
    $valid_password = "test123";


    // Überprüfen, ob die Anmeldedaten gesendet wurden
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prüfen, ob die Anmeldedaten korrekt sind
        if ($username === $valid_username && $password === $valid_password) {

            // Überprüfen, ob das Formular gesendet wurde und das 'text'-Feld nicht leer ist
            if (!empty($_POST['entry'])) {
                $entryText = trim($_POST['entry']); // Entfernt unnötige Leerzeichen am Anfang und Ende des Textes
                $directory = __DIR__ . '/../entries/'; // Verzeichnis für gespeicherte Einträge
                $filename = $directory . date('Y-m-d_H-i-s') . ".txt"; // Erzeugt einen eindeutigen Dateinamen mit Datum und Uhrzeit

                // Prüfen, ob das Verzeichnis existiert, falls nicht, wird es erstellt
                if (!is_dir($directory)) {
                    mkdir($directory, 0777, true); // Verzeichnis mit Schreibrechten erstellen
                }

                // Den Text in die Datei speichern
                file_put_contents($filename, $entryText);

                // Erfolgsnachricht ausgeben
                echo "<p>Eintrag wurde erfolgreich gespeichert!</p>";
            } else {
                // Fehlermeldung anzeigen, falls das Textfeld leer war
                echo "<p>Fehler: Kein Text eingegeben!</p>";
            }            
        } else {
            echo "<p>Fehler: Ungültige Anmeldedaten!</p>";
        }
    } else {
        echo "<p>Fehler: Benutzername und Passwort erforderlich!</p>";
    }
?>

<p><a href="index.php">Zurück zur Startseite</a></p>

<?php
    require __DIR__ . '/../_footer.php'; // Footer einbinden
?>
