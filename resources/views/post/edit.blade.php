@extends('template')
 @section('content')
    <h2>All Post :</h2>
   <div class="row">
      <div class="col-md-12">
      <form method="POST" action="{{ route ('post.update', $post ->id) }}"> 
          @csrf
          @method('PUT')
            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="content">Content : </label>
                <textarea class="form-control" name="content">{{ $post->body }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Category : </label>
                <!-- <input type="text" class="form-control" name="category_id"> -->
                <select name="category_id">
                    @foreach($cat as $category)
                        <option value="{{ $category->id }}" 
                        @if($category->id == $post->category_id)
                            selected
                        @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="padding-top: 10px">
                <button type="submit" class="btn btn-primary">Save Change</button>
            </div>
        </form>
      </div>
   </div>
    @endsection   