<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg fixed-top mb-5 p-2 bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Catshop041</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?= base_url('') ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cats</a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= site_url('cats041/index') ?>">Cat List</a></li>
            <li><a class="nav-link" href="<?= site_url('cats041/add') ?>">Cat Form</a></li>
            <?php if ($this->session->userdata('usertype') == 'Manager') { ?>
              <li><a class="nav-link" href="<?= site_url('cats041/sales') ?>">Report</a></li>
            <?php } ?>
          </ul>
        </li>
        <a class="nav-link" href="<?= site_url('categories041') ?>">Categories</a>
        <?php if ($this->session->userdata('usertype') == 'Manager') { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Users</a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="<?= site_url('users041/index') ?>">Users List</a></li>
              <li><a class="nav-link" href="<?= site_url('users041/add') ?>">Users Form</a></li>
            </ul>
          </li>
        <?php } ?>
      </ul>
      <div class="d-flex">
        <div class="btn-group dropstart">
          <button type="button" class="btn bg-transparent " data-bs-toggle="dropdown" aria-expanded="false">
            <?= $this->session->userdata('username') ?>
            <div class="vr"></div>
            <img src="<?= base_url('uploads/users/' . $this->session->userdata('photo')) ?>" class="rounded-circle  align-middle" style="width: 40px; max-height:40px;" alt="Photo user">
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= site_url('auth041/changepass') ?>">Change Password</a></li>
            <li><a class="dropdown-item" href="<?= site_url('auth041/changephoto') ?>">Channge Photo</a></li>
            <li><a class="dropdown-item" href="<?= site_url('auth041/logout') ?>">Logout</a></li>
          </ul>
        </div>
       </div>
      </div>
    </div>
  </div>
</nav>