@extends('layout.dashboard-admin')

@section('content')

<div class="card" style="max-width: 100%;">
    <div class="card-body shadow-lg">
        <h1>Halaman transaksi</h1>
    </div>
</div>

<div class="card mt-5" style="max-width: 100%">
    <div class="card-body shadow-lg">
        <div class="row">
            <div class="col-md-3">
                <label for="namaPembeli" class="form-label">Nama Pembeli</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control mb-3 placeholder-color" id="namaPembeli" placeholder="Nama pembeli" style="display: block; border: 1px solid #ced4da;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="alamatPembeli" class="form-label">Alamat Pembeli</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control mb-3 placeholder-color" id="alamatPembeli" placeholder="Alamat pembeli" style="display: block; border: 1px solid #ced4da;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="nomorHPPembeli" class="form-label">Nomor HP Pembeli</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control mb-3 placeholder-color" id="nomorHPPembeli" placeholder="Nomor HP pembeli" style="display: block; border: 1px solid #ced4da;">
            </div>
        </div>
    </div>
</div>



<div class="card mt-5" style="max-width: 50%">
    <div class="card-body shadow-lg">
        <label for="text" class="form-label">Produk</label>
        <select class="form-select mb-3" aria-label="Default select example" style="display: block;">
            <option value="">--{{ isset($p_detail) ? $p_detail->name : 'Nama Produk' }}--</option>
            @foreach ($produk as $item)
                <option value="{{ $item->id }}"> {{ $item->id . ' - ' . $item->NamaProduk }} </option>
            @endforeach
        </select>
        <label for="text" class="form-label">Harga Produk</label>
        <input type="number" class="form-control mb-3" id="exampleInputEmail1" style="display: block; border: 1px solid #ced4da;">
        <label for="text" class="form-label">Quantity</label>
        <input type="number" class="form-control mb-3" id="exampleInputEmail1" style="display: block; border: 1px solid #ced4da;">
    </div>
</div>


    

@endsection


