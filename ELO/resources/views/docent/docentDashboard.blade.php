@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

@section('content')
<div class="container-button">
  <a href="{{route('opdracht.index')}}" class="button">Opdrachten</a>
  <a href="{{route('klassen.index')}}" class="button">Klassen</a>
</div>
<div class="text-block-2">Welkom Docent</div>
<div>Goede Docenten, zij maken echt het verschil</div>

<div class="container-4">
  <img src="image/agenda.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 766px) 80vw, 613px" srcset="https://uploads-ssl.webflow.com/65167ec34df69a09d453a49c/651694055a394102aeec0054_agenda-p-500.png 500w, https://uploads-ssl.webflow.com/65167ec34df69a09d453a49c/651694055a394102aeec0054_agenda.png 613w" alt="">
  <img src="image/notifications.png" loading="lazy" alt="" class="image-3">
</div>

@endsection