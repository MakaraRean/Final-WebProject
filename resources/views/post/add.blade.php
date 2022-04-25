@extends('template')
 @section('content')
    <h2>All Post :</h2>
   <div class="row">
      <div class="col-md-12">
      <form method="POST" action="{{ route ('post.save') }}" enctype="multipart/form-data"> 
          @csrf
          <br>
            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
                
            </div>
            <div class="form-group">
                <label for="content">Content :</label>
                <textarea class="form-control" name="body" id="body">{{ old('body') }}</textarea>
                @error('body')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror   
            </div>
            <div class="form-group">
                <label for="content">Cover : </label>
                <input type="file" name="cover"> 

                
            </div>
            <div class="form-group">
                <label for="category">Category : </label>
                
                <select name="category_id">
                <option value="" selected> --- Selected Category --- </option>
                @foreach ($cat as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
               
                </select>
                @error('category_id')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <div class="form-group" style="padding-top: 10px">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
   </div>
    @endsection   