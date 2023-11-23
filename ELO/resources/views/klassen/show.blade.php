@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Klas</h1>
            </div>
            <div class="container-button">
                <a class="button" style="margin-bottom: 10px;" href="{{ route('klassen.index') }}">Terug</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Klas Name:</strong>
                {{ $klassen->class_name }}
            </div>

            <table class="table table-bordered">
                <th>Naam student</th>
                <th width="280px">Studenten nummer</th>

            @foreach ($students as $student)
            <tr>
                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                <td>{{ $student->student_number }}</td>
            </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection