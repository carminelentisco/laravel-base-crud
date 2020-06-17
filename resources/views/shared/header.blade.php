<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD Operation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>

        <header class="mb-5">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a  class="navbar-brand" >Student NavBar</a>

                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Student List</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.create') }}">Add New Student</a>
                    </li>
                </ul>
              </nav>
        </header>