@extends('layouts.main')
<style>
    label {
        color: #000000;
        word-wrap: break-word;
        width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    img {
        justify-content: center;
        align-content: center;
        align-items: center;
        display: flex;
        margin-left: auto;
        margin-right: auto;
    }
</style>
@section('container')
    <div class="container">
        <center>
            <div class="row justify-content-center">
                <div class="col-sm-8 mt-4">
                    <div class="card p-4">
                        <img src="/img/{{ $product->image }}" width="250px" height="50%">
                        <table>
                            <form>
                                <tr>
                                    <h3><label></label></h3>
                                    <h3><span>{{ $product->nama }}</span></h3>
                                </tr>
                                <tr>
                                    <td><label><b>Harga Barang</b></label></td>
                                    <td><span>: Rp {{ number_format($product->harga, 0, ',', '.') }}</span></td>
                                </tr>
                                <tr>
                                    <td><label><b>Jenis Barang</b></label></td>
                                    <td><span>: {{ $product->jenis }}</span></td>
                                </tr>
                                <tr>
                                    <td><label><b>Deskripsi Barang</b></label></td>
                                    <td><span>: {{ $product->deskripsi }}</span></td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </center>
    </div>
@endsection
