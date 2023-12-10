@extends('layouts.company')

@section('content')

    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jobs</h5>
                    <p class="card-text">number of jobs : {{  $jobs }}</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">number of categories : {{ $categories }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Admins</h5>
                    <p class="card-text">number of admins : {{ $admins }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Applications</h5>
                    <p class="card-text">number of applications : {{ $applications }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection