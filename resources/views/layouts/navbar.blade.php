<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/user') }}">Praktikum Web Lanjut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/user') }}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/kelas') }}">Kelas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>