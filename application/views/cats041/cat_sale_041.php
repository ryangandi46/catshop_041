<?php $this->load->view("cats041/header.php"); ?>
<?php $this->load->view("cats041/navbar.php"); ?>
<div class="container-md w-50">
    <h1 class="text-center">CATSHOP 041</h1>
    <h3 class="text-center">CAT SALE FORM</h3>
    <HR>
    <form action="" method="post">
        <table class="table table-bordered table-hover ">
            <tr>
                <td>Cat Id</td>
                <td>: <?= $cat->id_041 ?></td>
            </tr>
            <tr>
                <td>Cat Name</td>
                <td>: <?= $cat->name_041 ?></td>
            </tr>
            <tr>
                <td>Cat Type</td>
                <td>: <?= $cat->type_041 ?></td>
            </tr>
            <tr>
                <td>Cat Price</td>
                <td>: $<?= $cat->price_041 ?></td>
            </tr>
        </table>
        <!--
        <tr>
            <td>Customer Name</td>
            <td><input type="text" name="customer_name_041" /></td>
        </tr>
        <tr>
            <td>Customer Address</td>
            <td><textarea name="customer_address_041"></textarea></td>
        </tr>
        <tr>
            <td>Customer Phone</td>
            <td><input type="text" name="customer_phone_041" /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="SALE">
                <a href="<?= site_url('cats041') ?>" class="btn btn-danger value=" CANCEL">CANCEL</a>
            </td>
        </tr>
-->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
            <input type="text" name="customer_name_041" class="form-control" id="" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Customer Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="customer_address_041" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Customer Phone</label>
            <input type="text" name="customer_phone_041" class="form-control" id="" placeholder="Your Phone" required>
        </div>
        <input type="submit" name="submit" value="SALE" class="btn btn-primary">
        <a href="<?= site_url('cats041') ?>" class="btn btn-danger" value="CANCEL">CANCEL</a>
    </form>
</div>
<?php $this->load->view("cats041/footer.php"); ?>