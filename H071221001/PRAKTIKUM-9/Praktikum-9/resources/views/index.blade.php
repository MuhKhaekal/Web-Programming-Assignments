@extends('layouts.main')
<style>
    table {
        justify-content: center;
        align-items: center;
        text-align: center;
    }
</style>
@section('container')
    <div class="d-flex flex-row-reverse mt-4">
        <a href="/product/create" class="btn btn-dark mt-3">New Product</a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block mt-3">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <table class="table table-bordered border-primary mt-5">
        <thead class="table-light align-middle">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jenis</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @if ($products->count() > 0)
                @foreach ($products as $product)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle"><a href="product/{{ $product->id }}/show" class="text-dark"
                                style="text-decoration: none;">{{ $product->nama }}</a></td>
                        <td class="align-middle">Rp {{ number_format($product->harga, 0, ',', '.') }}
                        </td>
                        <td class="align-middle">{{ $product->jenis }}</td>
                        <td class="align-middle">
                            <img src="img/{{ $product->image }}" width="75" height="75" />
                        </td>
                        <td class="align-middle">
                            <a href="product/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>

                            <form class="d-inline" action="product/{{ $product->id }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Items Not Found</td>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $products->links() }}
@endsection
