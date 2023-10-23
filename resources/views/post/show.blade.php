@extends('layouts.main')
@section('content')
<div>
<div>{{$post->id}}. {{ $post->title}} </div>
<div>{{$post->content}}</div>
<a href="{{route('post.edit', $post->id)}}" class="btn btn-success mb-3" >Edit post</a>
</div>
<div >
<form action="{{route('post.delete', $post->id)}}" method="post" class="btn btn-success mb-3" >
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
</form>

</div>
@endsection
   

