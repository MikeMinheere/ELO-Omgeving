@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div>
            <div>
                <h2>Show Class</h2>
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
                <th>Naam student</th>
                <th width="280px">Studenten nummer</th>

            @foreach ($students as $student)
            <tr>
                <th>{{ $student->first_name }} {{ $student->last_name }}</th>
                <th>{{ $student->student_number }}</th>
            </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection