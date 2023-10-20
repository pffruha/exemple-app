@extends('layouts.main')
@section('content')
<div>
<div>
<a href="{{route('post.create')}}" class="btn btn-success mb-3" >Add post</a>
</div>
<div>
@foreach($posts as $post)
<div> {{$post->id}}. <a href="{{route('post.show', $post->id)}}">{{ $post->title}} </a> </div>

@endforeach

</div>
@endsection


  
