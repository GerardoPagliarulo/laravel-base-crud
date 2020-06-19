@extends('layouts.main')
@section('main-content')
    <h1 class="text-primary mb-4 text-center">Assistants</h1>
    <section class="assistants">
        <table class="table">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assistants as $assistant)
                    <tr>
                        <td>{{$assistant->id}}</td>
                        <td>{{$assistant->name}}</td>
                        <td>{{$assistant->age}}</td>
                        <td>{{$assistant->gender}}</td>
                        <td>{{$assistant->address}}</td>
                        <td>{{$assistant->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </section>
@endsection