<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg bg-body-tertiary text-bg-info p-3 sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Catshop041</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= base_url('') ?>">Home</a>            
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cats</a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= site_url('cats041/index') ?>">Cat List</a></li>
            <li><a class="nav-link" href="<?= site_url('cats041/add') ?>">Cat Form</a></li>                 
            <li><a class="nav-link" href="<?= site_url('cats041/sales') ?>">Report</a></li>                 
          </ul>
        </li>
        <a class="nav-link" href="<?= site_url('categories041') ?>">Categories</a>        
        <a class="nav-link" href="<?= site_url('') ?>">Users</a>        
      </div>
    </div>
  </div>
</nav>