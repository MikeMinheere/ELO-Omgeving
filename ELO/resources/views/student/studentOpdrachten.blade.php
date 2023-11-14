@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@section('content')

@if(Auth::user()->role == "teacher")
    
<div class="container-button">
  <a href="/docentOpdrachtCreate" class="button-3 w-button">Opdracht aanmaken</a>
  <a href="/docentDashboard" class="button-3 w-button">Dashboard</a>
</div>
@endif

<div class = "div-opdracht">
@foreach ($opdrachten as $opdracht)
<tr>
  <button type="submit" class = "button-opdracht">
    <td>{{$opdracht ->opdracht_naam}}</td>
  </button>
</tr>

@endforeach
</div>

@endsection