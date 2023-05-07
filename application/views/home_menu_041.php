<?php $this->load->view("cats041/header.php"); ?>
<?php $this->load->view("cats041/navbar.php"); ?>
<div class="container-md w-75 mt-5 p-5">
    <H1 class="text-center">CATSHOP 041</H1>
    <h3 class="text-center">APPS MENU</h3>
    <hr>
    <div class="card mb-2 justify-content-center mx-auto d-block border-info" style="max-width: 540px; ">
        <div class="row g-0">
            <div class="col-md-3" style="max-width: 110px; max-height: 100px;">
                <img src="<?= base_url('uploads/users/' . $this->session->userdata('photo')) ?>" class="img-fluid rounded " alt="Photo user">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h5 class="card-title"><?= $this->session->userdata('username') ?></h5>
                    <p class="card-text">welcome <?= $this->session->userdata('fullname') ?>,you are login as <?= $this->session->userdata('usertype') ?></p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dapibus ac magna ut bibendum. Mauris.</p>
                   
                        
                        <div class="d-grid gap-2 d-md-block">                           
                            <a href="<?= site_url('auth041/changephoto') ?>" class="btn btn-primary">Change photo</a>
                            <a href="<?= site_url('auth041/changepass') ?>" class="btn btn-primary">Change Password</a>
                            <a href="<?= site_url('auth041/logout') ?>" class="btn btn-danger">Logout</a>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row gy-3">
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card border-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Manage Cats</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="<?= site_url('cats041') ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card border-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Manage Categories</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="<?= site_url('categories041') ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <?php if ($this->session->userdata('usertype') == 'Manager') { ?>
            <div class="col-sm-4 ">
                <div class="card border-info mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Manage Users</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="<?= site_url('users041') ?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card border-info mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Sales Report</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="<?= site_url('cats041/sales') ?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card border-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Change Photo</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="<?= site_url('auth041/changephoto') ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card border-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Change Password</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="<?= site_url('auth041/changepass') ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card border-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Logout</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="<?= site_url('auth041/logout') ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("cats041/footer.php"); ?>