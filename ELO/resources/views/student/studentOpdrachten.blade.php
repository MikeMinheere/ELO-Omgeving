@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

@section('content'i )

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
  
<div style="width:300px; height:40px; background-color:318D7E; margin-bottom:20px; border-radius:10px position:center;">

<td>{{$opdracht ->opdracht_naam}}</td>
</div>

</tr>

@endforeach

@endsection