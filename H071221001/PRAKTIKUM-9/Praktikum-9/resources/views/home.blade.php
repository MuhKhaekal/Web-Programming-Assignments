@extends('layouts.main')
<style>
    .hero__heading {
        text-align: center;
        animation: blink 1s infinite;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }

</style>
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <center>
                <h1 class="hero__heading fw-bold" style="font-size: 100px; color: #000000;">Chandrika Store</h1>
                <a href="/product" class="mt-2 btn btn-dark" role="button"><span></span>Go To Product</a>
            </center>
            </div>
            <div class="col-md-6">
                <div id="bag" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/top3.JPeG" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/bot1.JPeG" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/top2.JPeG" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/bot2.JPeG" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#bag" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#bag" data-bs-slide="next">
                        <span class="carousel-control-next-icon" ariahidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
