<?php $this->load->view ("cats041/header.php"); ?>
<?php $this->load->view ("cats041/navbar.php"); ?>
<div class="container-md  mt-5 p-4 vstack gap-2 col-md-3 mx-auto">
    <h1 class="text-center">CATSHOP 041</h1>
    <h3 class="text-center">USER FORM</h3>
    <hr>
    <?php
    $username_041 = '';
    $usertype_041 = '';
    $fullname_041 = '';  

    if (isset($user)) {
        $username_041 = $user->username_041;      
        $usertype_041 = $user->usertype_041;
        $fullname_041 = $user->fullname_041;
    }
    ?>
    <form action="" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" name="username_041" value="<?= $username_041 ?>" class="form-control" id="" placeholder="Name" required>
        </div>
        <label>Usertype</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="usertype_041" value="Manager" <?= $usertype_041 == 'Manager' ? 'checked' : '' ?> id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Manager
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="usertype_041" value="Cashier" <?= $usertype_041 == 'Cashier' ? 'checked' : '' ?> id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Cashier
            </label>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">fullname</label>
            <input type="text" name="fullname_041" value="<?= $fullname_041 ?>" class="form-control" id="" placeholder="fullname" required>
        </div>
        <div class="container-md  vstack gap-2 col-md-10 mx-auto">
            <input class="btn btn-primary" type="submit" value="SAVE" name="submit">
            <a href="<?= site_url('users041') ?>" class="btn btn-danger value=" CANCEL">CANCEL</a>
        </div>
    </form>
</div>
<?php $this->load->view ("cats041/footer.php"); ?>