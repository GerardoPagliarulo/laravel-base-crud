<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-base-crud</title>
</head>
<body>
    <header>
        <h1>Laravel Eloquent ORM</h1>
    </header>
    <main>
        <h2>Students</h2>
        @foreach ($students as $student)
            <div class="student">
                <h4>{{$student->name}}</h4>
                <p>{{$student->description}}</p>
            </div>
        @endforeach
    </main>
</body>
</html>