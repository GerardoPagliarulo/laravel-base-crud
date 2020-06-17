<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>laravel-base-crud</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
            <div class="navbar-brand">
                <a class="nav-link" href="{{route('home')}}">School</a>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('subjects.index')}}">Subjects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('subjects.create')}}">Add Subject</a>
                </li>
            </ul>
        </nav>
    </header>