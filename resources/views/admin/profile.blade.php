@extends('template')

@section('css')
    {{-- <link rel="stylesheet" href="/style/profile.css"> --}}
    <style>
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

        .chooser {
            position: absolute;
            z-index: 1;
            opacity: 0;
            cursor: pointer;
        }

    </style>
@endsection

@section('content')
    <br><br>
    <div class="container" style="z-index:1;margin-top:20px">
        <div class="main-body">

            <!-- Breadcrumb -->
            {{-- <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav> --}}
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img id="myImg" src="/images/profile_picture/{{ $user->profile_picture_path }}"
                                    alt="{{ $user->name }}" class="rounded-circle profile" width="150" height="150"
                                    style="object-fit: cover">
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                {{-- Change Profile Picture --}}
                                @if ($user->id == auth()->user()->id)
                                    <form action="{{ route('changePf', $user->id) }}" method="post" id="form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <input type="file" class="chooser" name="change_pf" id="file">
                                            <a href="#">Change Profile Picture</a>
                                        </div>
                                    </form>
                                @endif
                                <form action="{{ route('follow') }}" method="post">
                                    @csrf
                                    <div class="mt-3">
                                        <h4 name="name">{{ $user->name }}</h4>
                                        <p class="text-secondary mb-1">{{ $user->title }}</p>
                                        @php
                                            $countPost = DB::table('posts')
                                                ->where('user_id', '=', $user->id)
                                                ->get();
                                            $countFollower = DB::table('followers')
                                                ->where('follow_to', '=', $user->id)
                                                ->get();
                                            $countFollowing = DB::table('followers')
                                                ->where('user_id', '=', $user->id)
                                                ->get();
                                        @endphp
                                        <div class="mt-2 mb-2">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="{{ route('following',$user->id) }}"><h4>{{ count($countFollowing) }}</h4></a>
                                                    <p class="mb-0 text-muted">Following</p>
                                                </div>
                                                <div class="col-4">
                                                    <a href="{{ route('follower',$user->id) }}"><h4>{{ count($countFollower) }}</h4></a>
                                                    <p class="mb-0 text-muted">Followers</p>
                                                </div>
                                                <div class="col-4">
                                                    <h4>{{ count($countPost) }}</h4>
                                                    <p class="mb-0 text-muted">Posts </p>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($user->id != auth()->user()->id)
                                            @php
                                                $check = DB::table('followers')
                                                    ->where('user_id', '=', auth()->user()->id)
                                                    ->where('follow_to', '=', $user->id)
                                                    ->get();
                                            @endphp
                                            @if (count($check))
                                                <button type="button" class="btn btn-outline-primary"
                                                    id="followed">Followed</button>
                                            @else
                                                <button class="btn btn-primary" type="submit" id="follow">Follow</button>
                                            @endif
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <input type="hidden" name="follow_to" value="{{ $user->id }}">
                                            <button type="button" class="btn btn-outline-primary">Message</button>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- @if ($social->user_id == $user->id) --}}
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-globe mr-2 icon-inline">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path
                                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                    </svg>Website</h6>
                                <a href="//{{ str_replace('https://', '', $user->website_link) }}" target="_blank"
                                    class="text-secondary">{{ $user->website_link }}</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-github mr-2 icon-inline">
                                        <path
                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                        </path>
                                    </svg>Github</h6>
                                <a href="//{{ str_replace('https://', '', $user->github_link) }}" target="_blank"
                                    class="text-secondary">{{ $user->github }}</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-twitter mr-2 icon-inline text-info">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>Twitter</h6>
                                <a href="//{{ str_replace('https://', '', $user->twitter_link) }}" target="_blank"
                                    class="text-secondary">{{ $user->twitter }}</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram</h6>
                                <a href="//{{ str_replace('https://', '', $user->instagram_link) }}" target="_blank"
                                    class="text-secondary">{{ $user->instagram }}</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>Facebook</h6>
                                <a href="//{{ str_replace('https://', '', $user->facebook_link) }}" target="_blank"
                                    class="text-secondary">{{ $user->facebook }}</a>
                            </li>
                        </ul>
                    </div>
                    {{-- @endif --}}
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->name }}
                                </div>
                            </div>
                            <hr>
                            @if ($user->id == auth()->user()->id)
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->email }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->phone }}
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ Str::mask($user->email, '*', 2, 5) }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ Str::mask($user->phone, '*', 3, 5) }}
                                    </div>
                                </div>
                            @endif

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->address }}
                                </div>
                            </div>
                            <hr>
                            @if ($user->id == auth()->user()->id)
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a class="btn btn-info "
                                            href="{{ route('editProfile', auth()->user()->id) }}">Edit Profile Setting</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            @foreach ($posts as $post)
                                @if ($post->user_id == $user->id)
                                    <div class="post-blog">
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img class="img-thumbnail" src="/{{ $post->cover_path }}">
                                            </div>
                                            <div class="col-md-9">
                                                <h4><a href="{{ route('readPost', $post->id) }}">{{ $post->title }}</a>
                                                </h4>
                                                <span class="badge badge-secondary">{{ $post->category->name }}</span>
                                                <p>{{ Str::limit($post->body, 100, '...') }}</p>
                                                <span>{{ $post->showDate() }}</span>
                                                <span>Author : {{ $post->author->name }}</span>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="more label"><a
                                                                href="{{ route('readPost', $post->id) }}">Read more</a>
                                                        </div>
                                                    </div>
                                                    @if (auth()->check())
                                                        @if (auth()->user()->id == $post->author->id || auth()->user()->is_admin)
                                                            <div class="col-md-4 text-right">
                                                                <form action="{{ route('post.delete', $post->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a href="{{ route('post.edit', $post->id) }}"
                                                                        class="btn btn-link">Edit </a> |
                                                                    <button type="submit"
                                                                        class="btn btn-link">Delete</button>
                                                                </form>
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.getElementById("wellcome").style.color = "white";
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        modal.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <script>
        document.getElementById("file").onchange = function() {
            document.getElementById("form").submit();
        };


        window.onload = function() {
            var followed = document.getElementById("followed");
            var follow = document.getElementById("follow");
            if (followed.style.display == "block") {
                follow.style.display = "none";
            }

        }
    </script>
@endsection
