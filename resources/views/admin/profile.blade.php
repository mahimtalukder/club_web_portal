<?php $admin = session()->get('admin')?>
@extends('layouts.adminLayout')
@section('title', $admin['name'])
@section('picture', $admin['images'])
@section('name', $admin['name'])
@section('phone', $admin['phone'])
@section('content')
    <div class="page-content mx-0 px-0 my-0 py-0">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    @include('inc.profileHeader')
                    <div class="d-flex justify-content-center p-3 rounded-bottom">
                        <div class="d-flex align-items-center m-0 p-0">

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('adminEditProfile')}}">Edit Profile</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
            <div class="card rounded">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="card-title mb-0">About</h6>
                    </div>
                    <p>{{$admin->bio}}</p>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Designation:</label>
                        <p class="text-muted">{{$admin->designation}}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Organisation:</label>
                        <p class="text-muted">{{$admin->organisation}}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                        <p class="text-muted">November 15, 2015</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
                        <p class="text-muted">{{$admin->address}}</p>
                    </div>

                    <div class="mt-3 d-flex social-links">
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-9 middle-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="card-title mb-0">Personal Information's</h6>
                            </div>
                            <ul class="list-group list-group-flush pt-3">
                                <li class="list-group-item mx-0 px-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="tx-12 fw-bolder mb-0 text-uppercase">Full Name:</label>
                                        </div>
                                        <div class="col-10">
                                            <p>{{$admin->name}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item mx-0 px-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="tx-12 fw-bolder mb-0 text-uppercase">ID:</label>
                                        </div>
                                        <div class="col-10">
                                            <p>{{$admin->user_id}}</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item mx-0 px-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="tx-12 fw-bolder mb-0 text-uppercase">Email:</label>
                                        </div>
                                        <div class="col-10">
                                            <p>me@nobleui.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item mx-0 px-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="tx-12 fw-bolder mb-0 text-uppercase">Phone:</label>
                                        </div>
                                        <div class="col-10">
                                            <p>{{$admin->phone}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item mx-0 px-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="tx-12 fw-bolder mb-0 text-uppercase">Date of Birth:</label>
                                        </div>
                                        <div class="col-10">
                                            <p>{{$admin->dob}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item mx-0 px-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="tx-12 fw-bolder mb-0 text-uppercase">Blood Group:</label>
                                        </div>
                                        <div class="col-10">
                                            <p>{{$admin->blood_group}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item mx-0 px-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="tx-12 fw-bolder mb-0 text-uppercase">Address:</label>
                                        </div>
                                        <div class="col-10">
                                            <p>{{$admin->address}}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- middle wrapper end -->
    </div>


    </div>
@endsection
