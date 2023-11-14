@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@section('content')
<div class="text-block-2">Welkom student</div>
<div>Goede studenten, zij maken echt het verschil</div>

<div class="container-button">
  <a href="/studentOpdrachten" class="button-3 w-button">OPDRACHTEN</a>
  <a href="#" class="button-3 w-button">ROOSTER</a>
</div>
<div class="container-4">
  <img src="image/agenda.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 766px) 80vw, 613px" srcset="https://uploads-ssl.webflow.com/65167ec34df69a09d453a49c/651694055a394102aeec0054_agenda-p-500.png 500w, https://uploads-ssl.webflow.com/65167ec34df69a09d453a49c/651694055a394102aeec0054_agenda.png 613w" alt="">
  <img src="image/notifications.png" loading="lazy" alt="" class="image-3">
</div>

@endsection