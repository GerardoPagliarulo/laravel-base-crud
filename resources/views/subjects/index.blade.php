@extends('layouts.main')
@section('main-content')
<h1 class="text-primary mb-4 text-center">SUBJECTS</h1>
    <section class="subjects">
        <table class="table">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{$subject->id}}</td>
                        <td>{{$subject->name}}</td>
                        <td>{{$subject->description}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('subjects.show', $subject->id)}}">Show</a>
                        </td>
                        <td>update</td>
                        <td>delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </section>
@endsection