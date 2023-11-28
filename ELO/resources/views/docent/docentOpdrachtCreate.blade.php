@extends('layouts.app')

@section('content')
<html lang="en">
<head>
  <title>Opdracht maken</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container-button">
    <a href="/docentDashboard" class="button">Dashboard</a>
    <a href="/studentOpdrachten" class="button">Terug</a>
  </div>
  <form action = "/createOpdracht" method = "post" class="form-group" style="width:50%;">
        <h2>Maak een nieuwe opdracht:</h2>

        <input type="hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <label>Opdrachtnaam:</label>
        <input type="text" class="form-control" placeholder="Opdrachtnaam" name="opdracht naam" required autofocus autocomplete="opdracht_naam">
        <br>

        <label>Opdracht inhoud:</label>
        <input type="text" class="form-control" placeholder="Opdracht inhoud" name="opdracht beschrijving" required autofocus autocomplete="opdracht_beschrijving">
        <br>

        <label>Opdracht type:</label><br>
        <select id="opdracht_type" name="opdracht_type" required autofocus autocomplete="opdracht_type">
          <option value="Toets">Toets</option>
          <option value="Text">Tekst</option>
          <option value="Bestand">Inleverpunt</option>
        </select>
        <br><br>

        <button type="submit"  value = "Maak Opdracht" class="button">Maak Opdracht</button>
    </form>
</body>
</html>
@endsection
