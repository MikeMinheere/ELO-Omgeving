@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

@section('content')
<div class="container-button">
  <a href="{{route('docent.dashboard')}}" class="button">Dashboard</a>
  <a href="{{route('opdracht.index')}}" class="button">Terug</a>
</div>
<h1>{{$opdracht->opdracht_naam}}</h1>
<h2>{{$opdracht->opdracht_beschrijving}}</h2>
<form action="{{route('opdracht.storeAnswer',$opdracht->id)}}" method="post">
  @csrf
  <textarea rows="10" cols="100"></textarea>
  <button type="submit" class="button">Inleveren</button>
</form>

@endsection