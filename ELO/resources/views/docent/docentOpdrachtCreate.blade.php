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
  <div class="div-create-opdracht">
    <form action = "/createOpdracht" method = "post" class="form-group" style="width:45%;">
      <h2>Maak een nieuwe opdracht*:</h2>

      <input type="hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <label>Opdrachtnaam:</label>
      <input type="text" class="form-control" placeholder="Opdrachtnaam" name="opdracht naam" required autofocus autocomplete="opdracht_naam">
      <br>

      <label>Opdracht inhoud:</label>
      <input type="text" class="form-control" placeholder="Opdracht inhoud" name="opdracht beschrijving" required autofocus autocomplete="opdracht_beschrijving">
      <br>
      <br><br>
      
      <button type="submit"  value = "Maak Opdracht" class="button">Maak Opdracht</button>
    </form>

    <form action="/addQuestion" method="post" class="form-group" style="width:45%;">
      <h2>Voeg een vraag toe:</h2>
      <label>Opdracht inhoud:</label>
      <input type="text" class="form-control" placeholder="Opdracht inhoud" name="opdracht beschrijving" required autofocus autocomplete="opdracht_beschrijving">
      <br>
      <button type="submit"  value = "Voeg vraag toe" class="button">Voeg vraag toe</button>
    </form>
</div>
<h6>*let op!, eerst vragen toevoegen voordat je de opdracht aanmaakt</h6>
</body>
</html>
@endsection
