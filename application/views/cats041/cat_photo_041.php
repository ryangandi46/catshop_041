<?php $this->load->view("cats041/header.php"); ?>
<?php $this->load->view("cats041/navbar.php"); ?>
<div class="container-md  mt-5 p-4  vstack gap-2 col-md-4 mx-auto">
    <H1 class="text-center">CATSHOP 041</H1>
    <h3 class="text-center">CHANGE PHOTO</h3>
    <hr>
    <?= $this->session->flashdata('msg') ?>
    <div style="color:red;"><?=$error?></div>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Current Photo</label>
       
        <img src="<?= base_url('uploads/cats/'. $cat) ?>" class="rounded mx-auto d-block " style="max-width: 200px; max-height: 200px;" alt="Photo">

        <div class="mb-3">
            <label for="formFile" class="form-label">New Photo</label>
            <input class="form-control" name="photo" type="file" id="formFile">
        </div>
        <div class="d-grid gap-2">
            <input class="btn btn-warning" type="submit" value="UPLOAD PHOTO" name="upload">
            <a class="btn btn-primary  d-flex justify-content-center" href="<?= base_url() ?>">Back to home</a>
        </div>
    </form>
</div>
<?php $this->load->view("cats041/footer.php"); ?>