@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div>
            <div>
                <h2>Edit Class</h2>
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
  
    <form action="{{ route('klassen.update',$klassen->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Class name:</strong>
                    <input type="text" name="class_name" value="{{ $klassen->class_name }}" class="form-control" placeholder="Class name">
                </div>


                <div class="form-group">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                    <table id="myTable">
                    <tr>
                        @foreach ($students as $student)
                    
                        <tr>
                            <td>{{ $student->first_name }} {{ $student->last_name }}, {{ $student->student_number }}</td>
                            <td><input name="user[]" type="checkbox" id="user[]" value="{{ $student->id }}" {{  ($klassen->class_name == $student->class_name ? ' checked' : '') }}/></td>
                        </tr>

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