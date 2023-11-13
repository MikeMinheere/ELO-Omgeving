@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div>
            <div>
                <h1>Classes</h1>
            </div>
            <div class="pull-right">
                <a class="button" href="dashboardDocent"> Back</a>
                <a class="button" style="margin-bottom: 20px;" href="{{ route('klassen.create') }}"> Create New class</a>
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
            <td width="280px">{{ $klas->class_name }}</td>
            <td>{{ $student[$i]->users_count }}</td>
            <td hidden >{{ ++$i }}</td>
            
            <td>
                <form action="{{ route('klassen.destroy',$klas->id) }}" method="POST" style="text-align: center;">
   
                    <a class="button" href="{{ route('klassen.show',$klas->id) }}">Show</a>
    
                    <a class="button" href="{{ route('klassen.edit',$klas->id) }}">Edit</a>
                    @if (($klas->class_name !== 'Geen klas') && ($klas->class_name !== 'Leraren'))
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button">Delete</button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection