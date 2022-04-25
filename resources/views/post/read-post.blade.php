@extends('template')


@section('css')
    <style type="text/css">
        body{
            background-color: #f4f7f6;
            margin-top:20px;
        }
        .card {
            background: #fff;
            transition: .5s;
            border: 0;
            margin-bottom: 30px;
            border-radius: .55rem;
            position: relative;
            width: 100%;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
        }
        .card .body {
            color: #444;
            padding: 20px;
            font-weight: 400;
        }
        .card .header {
            color: #444;
            padding: 20px;
            position: relative;
            box-shadow: none;
        }
        .single_post {
            -webkit-transition: all .4s ease;
            transition: all .4s ease
        }

        .single_post .body {
            padding: 30px
        }

        .single_post .img-post {
            position: relative;
            overflow: hidden;
            max-height: 500px;
            margin-bottom: 30px
        }

        .single_post .img-post>img {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            -webkit-transition: -webkit-transform .4s ease, opacity .4s ease;
            transition: transform .4s ease, opacity .4s ease;
            max-width: 100%;
            filter: none;
            -webkit-filter: grayscale(0);
            -webkit-transform: scale(1.01)
        }

        .single_post .img-post:hover img {
            -webkit-transform: scale(1.02);
            -ms-transform: scale(1.02);
            transform: scale(1.02);
            opacity: .7;
            filter: gray;
            -webkit-filter: grayscale(1);
            -webkit-transition: all .8s ease-in-out
        }

        .single_post .img-post:hover .social_share {
            display: block
        }

        .single_post .footer {
            padding: 0 30px 30px 30px
        }

        .single_post .footer .actions {
            display: inline-block
        }

        .single_post .footer .stats {
            cursor: default;
            list-style: none;
            padding: 0;
            display: inline-block;
            float: right;
            margin: 0;
            line-height: 35px
        }

        .single_post .footer .stats li {
            border-left: solid 1px rgba(160, 160, 160, 0.3);
            display: inline-block;
            font-weight: 400;
            letter-spacing: 0.25em;
            line-height: 1;
            margin: 0 0 0 2em;
            padding: 0 0 0 2em;
            text-transform: uppercase;
            font-size: 13px
        }

        .single_post .footer .stats li a {
            color: #777
        }

        .single_post .footer .stats li:first-child {
            border-left: 0;
            margin-left: 0;
            padding-left: 0
        }

        .single_post h3 {
            font-size: 20px;
            text-transform: uppercase
        }

        .single_post h3 a {
            color: #242424;
            text-decoration: none
        }

        .single_post p {
            font-size: 16px;
            line-height: 26px;
            font-weight: 300;
            margin: 0
        }

        .single_post .blockquote p {
            margin-top: 0 !important
        }

        .single_post .meta {
            list-style: none;
            padding: 0;
            margin: 0
        }

        .single_post .meta li {
            display: inline-block;
            margin-right: 15px
        }

        .single_post .meta li a {
            font-style: italic;
            color: #959595;
            text-decoration: none;
            font-size: 12px
        }

        .single_post .meta li a i {
            margin-right: 6px;
            font-size: 12px
        }

        .single_post2 {
            overflow: hidden
        }

        .single_post2 .content {
            margin-top: 15px;
            margin-bottom: 15px;
            padding-left: 80px;
            position: relative
        }

        .single_post2 .content .actions_sidebar {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 60px
        }

        .single_post2 .content .actions_sidebar a {
            display: inline-block;
            width: 100%;
            height: 60px;
            line-height: 60px;
            margin-right: 0;
            text-align: center;
            border-right: 1px solid #e4eaec
        }

        .single_post2 .content .title {
            font-weight: 100
        }

        .single_post2 .content .text {
            font-size: 15px
        }

        .right-box .categories-clouds li {
            display: inline-block;
            margin-bottom: 5px
        }

        .right-box .categories-clouds li a {
            display: block;
            border: 1px solid;
            padding: 6px 10px;
            border-radius: 3px
        }

        .right-box .instagram-plugin {
            overflow: hidden
        }

        .right-box .instagram-plugin li {
            float: left;
            overflow: hidden;
            border: 1px solid #fff
        }

        .comment-reply li {
            margin-bottom: 15px
        }

        .comment-reply li:last-child {
            margin-bottom: none
        }

        .comment-reply li h5 {
            font-size: 18px
        }

        .comment-reply li p {
            margin-bottom: 0px;
            font-size: 15px;
            color: #777
        }

        .comment-reply .list-inline li {
            display: inline-block;
            margin: 0;
            padding-right: 20px
        }

        .comment-reply .list-inline li a {
            font-size: 13px
        }

        @media (max-width: 640px) {
            .blog-page .left-box .single-comment-box>ul>li {
                padding: 25px 0
            }
            .blog-page .left-box .single-comment-box ul li .icon-box {
                display: inline-block
            }
            .blog-page .left-box .single-comment-box ul li .text-box {
                display: block;
                padding-left: 0;
                margin-top: 10px
            }
            .blog-page .single_post .footer .stats {
                float: none;
                margin-top: 10px
            }
            .blog-page .single_post .body,
            .blog-page .single_post .footer {
                padding: 30px
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
@endsection


@section('content')
    <div class="container">
        <div class="card single_post">
            <div class="body" style="margin-top:30px">
                <h2 class="mb-5 mt-5">{{ $post->title }}</h2>
                <div class="img-post"> <img class="d-block img-fluid"
                    src="/{{ $post->cover_path }}" alt="Cover Image">
                </div>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        {{-- blog comments --}}
        <div class="card">
            @php
                $cmt = DB::table('comments')
                        ->where('post_id','=',$post->id)->get();
                $countCmt = count($cmt);
            @endphp
            <div class="header">
                <h2>Comments {{ $countCmt }}</h2>
            </div>
            <div class="body">
                <ul class="comment-reply list-unstyled">
                    @foreach ($comments as $comment)
                        @if ($comment->post_id == $post->id)
                            <li class="row clearfix border-top py-3 pl-3">
                                    <img class="rounded-circle profile" width="30" height="30" style="object-fit: cover"
                                        src="/images/profile_picture/{{ $comment->userPost->profile_picture_path }}" alt="Profile Picture">
                                    <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                        <h5 class="m-b-0"><a href="{{ route('profile',$comment->userPost->id) }}">{{ $comment->userPost->name }}</a></h5>
                                        <p>{{ $comment->comment }}</p>
                                        <ul class="list-inline">
                                            <li><small>{{ $comment->created_at }}</small></li>
                                            <li><a class="text-right reply" data-id="{{ $comment->id }}" href="javascript:void(0);" id="reply" onclick="reply()">Reply</a></li>
                                            
                                        </ul>
                                    </div>
                                {{-- reply --}}
                                @foreach ($replies as $reply)
                                    @if ($reply->replyPost->id == $comment->id)
                                        <div class="text-box col-md-10 col-8 ml-5 p-r0 mt-3 row ">
                                            <img class="rounded-circle profile" width="30" height="30" style="object-fit: cover"
                                            src="/images/profile_picture/{{ $reply->replyUser->profile_picture_path }}" alt="Profile Picture">
                                            <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                                <h5 class="m-b-0"><a href="{{ route('profile',$reply->replyUser->id) }}">{{ $reply->replyUser->name }}</a></h5>
                                                <p>{{ $reply->reply }}</p>
                                                <ul class="list-inline">
                                                    <li><small>{{ $reply->created_at }}</small></li>
                                                    <li><a class="text-right reply" data-id="{{ $comment->id }}" href="javascript:void(0);" id="reply" onclick="reply">Reply</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </li>
                            {{-- reply textarea --}}
                            @if (auth()->check())
                                <div class="comment-form" id="replycomment-{{ $comment->id }}" style="display: none">
                                    <form action="{{ route('reply') }}" method="post">
                                        @csrf
                                        <div class="col-sm-10 ml-5">
                                            <div class="form-group row">
                                                <textarea rows="3" class="form-control no-resize" placeholder="Write your reply..."
                                                name="reply"></textarea>
                                                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                <button type="submit" class="btn btn-block btn-primary mt-2"><i class="fa-solid fa-paper-plane"></i> REPLY</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        @endif
                    @endforeach
                    
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Leave a comment</h2>
            </div>
            <div class="body">
                <div class="comment-form">
                    <form class="row clearfix" action="{{ route('comment') }}" method="POST">
                        @csrf
                        {{-- <div class="col-sm-6">
                            <div class="form-group"> <input type="text" class="form-control"
                                    placeholder="Your Name"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"> <input type="text" class="form-control"
                                    placeholder="Email Address"></div>
                        </div> --}}
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want to comment for this post..."
                                name="comment"></textarea>
                                
                            </div>
                            @if (auth()->check())
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <button type="submit" class="btn btn-block btn-primary"><i class="fa-solid fa-comment"></i> SUBMIT COMMENT</button>
                            @else
                                <button type="button" class="btn btn-block btn-primary"><a href="{{ route('login') }}" style="color: white">Login or Register to submit your comment</a></button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // function reply(){
        //     var reply = document.getElementById('reply');
        //     var hideshow = document.getElementById('hideshow');
        //     if(hideshow.style.display == 'none')
        //         hideshow.style.display = 'block';
        //     else
        //         hideshow.style.display = 'none';
        // }

        // $("#reply").click(function(){
        // $("#hideshow").hide();
        // });

        // $("#reply").click(function(){
        // $("#hideshow").show();
        // });
        // $(document).ready(function(){
        //     $(".reply").click(function(){
        //         $(".hideshow").show();
        //     });
        // });

        $(document).ready(function(){
            // change the selector to use a class
            $(".reply").click(function(){
                // this will query for the clicked toggle
                var $toggle = $(this); 

                // build the target form id
                var id = "#replycomment-" + $toggle.data('id'); 

                $( id ).toggle();
            });
        });
    </script>
@endsection
