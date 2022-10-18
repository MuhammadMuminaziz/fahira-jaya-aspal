<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/logo.jpg" alt="" width="30" height="30" class="d-inline-block align-text-top me-2">
            Fahira Jaya Aspal
          </a>
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#comment">Comment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-sm btn-primary py-0 my-2" style="height: 25px;" data-bs-toggle="modal" data-bs-target="#loginModel">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="loginModel" tabindex="-1" aria-labelledby="loginModelLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModelLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/login" method="post">
            @csrf
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" autofocus required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm">Login now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- End Comment --}}

  {{-- <section style="margin-top: -50px;">
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="col-lg-3 mb-2">
                <a href="/aspal" class="text-dark text-decoration-none">
                    <div class="card bg-white" style="height: 100px;">
                        <div class="card-body d-flex align-items-center justify-content-center">
                          <h5>
                            Aspal Hotmix
                          </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mb-2">
                <a href="/paving" class="text-dark text-decoration-none">
                    <div class="card bg-white" style="height: 100px;">
                        <div class="card-body d-flex align-items-center justify-content-center">
                          <h5>
                            Paving Block
                          </h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> --}}