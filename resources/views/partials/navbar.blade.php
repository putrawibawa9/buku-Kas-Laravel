<div class="col-12">
    <nav class="navbar navbar-expand-lg bg-white">
<div class="container-fluid">
<a class="navbar-brand " href="../public/index.php">Buku Kas Putra Bali</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
    <a class="nav-link {{$title === "Dashboard" ? 'active' : ''}} menu-home" aria-current="page" href="dashboard">Dashboard</a>
    <a class="nav-link {{$title === "Recapitulation" ? 'active' : ''}} menu-category" href="recapitulation">Recapitulation</a>
    <a class="nav-link {{$title === "Categories List" ? 'active' : ''}} category-list" href="categoriesList">Category List</a>
    <a class="nav-link" href="login">logout</a>
  </div>
</div>
</div>
</nav>
    </div>