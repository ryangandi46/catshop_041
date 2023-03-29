<?php $this->load->view ("cats041/header.php"); ?>
<?php $this->load->view ("cats041/navbar.php"); ?>
<div class="container-md w-25">
    <h1 class="text-center">CATSHOP 041</h1>
    <h3 class="text-center">CATEGORIES FORM</h3>
    <hr>
    <?php
    $cate_name_041 = '';
    $description_041 = '';  

    if (isset($cat)) {
        $cate_name_041 = $cat->cate_name_041;      
        $description_041 = $cat->description_041;
    }
    ?>
    <form action="" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cate Name</label>
            <input type="text" name="cate_name_041" value="<?= $cate_name_041 ?>" class="form-control" id="" placeholder="Name" required>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Description</label>
            <input type="text" name="description_041" value="<?= $description_041 ?>" class="form-control" id="" placeholder="Description" required>
        </div>
        <div class="d-grid gap-2">
            <input class="btn btn-primary" type="submit" value="SAVE" name="submit">
            <a href="<?= site_url('categories041') ?>" class="btn btn-danger value=" CANCEL">CANCEL</a>
        </div>
    </form>
</div>
<?php $this->load->view ("cats041/footer.php"); ?>