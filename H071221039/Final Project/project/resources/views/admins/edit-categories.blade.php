@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Update Categories</h5>
                    <form action={{ route('update.categories', $category->id) }} method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-outline mb-4 mt-5">
                            <input type="text" value="{{ $category->name }}" name="name" id="" class="form-control" placeholder="Name Categories">
                        </div>
                        @if($errors->has('name'))
                        <p class="alert alert-danger">{{ $errors->first('name')  }}</p>
                        @endif

                        <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  

@endsection