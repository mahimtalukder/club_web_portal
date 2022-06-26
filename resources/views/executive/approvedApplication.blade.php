<?php $executive = session()->get('executive')?>
@extends('layouts.executiveLayout')
@section('title', 'Dashboard')
@section('picture', $executive['images'])
@section('name', $executive['name'])
@section('phone', $executive['phone'])


@section('content')
    <div class="row inbox-wrapper">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @include(('inc.applicationSideNav'))
                        <div class="col-lg-9">
                            <div class="p-3 border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-end mb-2 mb-md-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox text-muted me-2"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg>
                                            <h4 class="me-1">Applications</h4>
                                            <span class="text-muted">(2 new application)</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Search application...">
                                            <button class="btn btn-light btn-icon" type="button" id="button-search-addon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-bottom d-flex align-items-center justify-content-between flex-wrap">
                                <div class="d-none d-md-flex align-items-center flex-wrap">
                                    <span class="me-2">Showing 1-10 of 253</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-end flex-grow-1">

                                    <div class="btn-group">
                                        <button class="btn btn-outline-secondary btn-icon" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
                                        <button class="btn btn-outline-secondary btn-icon" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
                                    </div>
                                </div>
                            </div>
                            <div class="email-list">

                                <!-- email list item -->
                                <div class="email-list-item email-list-item--unread">
                                    <div class="email-list-actions">
                                        <i data-feather="check" class="icon-lg me-2"></i>
                                    </div>
                                    <a href="{{route('executiveApplicationRead')}}" class="email-list-detail">
                                        <div class="content">
                                            <span class="from">Cedric Kelly</span>
                                            <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly! Urgent - You forgot your keys in the class room, please come imediatly! Urgent - You forgot your keys in the class room, please come imediatly! Urgent - You forgot your keys in the class room, please come imediatly! Urgent - You forgot your keys in the class room, please come imediatly!</p>
                                        </div>
                                        <span class="date">08 Jan</span>
                                    </a>
                                </div>


                                <!-- email list item -->
                                <div class="email-list-item">
                                    <div class="email-list-actions">
                                        <i data-feather="check" class="icon-lg me-2"></i>
                                    </div>
                                    <a href="{{route('executiveApplicationRead')}}" class="email-list-detail">
                                        <div class="content">
                                            <span class="from">Bradley Greer</span>
                                            <p class="msg">The world looks mighty good to me, cause Tootsie Rolls are all I see. Whatever it is I think I see, becomes a Tootsie Roll to me! Tootsie Roll how I love your chocolatey chew, Tootsie Roll I think I'm in love with you. Whatever it is I think I see, becomes a Tootsie Roll to me!</p>
                                        </div>
                                        <span class="date">
                                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg> </span>
                                            14 Jan
                                        </span>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
