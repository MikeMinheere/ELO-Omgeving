@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@section('content')

<div class="container-button">
  <a href="/studentOpdrachten" class="button-3 w-button">OPDRACHTEN</a>
  <a href="#" class="button-3 w-button">ROOSTER</a>
</div>

@foreach ($opdrachten as $opdracht)
<tr>
  
<div style="width:300px; height:40px; background-color:318D7E; margin-bottom:20px; border-radius:10px">

<td>{{$opdracht ->opdracht_naam}}</td>
</div>

</tr>

@endforeach

@endsection