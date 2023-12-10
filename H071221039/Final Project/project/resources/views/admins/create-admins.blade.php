@extends('layouts.admin')

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Create Admin</h5>
                    <form action="{{ route('store.admins') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-outline  mb-4 mt-4">
                            <input type="email" name="email" id="form1Example" class="form-control" placeholder="Email">
                        </div>
                        @if($errors->has('email'))
                            <p class="alert alert-danger">{{ $errors->first('email')  }}</p>
                        @endif

                        <div class="form-outline  mb-4">
                            <input type="text" name="name" id="form1Example" class="form-control" placeholder="Username">
                        </div>
                        @if($errors->has('name'))
                        <p class="alert alert-danger">{{ $errors->first('name')  }}</p>
                        @endif
                        
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form1Example" class="form-control" placeholder="Password">
                        </div>
                        @if($errors->has('password'))
                        <p class="alert alert-danger">{{ $errors->first('password')  }}</p>
                        @endif
                        
                        <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection