@extends('layouts.app')
@section('content')

<a href="{{route('note.index')}}">Back</a>

<form method="POST" action="{{route('note.store')}}">
@csrf

    <label >Title:</label>
    <input  name="title"type="text">
    @error('title')
    <p class=" mt-2 text-bg-danger p-3"><strong>{{ $message }}</strong></p>
        
    @enderror

    <label >Description:</label>
    <input name="description" type="text">
    @error('description')
    <p class=" mt-2 text-bg-danger p-3"><strong>{{ $message }}</strong></p>
    @enderror

    <input type="submit" value="Create">
</form>

    
@endsection