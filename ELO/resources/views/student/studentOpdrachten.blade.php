@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@section('content')

@if(Auth::user()->role == "teacher")
    
<div class="container-button">
  <a href="/docentOpdrachtCreate" class="button-3 w-button">Opdracht aanmaken</a>
  <a href="/docentDashboard" class="button-3 w-button">Dashboard</a>
</div>
@endif

@foreach ($opdrachten as $opdracht)
<tr>
  
<div style="width:300px; height:70px; background-color:318D7E; margin-top:20px; margin-bottom:20px; border-radius:10px;text-align:center; color:ffffff">

<td>{{$opdracht ->opdracht_naam}}</td>
</div>

</tr>

@endforeach

@endsection