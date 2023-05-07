<?php $this->load->view("cats041/header.php"); ?>
<?php $this->load->view("cats041/navbar.php"); ?>
<div class="container-md w-50  mt-5 p-4">
    <h1 class="text-center">CATSHOP 041</h1>
    <h3 class="text-center">CHANGE PASSWORD</h3>
    <hr>
    <?= $this->session->flashdata('msg'); ?>
    <div style="color : red;"><?= validation_errors() ?></div>
    <form action="" method="post" class="row g-2">        
        <div class="row g-2 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Password Old</label>
            </div>
            <div class="col-auto">
                <input type="password" name="oldpassword" id="inputPassword6" class="form-control" required>
            </div>
        </div>
        <div class="row g-2 align-items-center">
            <div class="col-auto">
                <label for="inputPassword7" class="col-form-label">New Password</label>
            </div>
            <div class="col-auto">
                <input type="password" name="newpassword" id="inputPassword7" class="form-control" aria-describedby="passwordHelpInline" required>
            </div>
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                </span>
            </div>
        </div>
        <div class="d-grid gap-2">
            <input class="btn btn-warning" type="submit" value="CHANGE PASSWORD" name="change">
            <a class="btn btn-primary  d-flex justify-content-center" href="<?= base_url() ?>">Back to home</a>

        </div>
    </form>
</div>
<?php $this->load->view("cats041/footer.php"); ?>