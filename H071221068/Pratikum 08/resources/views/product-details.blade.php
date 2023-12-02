@extends('layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="https://cdn.pnghd.pics/data/405/gambar-kendaraan-mobil-46.jpg" alt="Product Image"
                    class="img-fluid">
            </div>
            <div class="col-md-8">
                @foreach ($productdetails as $item)
                    <h2>{{ $item->productName }}</h2>
                    <p>{{ $item->productDescription }}</p>
                    <p>Stock: {{ $item->quantityInStock }}</p>
                    {{-- <p>Price: ${{ $item->price }}</p>
                    <p>Stock: {{ $item->stock }}</p> --}}
                    <a href="#" class="btn btn-primary">Buy Now</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
