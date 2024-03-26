@extends('layout.dashboard-admin')
@section('content')
<div class="card" style="max-width: 100%;">
  <div class="card-body shadow-sm">
      <h2><b>E-KASIR, Warung pa jaya</b></h2>
  </div>
</div>
<h3 class="mt-3" style="color: #CCD3CA;">Pendataan Barang</h3>
<button type="button" class="btn btn-warning mt-4 shadow-lg" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-cloud-plus"> <b>REFRESH DATA </b></i></button>  
<div class="card mt-5">
  <div class="card-body p-5 bg-white rounded">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h5 class="card-title mb-0">Daftar Produk</h5>
      <button type="button" class="btn btn-primary shadow-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-cloud-plus"></i> <b>TAMBAH ITEM</b>
      </button>
    </div>
    <div class="table-responsive">
      <table id="example" style="width:100%" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col" style="background-color: #8DDFCB;">No</th>
            <th scope="col" style="background-color: #8DDFCB;">Gambar Produk</th>
            <th scope="col" style="background-color: #8DDFCB;">Nama Produk</th>
            <th scope="col" style="background-color: #8DDFCB;">Harga</th>
            <th scope="col" style="background-color: #8DDFCB;">Stok</th>
            <th scope="col" style="background-color: #8DDFCB;">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($produks as $produk)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $produk->image}}</td>
            <td>{{ $produk->NamaProduk }}</td>
            <td>{{ $produk->Harga }}</td>
            <td>{{ $produk->Stok }}</td>
            <td>
              <form action="{{ route('adminproduk.destroy', $produk->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> DELETE</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>





  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('adminstoreProduk') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="namaProduk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="namaProduk" name="NamaProduk">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="Harga">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok" name="Stok">
            </div>
            <div class="mb-3">
              <label for="stok" class="form-label">Gambar</label>
              <input type="file" class="form-control" id="stok" name="image">
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>        
        </div>
      </div>
    </div>
  </div>
@endsection