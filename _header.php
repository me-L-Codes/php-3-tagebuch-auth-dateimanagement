
<?php
    $title = $title ?? "Mein Tagebuch"; // Falls kein Titel gesetzt ist, Standardwert nutzen
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(204, 245, 229);
            text-align: center;
        }

        /* Header-Styling */
        header {
            background-color: #333;
            color: white;
            padding: 15px;
            font-size: 24px;
        }

        /* Footer fixieren */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>
    <header>
        <?php echo htmlspecialchars($title); ?>
    </header>

    <div class="container">
