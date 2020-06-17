@extends('layout.main')

@section('main-content')

    <div class="container">
        <h1 class="mb-5">Student Home</h1>

        <section class="d-flex .justify-content-around flex-wrap">
            @foreach($students as $student)
                <div class="card mr-5 mb-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Student Name:</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $student->name }}</h6>
                        <h5>Class:</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $student->class }}</h6>
                        <a href="#" class="btn btn-primary">SHOW</a>
                    </div>
                </div>
            @endforeach
        </section>
  
    </div>

@endsection

