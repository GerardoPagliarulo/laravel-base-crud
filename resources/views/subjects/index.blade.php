@extends('layouts.main')
@section('main-content')
    @if (session('deleted'))
        <div class="alert alert-success">
            {{session('deleted')}} è stata cancellata.
        </div>
    @endif
    <h1 class="text-primary mb-4 text-center">SUBJECTS</h1>
    <section class="subjects">
        <table class="table">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
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
                        <td>
                            <a class="btn btn-success" href="{{route('subjects.show', $subject->id)}}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('subjects.edit', $subject->id)}}">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('subjects.destroy', $subject->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </section>
@endsection