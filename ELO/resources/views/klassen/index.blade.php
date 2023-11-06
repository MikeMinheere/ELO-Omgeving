@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Classes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('klassen.create') }}"> Create New class</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>Class name</th>
            <th>Aantal leerlingen</th>
            <th width="280px">Action</th>
        </tr>


        @foreach ($klassen as $klas)
        <tr>     
            <th width="280px">{{ $klas->class_name }}</th>
            <th>{{ $student[$i]->users_count }}</th>
            <th hidden >{{ ++$i }}</th>
            
            <th>
                <form action="{{ route('klassen.destroy',$klas->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('klassen.show',$klas->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('klassen.edit',$klas->id) }}">Edit</a>
                    @if ($klas->class_name !== 'Geen klas')
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger">Delete</button>
                    @endif
                </form>
            </th>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection