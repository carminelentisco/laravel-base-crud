@extends('layout.main')

@section('main-content')

    <div class="container">
        <h1 class="mb-5">Add New Student</h1>

        {{-- Controllo delle informazioni --}}
        @if ($errors->all())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        
        <form action="{{ route('students.store') }}" method="POST">
            @csrf 
            @method('POST')
            
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Name student" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="age" placeholder="Age" value="{{ old('age') }}">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="date_of_birth" placeholder="Date of birth" value="{{ old('date_of_birth') }}">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="birth_place" placeholder="Birth place" value="{{ old('birth_place') }}">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="class" placeholder="Class" value="{{ old('class') }}">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="address_of_studies" placeholder="Addres of studies" value="{{ old('address_of_studies') }}">
            </div>
            <input class="btn btn-success" type="submit" value="Create">
        </form>
        
         {{-- Action --}}
        <section class="d-flex justify-content-center">
            <a class="btn btn-primary mr-5" href="{{ route('home') }}">Return to Home</a>
            <a class="btn btn-success mr-5" href="{{ route('students.index') }}">Return to Student List</a>
        </section>

    </div>

@endsection
