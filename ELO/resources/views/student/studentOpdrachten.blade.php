@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@section('content')

@if(Auth::user()->role == "teacher")
    
<div class="container-button">
  <a href="/docentDashboard" class="button">Dashboard</a>
  <a href="/docentOpdrachtCreate" class="button">Opdracht aanmaken</a>
</div>
@endif

@foreach ($opdrachten as $opdracht)
<tr>
  <a href="{{ route('opdracht.createAnswer',$opdracht->id) }}" class = "button-opdracht">
    <td><h2>{{$opdracht ->opdracht_naam}}</h2></td>
    <td>{{$opdracht ->opdracht_type}}</td>
  </a>
</tr>

@endforeach

@endsection