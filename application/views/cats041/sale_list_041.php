<?php include "header.php" ?>
<?php include "navbar.php" ?>
<div class="container-md">
    <h1 class="text-center">CATSHOP 041</h1>
    <h3>SALE LIST</h3>
    <table class="table table-bordered table-hover ">
        <thead class="text-center bg-warning">
            <tr>
                <th>NO</th>
                <th>Sale ID</th>
                <th>Sale Date</th>
                <th>Cat Name</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Customer Phone</th>                
            </tr>
        </thead>
        <?php $i = 1;
        foreach ($sales as $sale) { ?>
            <tbody class="text-center">
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $sale->sale_id_041 ?></td>
                    <td><?=tgl ($sale->sale_date_041) ?></td>
                    <td><?= $sale->name_041 ?></td>
                    <td><?= $sale->customer_name_041 ?></td>
                    <td><?= $sale->customer_address_041 ?></td>
                    <td><?= $sale->customer_phone_041 ?></td>                   
                </tr>
            </tbody>
        <?php } ?>
    </table>
    <a class="btn btn-primary  d-flex justify-content-center" href="<?=base_url()?>">Back to home</a>
</div>
<?php include "footer.php" ?>