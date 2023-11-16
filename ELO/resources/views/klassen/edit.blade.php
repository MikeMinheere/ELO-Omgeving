@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Edit Klas</h1>
            </div>
            <div class="pull-right">
                <a class="button" href="{{ route('klassen.index') }}"> Terug</a>
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
  
    <form action="{{ route('klassen.update',$klassen->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Klas naam:</strong>
                    <input class="w-input" type="text" name="class_name" value="{{ $klassen->class_name }}" class="form-control" placeholder="Class name">
                </div>


                <div class="form-group">
                <input class="w-input" type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek voor een student" title="Type in a name">
                    <table id="myTable">
                    <tr>
                        @foreach ($students as $student)
                        @if($klassen->class_name !== 'Docenten')
                            @if($student->role !== 'teacher' )
                                <tr>
                                    <td>{{ $student->first_name }} {{ $student->last_name }}, {{ $student->student_number }}</td>
                                    <td><input name="user[{{ $student->id }}]" type="checkbox" id="user[{{ $student->id }}]" value="{{ $student->id }}" {{  ($klassen->class_name == $student->class_name ? ' checked' : '') }}/></td>
                                </tr>
                            @endif
                        @else
                            <tr>
                                <td>{{ $student->first_name }} {{ $student->last_name }}, {{ $student->student_number }}</td>
                                <td><input name="user[{{ $student->id }}]" type="checkbox" id="user[{{ $student->id }}]" value="{{ $student->id }}" {{  ($klassen->class_name == $student->class_name ? ' checked' : '') }}/></td>
                            </tr>
                        @endif
                        @endforeach
                        </tr>
                        
                    </table>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>


<script>
    function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }       
    }
    }
</script>
@endsection