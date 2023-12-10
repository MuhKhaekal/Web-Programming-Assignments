@extends('layouts.admin')

@section('content')

<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                @if (\Session::has('delete'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('delete') }}</p>
                    </div>
                @endif
                <h5 class="card-title mb-4 d-inline">Job Application</h5>
                {{-- <a href="{{ route('create.admins') }}" class="btn btn-primary mb-4 text-center float-right">Create Admins</a> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">CV</th>
                            <th scope="col">Email</th>
                            <th scope="col">View Job</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Company</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $apps as $app )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a href="{{ asset('assets/cvs/'. $app->cv.'') }}" class="btn btn-success">CV</a></td>
                                <td>{{ $app->email }}</td>
                                <td><a href="{{ route('single.job', $app->id) }}" class="btn btn-success">Go to Job</a></td>
                                <td>{{ $app->job_title }}</td>
                                <td>{{ $app->company }}</td>
                                <td><a href="{{ route('delete.apps', $app->id) }}" class="btn btn-danger text-center">delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection