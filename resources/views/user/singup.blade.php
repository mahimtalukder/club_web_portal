@extends('layouts.auth')
@section('contant')
    <div class="row">
        <div class="col-md-4 pe-md-0">
        <div class="auth-side-wrapper">

        </div>
        </div>
        <div class="col-md-8 ps-md-0">
        <div class="auth-form-wrapper px-4 py-5">
            <a href="#" class="noble-ui-logo d-block mb-2">Noble<span>UI</span></a>
            <h5 class="text-muted fw-normal mb-4">Create a account.</h5>
            <form class="forms-sample">
            <div class="mb-3">
                <label for="exampleInputUsername1" class="form-label">Username</label>
                <input type="text" class="form-control"
                id="exampleInputUsername1" autocomplete="Username"
                placeholder="Username">
            </div>
            <div class="mb-3">
                <label for="userEmail" class="form-label">Email
                address</label>
                <input type="email" class="form-control"
                id="userEmail" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="userPassword" class="form-label">Password</label>
                <input type="password" class="form-control"
                id="userPassword" autocomplete="current-password"
                placeholder="Password">
            </div>
            <div>
                <button type="button" class="btn btn-primary text-white me-2 mb-2 mb-md-0">
                Sign up 
                </button>
            </div>
            <a href="{{route('signin')}}" class="d-block mt-3 text-muted">Already
                a user? Sign in</a>
            </form>
        </div>
        </div>
    </div>
@endsection