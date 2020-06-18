@extends('layouts.main')
@section('main-content')
    <h1 class="text-primary mb-4 text-center">ADD NEW SUBJECT</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('subjects.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <input class="form-control" type="text" name="name" 
            value="{{old('name')}}" placeholder="Subject name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" 
            value="{{old('description')}}" placeholder="Subject description">
        </div>
        <input class="btn btn-primary" type="submit" value="Add">
    </form>
@endsection