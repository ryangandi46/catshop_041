<?php $this->load->view ("cats041/header.php"); ?>
<?php $this->load->view ("cats041/navbar.php"); ?>
<div class="container-md">
    <h1 class="text-center">CATSHOP 041</h1>
    <h3>CATEGORIES LIST</h3>    
    <a class="btn btn-primary" href="<?= site_url('categories041/add') ?>">Add new categories</a>
    <hr>
    <table class="table table-bordered table-hover ">
        <thead class="text-center bg-warning">
            <tr>
                <th>NO</th>
                <th>Cate_name</th>
                <th>Description</th>                
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <?php $i = 1;
        foreach ($cats as $cat) { ?>
            <tbody class="text-center">
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $cat->cate_name_041 ?></td>
                    <td><?= $cat->description_041 ?></td>                    
                    <td><a href="<?= site_url('categories041/edit/' . $cat->cate_id_041) ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="<?= site_url('categories041/delete/' . $cat->cate_id_041) ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
    <a class="btn btn-primary  d-flex justify-content-center" href="<?=base_url()?>">Back to home</a>
</div>

<?php $this->load->view ("cats041/footer.php"); ?>