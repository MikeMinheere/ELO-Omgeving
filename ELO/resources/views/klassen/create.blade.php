@extends('layouts.app')  
  
@section('content')
<div class="row">
    <div>
        <div>
            <h2>Add New Class</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('klassen.index') }}"> Back</a>
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
                <strong>Class name:</strong>
                <input type="text" name="class_name" value="{{ $klassen->class_name }}" class="form-control" placeholder="Class name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection