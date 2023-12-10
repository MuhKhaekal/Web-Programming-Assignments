@extends('layouts.app')

@section('content')
    <section class="section-hero overlay inner-page p-3" style="background-image: url('{{ asset('assets/images/bg.jpg') }}'); margin-top:-24px"">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Profile</h1>
                    <div class="custom-breadcrumbs">
                        <a href="{{ route('home') }}">Home</a> <span class="mx-2 slash"></span>
                        <a href="">Job</a> <span class="mx-2 slash"></span>
                        <span class="text-white"> <strong>Profile</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-hero overlay inner-page bg-image mt-5" id="home-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7">
                    <div class="card p-3 py-4">
                        <div class="container">
                            @if (\Session::has('update'))
                                <div class="alert alert-success">
                                    <p>{{ \Session::get('update') }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="text-center">
                            <img src="{{ asset('assets/images/profile.png') }}" alt="" width="100" class="rounded-circle">
                        </div>

                        <div class="text-center mt-3">
                            <h5>{{ $profile -> name }}</h5>
                            <span>{{ $profile -> job_title }}</span><br>
                            <a href="{{ asset('assets/cvs/'.$profile->cv.'') }}" class="btn btn-danger btn-block text-white w-100">Download CV</a>
                            <div class="px-4 mt-1">
                                <p class="fonts">{{ $profile -> bio }}</p>
                            </div>

                            <div class="px-3">
                                <a href="{{ $profile -> facebook }}" class="pt-3 pb-3 pr-3 pl-0 underline-none"><span class="icon-facebook"></span></a>
                                <a href="{{ $profile -> instagram }}" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-instagram"></span></a>
                                <a href="{{ $profile -> linkedin }}" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
