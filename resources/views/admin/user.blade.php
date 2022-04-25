@extends('template')

@section('css')
    {{-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script> --}}
@endsection

@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="content" style="z-index: 1">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4"
                        data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200"
                        data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a></div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <br><br>
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-lg-4">
                        <div class="text-center card-box">
                            <div class="member-card pt-2 pb-2">
                                <div class="thumb-lg member-thumb mx-auto mb-3">
                                    <img src="/images/profile_picture/{{ $user->profile_picture_path }}"
                                        class="rounded-circle" alt="profile-image" width="100" height="100" style="object-fit: cover !important">
                                </div>
                                <div class="">
                                    @if ($user->id == auth()->user()->id)
                                        <h4>{{ $user->name }} (You)</h4>
                                    @else
                                        <h4>{{ $user->name }}</h4>
                                    @endif
                                    <p class="text-muted">{{ $user->title }} <span>| </span><span><a href="#"
                                                class="text-pink">{{ $user->website_link }}</a></span></p>
                                </div>
                                <ul class="social-links list-inline">
                                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                            class="tooltips" href="" data-original-title="Facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                            class="tooltips" href="" data-original-title="Twitter"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                            class="tooltips" href="" data-original-title="Skype"><i
                                                class="fa fa-skype"></i></a></li>
                                </ul>
                                <a href="{{ route('profile',$user->id) }}"><button type="button"
                                    class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">View Profile</button></a>
                                @php
                                    $countPost = DB::table('posts')->where('user_id','=',$user->id)->get();
                                    $countFollower = DB::table('followers')->where('follow_to','=',$user->id)->get();
                                    $countFollowing = DB::table('followers')->where('user_id','=',$user->id)->get();
                                @endphp
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>{{ count($countFollowing) }}</h4>
                                                <p class="mb-0 text-muted">Following</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>{{ count($countFollower) }}</h4>
                                                <p class="mb-0 text-muted">Followers</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>{{ count($countPost) }}</h4>
                                                <p class="mb-0 text-muted">Total Posts</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                @endforeach
                
            </div>
            <!-- end row -->
        </div>
        <!-- container -->
    </div>

    <style type="text/css">
        body {
            background: #DCDCDC;
            margin-top: 20px;
        }

        .card-box {
            padding: 20px;
            border-radius: 3px;
            margin-bottom: 30px;
            background-color: #fff;
        }

        .social-links li a {
            border-radius: 50%;
            color: rgba(121, 121, 121, .8);
            display: inline-block;
            height: 30px;
            line-height: 27px;
            border: 2px solid rgba(121, 121, 121, .5);
            text-align: center;
            width: 30px
        }

        .social-links li a:hover {
            color: #797979;
            border: 2px solid #797979
        }

        .thumb-lg {
            height: 88px;
            width: 88px;
        }

        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            max-width: 100%;
            height: auto;
        }

        .text-pink {
            color: #ff679b !important;
        }

        .btn-rounded {
            border-radius: 2em;
        }

        .text-muted {
            color: #98a6ad !important;
        }

        h4 {
            line-height: 22px;
            font-size: 18px;
        }

    </style>

    <script type="text/javascript">

    </script>
@endsection
