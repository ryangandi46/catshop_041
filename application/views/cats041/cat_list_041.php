<?php include "header.php" ?>
<?php include "navbar.php" ?>
<div class="container-md">
    <h1 class="text-center">CATSHOP 041</h1>
    <h3>CATS LIST</h3>    
    <hr>
    <?=$this->session->flashdata('msg')?>
    <a class="btn btn-primary" href="<?= site_url('cats041/add') ?>">Add new cat</a>
    <hr>
    <table class="table table-bordered table-hover ">
        <thead class="text-center bg-warning">
            <tr>
                <th>NO</th>
                <th>Name</th>
                <th>type</th>
                <th>Gender</th>
                <th>Age(month)</th>
                <th>Price($)</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <?php $i = 1;
        foreach ($cats as $cat) { ?>
            <tbody class="text-center">
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $cat->name_041 ?></td>
                    <td><?= $cat->type_041 ?></td>
                    <td><?= $cat->gender_041 ?></td>
                    <td><?= $cat->age_041 ?></td>
                    <td><?= $cat->price_041 ?></td>
                    <td><a href="<?= site_url('cats041/edit/' . $cat->id_041) ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="<?= site_url('cats041/delete/' . $cat->id_041) ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a></td>
                    <td><?php if($cat->sold_041==1) echo 'SOLD'; else { ?><a href="<?= site_url('cats041/sale/' . $cat->id_041) ?>" class="btn btn-success">SALE</a><?php } ?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
    <a class="btn btn-primary  d-flex justify-content-center" href="<?=base_url()?>">Back to home</a>
</div>
<?php include "footer.php" ?>