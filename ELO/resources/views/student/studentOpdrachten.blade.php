@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@section('content'i )

@if(Auth::user()->role == "teacher")
    
<div class="container-button">
  <a href="/docentOpdrachtenCreate" class="button-3 w-button">Aanmaken</a>
  <a href="/docentDashboard" class="button-3 w-button">🔙</a>
</div>
@endif

@foreach ($opdrachten as $opdracht)
<tr>
  
<div style="width:300px; height:40px; background-color:318D7E; margin-bottom:20px; border-radius:10px position:center;">

<td>{{$opdracht ->opdracht_naam}}</td>
</div>

</tr>

@endforeach

@endsection