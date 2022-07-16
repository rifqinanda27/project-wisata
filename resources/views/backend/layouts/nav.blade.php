<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link text-dark fw-bold h5" href="{{ url('/admin/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-bold h5" href="{{ url('/admin/provinsi') }}">Provinsi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-bold h5" href="{{ url('/admin/kota/') }}">Kota</a>
        </li>
        <li>
          <a class="nav-link text-dark fw-bold h5" href="{{ url('/admin/wisata') }}">Wisata</a>
        </li>
        <li>
          <a class="nav-link text-dark fw-bold h5" href="{{ url('/admin/member') }}">Member</a>
        </li>
        <li>
          <a class="nav-link text-dark fw-bold h5" href="{{ url('/admin/user') }}">User</a>
        </li>
      </ul>
    </div>
  </div>
</nav>