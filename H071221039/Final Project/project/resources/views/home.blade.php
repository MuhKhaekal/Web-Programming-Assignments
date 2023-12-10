@extends('layouts.app')

@section('content')
    {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div> --}}
    <style>
        
    </style>

    <section class="home-section section-hero overlay bg-image inner-page img-fluid" style="background-image: url('{{ asset('assets/images/bg.jpg') }}'); margin-top:-24px">
        <div class="container">
            <div class="row align-items-center justify-content-center" >
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                        <h1 class="text-white font-weight-bold mt-5">Tempat kamu dimana cocok untuk menemukan pekerjaan</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta numquam illum ex blanditiis placeat sed facere nam perferendis minima maxime?</p>
                    </div>
                    <form action="{{ route('search.job') }}" method="post" class="search-jobs-form">
                        @csrf
                        <div class="row mb-5 text-center">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <input name="job_title" type="text" required class="form-control form-control-lg" placeholder="Job title, Company...">
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select name="job_region" class="form-control form-control-lg" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Region" >
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Makassar">Makassar</option>
                                    <option value="Papua">Papua</option>
                                    <option value="Samarinda">Samarinda</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Medan">Medan</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select name="job_type" class="form-control form-control-lg" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                                    <option value="">Part Time</option>
                                    <option value="">Full Time</option>
                                </select>
                            </div>                            
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <button name="submit" type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2">Search Job</span></button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>Ada {{ $totaljobs }} pekerjaan yang sedang menunggu kamu!</h1>
        </div>
        @foreach ($jobs as $job)
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center mb-5">
                <div class="job-listing-logo">
                    <img src="{{ asset('assets/images/' . $job->image) }}" alt="" class="img-fluid" >

                </div>

                <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4 p-5" >
                    <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                        <h2><a href="{{ route('single.job', $job->id) }}" class="text-decoration-none">{{ $job->job_title}}</a></h2>
                        <strong>{{ $job->company }}</strong>
                    </div>
                </div>

                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                    <span class="icon-room"></span> {{ $job->job_region }}
                </div>

                <div class="job-listing-meta bg-danger">
                    <span class="badge">{{ $job->job_type }}</span>
                </div>
            </li>
        @endforeach

    </div>
@endsection