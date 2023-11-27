@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

@section('content')
<div class="container-button">
  <a href="/docentDashboard" class="button">Dashboard</a>
  <a href="/studentOpdrachten" class="button">Terug</a>
</div>
<h1>{{$opdrachten -> $opdracht_naam}}</h1>

@endsection