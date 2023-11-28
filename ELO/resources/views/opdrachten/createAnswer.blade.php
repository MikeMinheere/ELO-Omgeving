@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

@section('content')
<div class="container-button">
  <a href="/docentDashboard" class="button">Dashboard</a>
  <a href="/studentOpdrachten" class="button">Terug</a>
</div>
<h1>{{$opdracht->opdracht_naam}}</h1>
<form action="{{route('opdracht.storeAnswer',$opdracht->id)}}" method="post">
  @csrf
  <textarea rows="20" cols=""></textarea>
  <button type="submit" class="button">Inleveren</button>
</form>

@endsection