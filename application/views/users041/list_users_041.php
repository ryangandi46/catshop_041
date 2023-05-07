<?php $this->load->view ("cats041/header.php"); ?>
<?php $this->load->view ("cats041/navbar.php"); ?>
<div class="container-md  mt-5 p-4">
    <h1 class="text-center">CATSHOP 041</h1>
    <h3>USER LIST</h3>    
    <?=$this->session->flashdata('msg')?>
    <a class="btn btn-primary" href="<?= site_url('users041/add') ?>">Add new user </a>
    <hr>
    <table class="table table-bordered table-hover ">
        <thead class="text-center bg-warning">
            <tr>
                <th>NO</th>
                <th>Username</th>
                <th>Usertype</th>                
                <th>Fullname</th>                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <?php $i = 1;
        foreach ($users as $user) { ?>
            <tbody class="text-center">
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $user->username_041 ?></td>
                    <td><?= $user->usertype_041 ?></td>                    
                    <td><?= $user->fullname_041 ?></td>                    
                    <td><a href="<?= site_url('users041/edit/' . $user->userid_041) ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="<?= site_url('users041/delete/' . $user->userid_041) ?>" onclick="return confirm('Are you sure delete?')" class="btn btn-danger">Delete</a></td>
                    <td><a href="<?= site_url('users041/resetpass/' . $user->userid_041) ?>" onclick="return confirm('Are you sure reset password?')" class="btn btn-warning">Reset Password</a></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
    <a class="btn btn-primary  d-flex justify-content-center" href="<?=base_url()?>">Back to home</a>
</div>

<?php $this->load->view ("cats041/footer.php"); ?>