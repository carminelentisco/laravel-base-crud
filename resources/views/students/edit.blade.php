@extends('layout.main')

@section('main-content')

    <div class="container">
        <h1 class="mb-5">Edit student</h1>

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

        
        <form action="{{ route('students.update', $student->id ) }}" method="POST">
            @csrf 
            @method('PATCH')
            
            <div class="form-group">
                <label for="name">Name *</label>
                <input class="form-control" type="text" name="name"id="name" placeholder="Name student" value="{{ old('name', $student->name) }}">
            </div>
            <div class="form-group">
                <label for="age">Age *</label>
                <input class="form-control" type="number" name="age" id="age" placeholder="Age" value="{{ old('age', $student->age) }}">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of birth *</label>
                <input class="form-control" type="text" name="date_of_birth" id="date_of_birth" placeholder="Date of birth" value="{{ old('date_of_birth', $student->date_of_birth) }}">
            </div>
            <div class="form-group">
                <label for="birth_pace"></label>
                <input class="form-control" type="text" name="birth_place" id="birth_place" placeholder="Birth place" value="{{ old('birth_place',$student->birth_place) }}">
            </div>
            <div class="form-group">
                <label for="class">Class *</label>
                <input class="form-control" type="text" name="class" id="class" placeholder="Class" value="{{ old('class',$student->class) }}">
            </div>
            <div class="form-group">
                <label for="address_of_studies">Addres of studies</label>
                <input class="form-control" type="text" name="address_of_studies"  id="address_of_studies" placeholder="Addres of studies" value="{{ old('address_of_studies', $student->address_of_studies) }}">
            </div>
            <input class="btn btn-success" type="submit" value="Edit">
        </form>
        
         {{-- Action --}}
        <section class="d-flex justify-content-center">
            <a class="btn btn-primary mr-5" href="{{ route('home') }}">Return to Home</a>
            <a class="btn btn-success mr-5" href="{{ route('students.index') }}">Return to Student List</a>
        </section>

    </div>

@endsection
