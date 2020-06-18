@extends('layouts.main')
@section('main-content')
    <h1 class="text-primary mb-4 text-center">{{$subject->name}}</h1>
    <section class="subjects">
        <table class="table">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$subject->id}}</td>
                    <td>{{$subject->name}}</td>
                    <td>{{$subject->description}}</td>
                    <td>{{$subject->created_at}}</td>
                    <td>{{$subject->updated_at}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('subjects.edit', $subject->id)}}">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>    
    </section>
@endsection