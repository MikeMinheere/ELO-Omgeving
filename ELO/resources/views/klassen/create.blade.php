@extends('layouts.app')  
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Maak een nieuwe klas aan</h2>
        </div>
        <div class="container-button">
            <a class="button" style="margin-bottom: 10px;" href="{{ route('klassen.index') }}"> Terug</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('klassen.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Klas naam:</strong>
                <input class='w-input' type="text" name="class_name" value="{{ $klassen->class_name }}" class="form-control" placeholder="Class name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button class ="button" type="submit">Maak klas</button>
        </div>
    </div>
</form>
@endsection