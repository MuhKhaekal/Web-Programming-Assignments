@extends('layout.template')

@section('content')
    <style>
        .card {
            height: 100%;
        }

        .card-title {
            letter-spacing: 0.5px;
            line-height: 1.5;
        }

        .card-body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-text {
            flex-grow: 1;
            overflow: hidden;
        }
    </style>

    <div class="row mt-3">
        @foreach ($products as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                @if ($item->productLine === 'Classic Cars')
                    <img src="https://www.copart.co.uk/content/1970%20ford%20mustang%202.jpg" class="card-img-top" alt="Car Image">
                @elseif ($item->productLine === 'Planes')
                    <img src="https://images.pexels.com/photos/46148/aircraft-jet-landing-cloud-46148.jpeg?cs=srgb&dl=pexels-pixabay-46148.jpg&fm=jpg" class="card-img-top" alt="Plane Image">
                @elseif ($item->productLine === 'Vintage Cars')
                    <img src="https://thepatriot.in/wp-content/uploads/2023/02/rolls-royce.jpg" class="card-img-top" alt="Vintage Image">
                @elseif ($item->productLine === 'Motorcycles')
                    <img src="https://cdn.britannica.com/16/126516-050-2D2DB8AC/Triumph-Rocket-III-motorcycle-2005.jpg" class="card-img-top" alt="Motorcycles Image">
                @elseif ($item->productLine === 'Ships')
                    <img src="https://www.marineinsight.com/wp-content/uploads/2019/08/Cruise-ships-1.png" class="card-img-top" alt="Ships Image">
                @elseif ($item->productLine === 'Trains')
                    <img src="https://img2.beritasatu.com/cache/jakartaglobe/480x310-3/2022/10/1667049648.jpeg" class="card-img-top" alt="Train Image">
                @elseif ($item->productLine === 'Trucks and Buses')
                    <img src="https://images.bisnis.com/posts/2018/09/26/842274/man-truck.jpg" class="card-img-top" alt="Truck Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->productName }}
                            <span class="badge text-bg-primary">{{ $item->productLine }}</span>
                        </h5>
                        <p class="card-text">{{ substr($item->productDescription, 0, 100) }}...</p>
                        <h6 class="text-end mb-3">Stock: {{ $item->quantityInStock }}</h6>
                        <a href="/products/{{ $item->productCode }}" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- <div class="row align-items-center">
    <label class="col-md-3 text-end">Stock:</label>
    <div class="col-md-4">
    <input type="number" class="form-control" value="{{ $item->quantityInStock }}" disabled>
    </div>
    </div> --}}
