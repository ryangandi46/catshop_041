<?php $this->load->view("cats041/header.php"); ?>
<?php $this->load->view("cats041/navbar.php"); ?>
<div class="container-md w-75">
    <H1 class="text-center">CATSHOP 041</H1>
    <h3 class="text-center">APPS MENU</h3>
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
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card border-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Logout</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("cats041/footer.php"); ?>