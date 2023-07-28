@extends('layouts.app')
@section('content')
<a href="{{route('note.index')}}">Back</a>
    
<form  method="POST" action="{{route('note.update',$note->id )}}">
@csrf
@method('PUT')

<label >Title:</label>
<input  name="title"type="text" value="{{$note->title}}">
@error('title')
    <p class=" mt-2 text-bg-danger p-3"><strong>{{ $message }}</strong></p>
    @enderror

<label >Description:</label>
<input name='description' type="text"value="{{$note->description}}">
@error('description')
    <p class=" mt-2 text-bg-danger p-3"><strong>{{ $message }}</strong></p>
 @enderror

<input type="submit" value="Update">



</form>





@endsection 
