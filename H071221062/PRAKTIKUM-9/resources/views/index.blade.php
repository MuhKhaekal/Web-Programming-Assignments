@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title')
        Homepage
    @endsection
    <link rel="stylesheet" href="css/style.css">
    <style>
        th,td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="product" >
        <div class="container">
            <h1 class="title mt-3 text-center">Movie List</h1>
            <a href="/tambahmovie" class="btn btn-success">Tambah Movie</a>
            <table class="table table-bordered mt-4 text-center" style="margin-bottom: 75px ">
                <thead>
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Rating</th>
                        <th scope="col">CRUD BUTTON</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $row)
                        <tr>
                            <td>{{$row->Judul}}</td>
                            <td>{{$row->Genre}}</td>
                            <td>{{$row->Negara}}</td>
                            <td>{{$row->Rating}}/10</td>
                            <td>
                                <a href="/viewmovie/{{$row->id}}" class="btn btn-warning">View</a>
                                <a href="/showmovie/{{$row->id}}" class="btn btn-primary">Edit</a>
                                <a href="/delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>

</html>

