@extends('layouts.main')
@section('main-content')
    <h1 class="text-primary mb-4 text-center">Teachers</h1>
    <section class="teachers">
        <table class="table">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{$teacher->id}}</td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->age}}</td>
                        <td>{{$teacher->gender}}</td>
                        <td>{{$teacher->address}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </section>
@endsection