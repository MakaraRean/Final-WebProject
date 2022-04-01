<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile settings - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
            <div class="col-md-4 d-none d-md-block">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav flex-column nav-pills nav-gap-y-1">
                            <a href="#profile" data-toggle="tab"
                                class="nav-item nav-link has-icon nav-link-faded active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user mr-2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>Profile Information
                            </a>
                            <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-settings mr-2">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>Account Settings
                            </a>
                            <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shield mr-2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>Security
                            </a>
                            <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-bell mr-2">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>Notification
                            </a>
                            <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card mr-2">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>Billing
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header border-bottom mb-3 d-flex d-md-none">
                        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                            <li class="nav-item">
                                <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-shield">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content">
                        <div class="tab-pane active" id="profile">
                            <h6>YOUR PROFILE INFORMATION</h6>
                            <hr>
                            <form action="{{ route('saveChange',auth()->user()->id) }}" method="post">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="/images/profile_picture/{{ auth()->user()->profile_picture_path }}"
                                            alt="{{ auth()->user()->name }}" class="rounded-circle profile"
                                            width="150" height="150" style="object-fit: cover">
                                        <div class="mt-3">
                                            <h4>{{ auth()->user()->name }}</h4>
                                            <p class="text-secondary mb-1">{{ auth()->user()->title }}</p>
                                            <p class="text-muted font-size-sm">{{ auth()->user()->address }}
                                            </p>
                                            <button class="btn btn-primary">Follow</button>
                                            <button class="btn btn-outline-primary">Message</button>
                                        </div>
                                    </div>
                                    {{-- User Information --}}
                                    <div class="card-body">
                                        <div class="col-sm-3">
                                            <h6 class="mb-2"><i class="fa-solid fa-user"></i> Full
                                                Name</h6>
                                        </div>
                                        <input type="text" class="form-control mb-3" name="name"
                                            value="{{ auth()->user()->name }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-2"><i class="fa-solid fa-envelope"></i>
                                                Email</h6>
                                        </div>
                                        <input type="text" class="form-control mb-3" name="email"
                                            value="{{ auth()->user()->email }}">
                                        <div class="col-sm-3">
                                            <h6 class="mb-2"><i class="fa-solid fa-phone"></i> Phone
                                            </h6>
                                        </div>
                                        <input type="text" class="form-control mb-3" name="phone"
                                            value="{{ auth()->user()->phone }}">

                                        <div class="col-sm-3">
                                            <h6 class="mb-2"><i class="fa-solid fa-map-location-dot"></i>
                                                Address</h6>
                                        </div>
                                        <input type="text" class="form-control mb-3" name="address"
                                            value="{{ auth()->user()->address }}">
                                        <div class="col-sm-2">
                                            <h6 class="mb-2"><i class="fa-solid fa-briefcase"></i>
                                                Title</h6>
                                        </div>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ auth()->user()->title }}">

                                    </div>
                                    <div class="row">
                                    </div>
                                </div>
                                <h6>YOUR SOCIAL MEDIA</h6>
                                <hr class="my-4">
                                <ul class="list-group list-group-flush">
                                    @foreach ($social as $item)
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe me-2 icon-inline">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                                    <path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                    </path>
                                                </svg>Your website link : </h6><br><br>
                                            <input type="text" name="website_link" id="website_link"
                                                class="form-control" placeholder="Link Website"
                                                value="{{ $item->website_link }}">
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-github me-2 icon-inline">
                                                    <path
                                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                    </path>
                                                </svg>Your Github :</h6>
                                            <input type="text" name="github-link" id="github-link"
                                                class="form-control mb-2" placeholder="Link Profile"
                                                value="{{ $item->github_link }}">
                                            <input type="text" name="github-name" id="github-name"
                                                class="form-control" placeholder="Full Name"
                                                value="{{ $item->github }}">
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-twitter me-2 icon-inline text-info">
                                                    <path
                                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                    </path>
                                                </svg>Twitter</h6>
                                            <input type="text" name="twitter-link" id="twitter-link"
                                                class="form-control mb-2" placeholder="Link Profile"
                                                value="{{ $item->twitter_link }}">
                                            <input type="text" name="twitter-name" id="twitter-name"
                                                class="form-control" placeholder="Full Name"
                                                value="{{ $item->twitter }}">
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-instagram me-2 icon-inline text-danger">
                                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
                                                    </rect>
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
                                                    </path>
                                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                </svg>Instagram</h6>
                                            <input type="text" name="instagram-link" id="instagram-link"
                                                class="form-control mb-2" placeholder="Profile link"
                                                value="{{ $item->instagram_link }}">
                                            <input type="text" name="instagram-name" id="instagram-name"
                                                class="form-control" placeholder="Full Name"
                                                value="{{ $item->instagram }}">
                                        </li>
                                        {{-- <input type="hidden" name="user-id" value="{{ auth()->user()->id }}"> --}}
                                        @if ($item->user_id == auth()->user()->id)
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-facebook me-2 icon-inline text-primary">
                                                        <path
                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                        </path>
                                                    </svg>Facebook</h6>
                                                <input type="text" name="facebook-link" id="facebook-link"
                                                    class="form-control mb-2" placeholder="Profile Link"
                                                    value="{{ $item->facebook_link }}">
                                                <input type="text" name="facebook-name" id="facebook-name"
                                                    class="form-control" placeholder="Full Name"
                                                    value="{{ $item->facebook }}">
                                            </li>
                                        @endif
                                    @endforeach
                                    {{-- <a class="center" onclick="addFacebook()"><i class="fa-solid fa-angles-down" id="icon"></i></a> --}}
                                </ul>
                                <div class="col-sm-9 text-secondary">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="account">
                            <h6>ACCOUNT SETTINGS</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username"
                                        aria-describedby="usernameHelp" placeholder="Enter your username"
                                        value="kennethvaldez">
                                    <small id="usernameHelp" class="form-text text-muted">After changing your username,
                                        your old username becomes available for anyone else to claim.</small>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="d-block text-danger">Delete Account</label>
                                    <p class="text-muted font-size-sm">Once you delete your account, there is no going
                                        back. Please be certain.</p>
                                </div>
                                <button class="btn btn-danger" type="button">Delete Account</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="security">
                            <h6>SECURITY SETTINGS</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label class="d-block">Change Password</label>
                                    <input type="text" class="form-control" placeholder="Enter your old password">
                                    <input type="text" class="form-control mt-1" placeholder="New password">
                                    <input type="text" class="form-control mt-1" placeholder="Confirm new password">
                                </div>
                            </form>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label class="d-block">Two Factor Authentication</label>
                                    <button class="btn btn-info" type="button">Enable two-factor
                                        authentication</button>
                                    <p class="small text-muted mt-2">Two-factor authentication adds an additional layer
                                        of security to your account by requiring more than just a password to log in.
                                    </p>
                                </div>
                            </form>
                            <hr>
                            <form>
                                <div class="form-group mb-0">
                                    <label class="d-block">Sessions</label>
                                    <p class="font-size-sm text-secondary">This is a list of devices that have logged
                                        into your account. Revoke any sessions that you do not recognize.</p>
                                    <ul class="list-group list-group-sm">
                                        <li class="list-group-item has-icon">
                                            <div>
                                                <h6 class="mb-0">San Francisco City 190.24.335.55</h6>
                                                <small class="text-muted">Your current session seen in United
                                                    States</small>
                                            </div>
                                            <button class="btn btn-light btn-sm ml-auto" type="button">More
                                                info</button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="notification">
                            <h6>NOTIFICATION SETTINGS</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label class="d-block mb-0">Security Alerts</label>
                                    <div class="small text-muted mb-3">Receive security alert notifications via email
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1"
                                            checked="">
                                        <label class="custom-control-label" for="customCheck1">Email each time a
                                            vulnerability is found</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2"
                                            checked="">
                                        <label class="custom-control-label" for="customCheck2">Email a digest summary
                                            of
                                            vulnerability</label>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="d-block">SMS Notifications</label>
                                    <ul class="list-group list-group-sm">
                                        <li class="list-group-item has-icon">
                                            Comments
                                            <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1"
                                                    checked="">
                                                <label class="custom-control-label" for="customSwitch1"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item has-icon">
                                            Updates From People
                                            <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item has-icon">
                                            Reminders
                                            <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch3"
                                                    checked="">
                                                <label class="custom-control-label" for="customSwitch3"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item has-icon">
                                            Events
                                            <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch4"
                                                    checked="">
                                                <label class="custom-control-label" for="customSwitch4"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item has-icon">
                                            Pages You Follow
                                            <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                <label class="custom-control-label" for="customSwitch5"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="billing">
                            <h6>BILLING SETTINGS</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label class="d-block mb-0">Payment Method</label>
                                    <div class="small text-muted mb-3">You have not added a payment method</div>
                                    <button class="btn btn-info" type="button">Add Payment Method</button>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="d-block">Payment History</label>
                                    <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">You
                                        have not made any payment.</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style type="text/css">
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .nav-link {
            color: #4a5568;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }

    </style>

    <script type="text/javascript">

    </script>
</body>

</html>
