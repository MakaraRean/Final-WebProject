@extends('template')
 @section('content')
 <br><br><br>
    <h2>All Post :</h2>
   <div class="row">
      @if ($message = Session::get('success'))
      <div class="alert-success alert-block" style="margin-bottom: 10px">
         <button type="button" class="close" data-dismisee="alert">*</button>

         <strong>{{ $message}}</strong>
      </div>
      @endif
      <div class="col-md-12" >
         <a class="btn btn-primary" href="{{ route('post.add') }}">Add New</a>
      </div>
   </div>
   <div class="row">
      <div class="col-md-9">
         @foreach ($posts as $post)
            <div class="post-blog">
            <hr>
               <div class="row">
                  <div class="col-md-3">
                     <img class="img-thumbnail" src="{{ $post->cover_path }}">
                  </div>
                  <div class="col-md-9">
                     <h4>{{ $post->title }}</h4>
                     <span class="badge badge-secondary">{{ $post ->category->name }}</span>
                     <p>{{ Str::limit($post ->body, 100, '...') }}</p>
                     <span>{{ $post ->showDate() }}</span>
                     <div class="row">
                        <div class="col-md-8">
                           <div class="more label"><a href="#">Read more</a></div>
                        </div>

                        <div class="col-md-4 text-right">
                           <form action="{{ route('post.delete', $post ->id) }}" method="POST">
                              @csrf
                              @method('delete')
                              <a href="{{ route('post.edit', $post->id )}}" class="btn btn-link">Edit </a>  | 
                              <button type="submit" class="btn btn-link">Delete</button>  
                           </form>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         @endforeach
      </div>
   </div>
    @endsection