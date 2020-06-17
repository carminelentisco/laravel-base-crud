@extends('layout.main')

@section('main-content')

    <div class="container">
        <h1 class="mb-5">Student Show</h1>

        <section class="d-flex justify-content-center">
            <div class="card mr-5 mb-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Student Name:</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->name }}</h6>
                    <h5>Age:</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->age }}</h6>
                    <h5>Date of birth:</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->date_of_birth }}</h6>
                    <h5>Birth place:</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->birth_place }}</h6>
                    <h5>Class:</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->class }}</h6>
                    <h5>Address of studies:</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->address_of_studies }}</h6>
                </div>
            </div> 
        </section>

        <section class="d-flex justify-content-center">
            <a class="btn btn-primary mr-5" href="{{ route('home') }}">Return to Home</a>
            <a class="btn btn-success mr-5" href="{{ route('students.index') }}">Return to Student List</a>
            <a class="btn btn-danger mr-5" href="{{ route('students.create') }}">Add New Students</a>

        </section>
  
    </div>

@endsection