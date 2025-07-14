
<?php 
    $title = "Tagebuch"; 
    require __DIR__ . '/../_header.php'; // Header einbinden 
?>


<h2>Neuer Tagebucheintrag</h2>
<form action="save_entry.php" method="POST">
    <label for="username">Benutzername:</label><br>
    <input type="text" id="username" name="username"><br><br>

    <label for="password">Passwort:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <label for="entry">Dein Eintrag:</label><br>
    <textarea id="entry" name="entry" rows="10" cols="50"></textarea><br><br>

    <button type="submit">Speichern</button>
</form>


<?php 
    require __DIR__ . '/../_footer.php'; // Footer einbinden 
?>
