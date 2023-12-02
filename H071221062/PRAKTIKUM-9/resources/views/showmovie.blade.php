@extends('layouts.main')

@section('content')
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title')
        Tambah Movie
    @endsection
    <style>
        .registration-box {
            width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid;
            border-radius: 10px;
            padding: 20px 80px 30px;
            margin: 40px auto;
        }

        .registration-head h3 {
            margin: 0;
            padding-bottom: 20px;
        }

        .registration-body {
            display: flex;
            flex-direction: column;
        }

        .registration-body input {
            margin-bottom: 20px;
            height: 40px;
            width: 250px;
        }

        .registration-body button {
            background-color: rgb(29, 174, 255);
            color: black;
            border-radius: 5px;
            position: relative;
            right: 100;
            width: 100px;
            height: 35px;
        }

        .menubtn {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .menubtn a {
            display: flex;
            align-items: center;
            width: 100px;
            height: 40px;
        }

        .menubtn input {
            background-color: rgb(29, 174, 255);
            border-radius: 5px;
            width: 100px;
            height: 40px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="registration-box">
        <div class="registration-head">
            <h3>Tambah Movie</h3>
        </div>
        <div>
            <form action="/updatemovie/{{$data->id}}" method="post">
                @csrf
                <div class="registration-body">
                    <input type="text" name="judul" placeholder="Judul" value="{{$data->id}}" required>
                    <input type="text" name="genre" placeholder="Genre" value="{{$data->Genre}}" required>
                    <input type="text" name="negara" placeholder="Negara" value="{{$data->Negara}}" required>
                    <input type="text" name="sutradara" value="{{$data->Sutradara}}" placeholder="Sutradara">
                    <input type="text" name="durasi" value="{{$data->Durasi}}" placeholder="Durasi">
                    <input type="number" name="rating" value="{{$data->Rating}}" placeholder="Rating">
                </div>
                <div class="menubtn">
                    <a href="/">Kembali</a>
                    <input id="submit" type="submit" value="Update"></input>
                </div>
        </div>
        </form>
    </div>
    @endsection
    </div>