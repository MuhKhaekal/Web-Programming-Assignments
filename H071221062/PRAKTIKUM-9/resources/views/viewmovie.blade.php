@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title')
        Movie Details
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
            <h1 class="title mt-3 text-center">Movies Detail</h1>
            <a href="/" class="btn btn-success">Kembali</a>
            <table class="table table-bordered mt-4 text-center" style="margin-bottom: 75px ">
                <thead>
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Sutradara</th>
                        <th scope="col">Durasi</th>
                        <th scope="col">Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $row)
                        <tr>
                            <td>{{$row->Judul}}</td>
                            <td>{{$row->Genre}}</td>
                            <td>{{$row->Negara}}</td>
                            <td>{{$row->Sutradara}}</td>
                            <td>{{$row->Durasi}}</td>
                            <td>{{$row->Rating}}/10</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>

</html>

