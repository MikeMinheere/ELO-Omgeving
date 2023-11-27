@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

@section('content')

@if(Auth::user()->role == "teacher")
    
<div class="container-button">
  <a href="/docentDashboard" class="button">Dashboard</a>
  <a href="/docentOpdrachtCreate" class="button">Opdracht aanmaken</a>
</div>

@else
<div class="container-button">
  <a href="/docentDashboard" class="button">Dashboard</a>
</div>
@endif



<div class = "div-opdracht">
@foreach ($opdrachten as $opdracht)
<tr>
  <button type="submit" class = "button-opdracht">
    <td><h2>{{$opdracht ->opdracht_naam}}</h2></td>
    <td>{{$opdracht ->opdracht_type}}</td>
  </button>
</tr>

@endforeach
</div>

@endsection