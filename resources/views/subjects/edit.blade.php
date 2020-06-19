@extends('layouts.main')
@section('main-content')
    <h1 class="text-primary mb-4 text-center">Edit subjucts</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('subjects.update', $subject->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name *</label>
            <input class="form-control" type="text" id="name" name="name" 
            value="{{old('name', $subject->name)}}" placeholder="Subject name">
        </div>
        <div class="form-group">
            <label for="description">Description *</label>
            <input class="form-control" type="text" id="description" name="description" 
            value="{{old('description', $subject->description)}}" placeholder="Subject description">
        </div>
        <input class="btn btn-primary" type="submit" value="Edit">
    </form>
@endsection