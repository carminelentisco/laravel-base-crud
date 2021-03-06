@extends('layout.main')

@section('main-content')

    <div class="container">
        <h1 class="mb-5">Student Show</h1>

        <section class="d-flex justify-content-center">
            <div class="card">
               
                <h5 class="card-header">{{ $student->name }}</h5>
                
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">AGE</th>
                            <th scope="col">DATE OF BIRTH</th>
                            <th scope="col">BIRT PLACE</th>
                            <th scope="col">CLASS</th>
                            <th scope="col">ADDRESS OF STUDIES</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">{{ $student->age }}</th>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->birth_place }}</td>
                            <td>{{ $student->class }}</td>
                            <td>{{ $student->address_of_studies }}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                
                <div class="card-footer text-muted d-flex justify-content-center">
                    <a class="btn btn-primary mr-5" href="{{ route('students.index') }}">Return to Student List</a>
                    <a class="btn btn-primary mr-5" href="{{ route('students.create') }}">Add New Students</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="DELETE">
                    </form>
                </div>

            </div> 
        </section>

        
  
    </div>

@endsection