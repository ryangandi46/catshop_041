<?php include "header.php" ?>
<?php include "navbar.php" ?>
<div class="container-md w-25">
    <h1 class="text-center">CATSHOP 041</h1>
    <h3 class="text-center">CATS FORM</h3>
    <hr>
    <?php
    $name = '';
    $type = '';
    $gender = '';
    $age = '';
    $price = '';

    if (isset($cat)) {
        $name = $cat->name_041;
        $type = $cat->type_041;
        $gender = $cat->gender_041;
        $age = $cat->age_041;
        $price = $cat->price_041;
    }
    ?>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name_041" value="<?= $name ?>" class="form-control" id="" placeholder="Name" required>
        </div>
        <select name="type_041" class="form-select" aria-label="Default select example" required>
            <option>Choose Type</option>
            <option value="Domestic" <?= $type == 'Domestic' ? 'selected' : '' ?>>Domestic</option>
            <option value="Angora" <?= $type == 'Angora' ? 'selected' : '' ?>>Angora</option>
            <option value="Persia" <?= $type == 'Persia' ? 'selected' : '' ?>>Persia</option>
        </select>
        <label>Gender</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender_041" value="Male" <?= $gender == 'Male' ? 'checked' : '' ?> id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender_041" value="Female" <?= $gender == 'Female' ? 'checked' : '' ?> id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Female
            </label>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Age</label>
            <input type="number" name="age_041" value="<?= $age ?>" class="form-control" id="" placeholder="Age" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="number" name="price_041" value="<?= $price ?>" class="form-control" id="" placeholder="Price" required>
        </div>
        <div class="d-grid gap-2">
            <input class="btn btn-primary" type="submit" value="SAVE" name="submit">
            <a href="<?= site_url('cats041') ?>" class="btn btn-danger value="CANCEL">CANCEL</a>
        </div>
    </form>
</div>
<?php include "footer.php" ?>