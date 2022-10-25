@extends('site.app')
@section('title', 'Register')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<style>
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-google-login {
    background-color: #fefefe;
    color: #777777;
    border: 2px solid #ccc !important;
}
.btn-google-signup {
    background-color: #d44f3d;
    color: #fff;
    border-bottom: 1px solid #ccc;
}
</style>
@section('content')
<section class="container">
    <div class="row align-items-center">
        <div class="col-md-12 card bg-light m-4">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Sign in</h4>
                <p class="text-center">Get started Now!</p>
                <p>
                    <a href="{{ url('/auth/google') }}" class="btn btn-block btn-google-login"> <i class="fab fa-google"></i>   Sign in with Google</a>
                    <p class="divider-text">
                        <span class="bg-light">OR</span>
                    </p>
                    <a href="{{ url('/auth/google') }}" class="btn btn-block btn-google-signup"> <i class="fab fa-google"></i>   Signup via Google</a>
                </p>
            </article>
        </div>
    </div>
</section>
@stop