@extends('layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/004/141/669/small/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg" alt="Product Image"
                    class="img-fluid">
            </div>
            <div class="col-md-8 text-white">
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
