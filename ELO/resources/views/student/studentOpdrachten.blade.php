@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@section('content')

<div class="container-button">
  <a href="/studentOpdrachten" class="button-3 w-button">OPDRACHTEN</a>
  <a href="#" class="button-3 w-button">ROOSTER</a>
</div>

@foreach ($opdrachten as $opdracht)
<tr>
<td>{{$opdracht ->opdracht_naam}}</td>


</tr>

@endforeach

@endsection