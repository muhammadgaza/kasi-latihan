@extends('layout.dashboard-admin')

@section('content')

<div class="card" style="max-width: 100%;">
  <div class="card-body shadow-sm">
      <h2><b>E-KASIR, Warung pa jaya</b></h2>
  </div>
</div>
<h3 class="mt-3" style="color: #CCD3CA;">User Registrasi</h3>
<button type="button" class="btn btn-primary mt-2 shadow-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-cloud-plus"> TAMBAH USER</i></button>
<div class="card rounded shadow-lg border-0 mt-2">
    <div class="card-body p-5 bg-white rounded">
      <nav class="navbar ">
        <div class="container-fluid">
          <a class="navbar-brand"></a>
          <form class="d-flex" role="search"> 
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="display: block; border: 1px solid #ced4da;">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
        <div class="table-responsive mt-2">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="background-color: #8DDFCB;">No</th>
                    <th style="background-color: #8DDFCB;">Name</th>
                    <th style="background-color: #8DDFCB;">Email</th>
                    <th style="background-color: #8DDFCB;">Password</th>
                    <th style="background-color: #8DDFCB;">Actiom</th>
                  </tr>
                </thead>
                  <tbody>
                    @foreach($data as $user)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->password }}</td>
                      <td>
                        <!-- Edit User -->
                        <a href="{{ route('adminusers.update', $user->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> EDIT</a>
                    
                        <!-- Delete User -->
                        <form action="{{ route('adminusers.destroy', $user->id) }}" method="POST" style="display: inline;">
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


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('adminregistrasi') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="eamil" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" style="display: block; border: 1px solid #ced4da;">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Username</label>
                <input type="text" class="form-control" id="name" name="name" style="display: block; border: 1px solid #ced4da;">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Passwor</label>
                <input type="password" class="form-control" id="password" name="password" style="display: block; border: 1px solid #ced4da;">
            </div>
            <button type="submit" class="btn btn-primary">Understood</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  @include('sweetalert::alert')


@endsection



