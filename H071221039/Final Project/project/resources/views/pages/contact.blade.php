@extends('layouts.app')

@section('content')
    <section class="section-hero overlay inner-page p-3" style="background-image: url('{{ asset('assets/images/bg.jpg') }}'); margin-top:-24px">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Hubungi Kami</h1>
                    <div class="custom-breadcrumbs">
                        <a href="">Home</a> <span class="mx-2 slash"></span>
                        <a href="">Job</a> <span class="mx-2 slash"></span>
                        <span class="text-dark"> <strong>Hubungi Kami</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section mt-5" id="next-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0">
                    <form action="" class="">
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group mt-4">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Subject</label>
                                <input type="subject" id="subject" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group mt-4">
                            <div class="col-md-12">
                                <label for="message" class="text-black">Message</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Tuliskan pesan disini ..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mt-4">
                                <input type="submit" value="Kirim Pesan" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold">Alamat</p>
                        <p class="mb-4">Jln. Perintis Kemerdekaan, Kota Makassar, Sulawesi Selatan, Indonesia</p>
                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="">+62 852 9012 1124</a></p>
                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="">muh.khaekal@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">Happy Candidates Says</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="block__87154 bg-white rounded">
                        <blockquote>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima labore ipsum, nihil error facere aliquam adipisci vero fuga esse quae.
                        </blockquote>
                        <div class="block_91147 d-flex align-items-center">
                            <figure class="mr-4"><img src="images/person_2.jpg" alt="image" class="img-fluid"></figure>
                            <div>
                                <h3>Muhammad Khaekal</h3>
                                <span class="position">Creative Director</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="block__87154 bg-white rounded">
                        <blockquote>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima labore ipsum, nihil error facere aliquam adipisci vero fuga esse quae.
                        </blockquote>
                        <div class="block_91147 d-flex align-items-center">
                            <figure class="mr-4"><img src="images/person_2.jpg" alt="image" class="img-fluid"></figure>
                            <div>
                                <h3>Muhammad Khaekal</h3>
                                <span class="position">Creative Director</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection