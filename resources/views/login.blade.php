@extends('layout/login_layout')

@section('title')
    Login
@endsection

@section('containt')
<div class="card mb-3">

    <div class="card-body">

        <div class="pb-2">
            <h5 class="card-title text-center pb-2 fs-4">Login</h5>
            <p class="text-center small">Enter your username & password to login</p>
        </div>

        <form class="row g-3 needs-validation" method="POST" action="#">
            @csrf
            <div class="col-12">
                <label for="yourUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <input type="text" name="username" class="form-control"
                        id="yourUsername" required>
                    <div class="invalid-feedback">Please enter your username.</div>
                </div>
            </div>

            <div class="col-12">
                <label for="yourPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control"
                    id="yourPassword" required>
                <div class="invalid-feedback">Please enter your password!</div>
            </div>

            {{-- <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember"
                        value="true" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
            </div> --}}
            <div class="col-12">
                {{-- <button class="btn btn-primary w-100" type="submit">Login</button> --}}
                <a href="{{ route('dashboard') }}" class="btn btn-primary w-100" >Login</a>
            </div>
        </form>

    </div>
</div>
@endsection