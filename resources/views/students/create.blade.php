@extends('layout.main')

@section('main-content')

    <div class="container">
        <h1 class="mb-5">Add New Student</h1>

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
                <input class="form-control" type="text" name="name" placeholder="Name student">
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="age" placeholder="Age">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="date_of_birth" placeholder="Date of birth">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="birth_place" placeholder="Birth place">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="class" placeholder="Class">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="address_of_studies" placeholder="Addres of studies">
            </div>
            <input class="btn btn-success" type="submit" value="Create">
        </form>
        
  
    </div>

@endsection
