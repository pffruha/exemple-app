@extends('layouts.main')
@section('content')
<div>
<form action="{{route('post.update', $post->id)}}" method="post">
@csrf
@method('patch')
<div class="form-group">
  <label for="Title" class="form-label">Title</label>
  <input type="Text" name="title" class="form-control" id="Title" placeholder="Title">
</div>
<div class="form-group">
  <label for="Content" class="form-label">Content</label>
  <textarea class="form-control"  name="Content"  id="Content" placeholder="Content"></textarea>
</div>
<div class="form-group">
  <label for="Image" class="form-label">Image</label>
  <input type="Text"  name="Image"  class="form-control" id="Image" placeholder="Image">
</div>
<button class="btn btn-primary" type="submit">Update</button>
</form>
</div>
@endsection
   
    