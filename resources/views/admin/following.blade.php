@extends('template')

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
        @php
            // selete following user_id 
            $followTo = DB::table('followers')->where('user_id','=',$user->id)->get();
            //$followTo = DB::statement('select user_id from followers where follow_to = ' . $user->id);
            
        @endphp
        <div class="row">
            @foreach ($followTo as $follower)
                @php
                    // select all data of following data
                    $followers = DB::table('users')->where('id','=',$follower->follow_to)->get();
                @endphp
                @foreach ($followers as $item)
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto mb-3">
                                <img src="/images/profile_picture/{{ $item->profile_picture_path }}"
                                    class="rounded-circle" alt="profile-image" width="100" height="100" style="object-fit: cover !important">
                            </div>
                            <div class="">
                                    
                                    
                                    <h4>{{ $item->name }}</h4>
                                <p class="text-muted">{{ $item->title }} <span>| </span><span><a href="#"
                                            class="text-pink">{{ $item->website_link }}</a></span></p>
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
                            <a href="{{ route('profile',$item->id) }}"><button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">View Profile</button></a>
                            @php
                                $countPost = DB::table('posts')->where('user_id','=',$item->id)->get();
                                $countFollower = DB::table('followers')->where('follow_to','=',$item->id)->get();
                                $countFollowing = DB::table('followers')->where('user_id','=',$item->id)->get();
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
                @endforeach
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