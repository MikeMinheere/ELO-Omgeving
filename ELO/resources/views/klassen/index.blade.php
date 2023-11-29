@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div>
            <div>
                <h1>Klassen</h1>
            </div>
            <div class="container-button">
                <a class="button" href="docentDashboard"> Terug</a>
                <a class="button" href="{{ route('klassen.create') }}"> Maak een nieuwe klas</a>
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
            <th>Klas naam</th>
            <th>Aantal leerlingen</th>
        </tr>


        @foreach ($klassen as $klas)
        <tr>     
            <td width="280px">{{ $klas->class_name }}</td>
            <td>{{ $student[$i]->users_count }}</td>
            <td hidden >{{ ++$i }}</td>
            
            <td>
                <form action="{{ route('klassen.destroy',$klas->id) }}" method="POST" style="text-align: center;">
                    <a class="button" href="{{ route('klassen.show',$klas->id) }}">Show</a>
                    @if ($klas->class_name !== 'Geen klas')
                        <a class="button" href="{{ route('klassen.edit',$klas->id) }}">Edit</a>
                    @endif
                    @if (($klas->class_name !== 'Geen klas') && ($klas->class_name !== 'Docenten'))
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button">Verwijder</button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection