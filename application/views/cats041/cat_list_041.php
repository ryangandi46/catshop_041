<?php include "header.php" ?>
<?php include "navbar.php" ?>
<div class="container-md">
    <h1 class="text center">CATSHOP 041</h1>
    <h3>CATS LIST</h3>
    <a class="btn btn-primary" href="<?= site_url('cats041/add') ?>">Add new cat</a>
    <hr>
    <tabel>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age(month)</th>
            <th>Price($)</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $i = 1;
        foreach ($cats as $cat) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $cat->name_041 ?></td>
                <td><?= $cat->type_041 ?></td>
                <td><?= $cat->gender_041 ?></td>
                <td><?= $cat->age_041 ?></td>
                <td><?= $cat->price_041 ?></td>
                <td><a href="<?=site_url('cats041/edit/'.$cat->id_041)?>">Edit</a></td>
                <td><a href="<?=site_url('cats041/delete/'.$cat->id_041)?>" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        <?php } ?>
    </tabel>
</div>
<?php include "footer.php" ?>