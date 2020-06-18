@extends('layout.main')

@section('main-content')

    <div class="container mb-5">

        @if ( session('deleted') )
            <div class="alert alert-success">
                {{ session('deleted') }} is deleted
            </div>
        @endif

        <section class="card">
            <h2 class="card-header text-center mb-5">STUDENT LIST</h2>

            <div class="d-flex justify-content-around flex-wrap">
                @foreach($students as $student)
                    <div class="card d-flex flex-column align-items-center  mb-5" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Student Name:</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $student->name }}</h6>
                            <h5>Class:</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $student->class }}</h6>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary">SHOW</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">EDIT</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
    </div>

@endsection