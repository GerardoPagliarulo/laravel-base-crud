@extends('layouts.main')
@section('main-content')
<h1 class="text-primary mb-4 text-center">HOMEPAGE</h1>
    <section class="students">
        <h2 class="mb-4 text-center">Students List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Description</th>    
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </section>
@endsection