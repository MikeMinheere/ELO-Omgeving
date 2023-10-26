<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Student Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 class="text-center">View Student Records</h2>
           
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Klassen</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($klassen as $klassen)
      <tr>
      <td>{{ $klassen->name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>