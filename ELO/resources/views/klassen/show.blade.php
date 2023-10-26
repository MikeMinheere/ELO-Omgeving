@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Class</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('klassen.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Class Name:</strong>
                {{ $klassen->class_name }}
            </div>

            <table class="table table-bordered">
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
            </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection