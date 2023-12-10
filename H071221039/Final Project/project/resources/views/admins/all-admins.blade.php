@extends('layouts.admin')

@section('content')

<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                @if (\Session::has('create'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('create') }}</p>
                    </div>
                @endif
                <h5 class="card-title mb-4 d-inline">Admins</h5><hr>
                <a href="{{ route('create.admins') }}" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $admins as $admin )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection