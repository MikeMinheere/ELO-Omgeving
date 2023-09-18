@extends('layouts.app')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Welcome to the Online Learning Platform</h1>
                    <p>Empower your learning experience with interactive assignments and language modules.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Get Started Today</h2>
                    <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </section>
@endsection
