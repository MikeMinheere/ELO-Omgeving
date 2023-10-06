@extends('layouts.app')

@section('content')
<html lang="en">
<head>
  <title>Opdracht maken</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>Maak een nieuwe opdracht:</h1>
    <form action = "/createOpdrachtText" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">
    </form>
</body>
</html>
@endsection
