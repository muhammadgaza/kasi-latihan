<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3" style="margin-top: 40%">
              <div class="card-body p-4 p-sm-5">
                @if(session('error'))
                  <script>
                      swal("Error!", "{{ session('error') }}", "error");
                  </script>
                @endif
                <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                <form action="{{ route('login') }}" method="POST">
                  @csrf
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        @if ($message = Session::get('success'))
        <script>
          Swal.fire('{{ $message  }}')
        </script>
        @endif
        @if ($message = Session::get('error'))
            <script>
              Swal.fire('{{ $message  }}')
            </script>
        @endif
  </body>
</html>