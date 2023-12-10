@extends('layouts.admin')

@section('content')
    
<div class="container">
    <div class="row mt-5">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mt-5">Login</h5>
                    <form action="{{ route('check.login') }}" class="p-auto" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="email" class="form-control" name="email" id="form2Example1" placeholder="Email">
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection