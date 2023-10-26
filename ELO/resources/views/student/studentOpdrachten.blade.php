@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@section('content')

<head>
    <meta charset="UTF-8">
    <title>Display Opdracht Naam</title>
</head>
<body>
    <?php
    // Retrieve data from the opdrachten table
    $sql = "SELECT opdracht_naam FROM opdrachten";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            // Create a div for each opdracht_naam
            echo '<div>' . htmlspecialchars($row['opdracht_naam']) . '</div>';
        }
    } else {
        echo "Helaas zijn der op dit moment geen opdrachten beschikbaar!";
    }
    ?>
</body>

@endsection