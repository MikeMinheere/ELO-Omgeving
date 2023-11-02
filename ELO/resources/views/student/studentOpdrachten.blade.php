@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@section('content')

<div class="container-button">
  <a href="/docentOpdrachtenCreate" class="button-3 w-button">opdracht aanmaken</a>
  <a href="#" class="button-3 w-button">ROOSTER</a>
</div>

@foreach ($opdrachten as $opdracht)
<tr>
  
<div style="width:300px; height:70px; background-color:318D7E; margin-top:20px; margin-bottom:20px; border-radius:10px;text-align:center;">

<td>{{$opdracht ->opdracht_naam}}</td>
</div>

</tr>

@endforeach

@endsection