@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdrachten</title>
</head>
<body>
    <h1>Maak een nieuwe opdracht</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="opdracht">Opdracht:</label>
        <input type="text" id="opdracht" name="opdracht" required><br><br>

        <label for="deadline">Deadline:</label>
        <input type="date" id="deadline" name="deadline" required><br><br>

        <input type="submit" value="Opdracht aanmaken">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verkrijg gegevens van het formulier
        $opdracht = $_POST['opdracht'];
        $deadline = $_POST['deadline'];

        // Toon de ingevulde opdrachtgegevens
        echo "<h2>Nieuwe opdracht aangemaakt:</h2>";
        echo "<p><strong>Opdracht:</strong> $opdracht</p>";
        echo "<p><strong>Deadline:</strong> $deadline</p>";
    }
    ?>
</body>
</html>
@endsection
