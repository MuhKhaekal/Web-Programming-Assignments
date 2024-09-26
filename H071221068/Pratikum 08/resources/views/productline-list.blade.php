@extends('/layout/template')

@section('content')
    <div class="row mt-3">
        @foreach ($products as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://cdn.pnghd.pics/data/405/gambar-kendaraan-mobil-46.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->productName }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
