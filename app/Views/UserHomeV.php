<?= $this->extend('layouts/UserDashboardV'); ?>
<?= $this->section('content'); ?>
<html>
    <head>
        <title>
            Admin Home Page
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $session = session();
        ?>
        <form action="http://localhost/CI/public/index.php/UserDashboardC/ViewHome" enctype="multipart/form-data" method="post">
            <div class="" style="width: 900px; margin: auto;">
            <h3 align="center"><b>All Items List</b></h3>
            <table>
                <tr>
                    <td>Select Catgeory : </td>
                    <td>
                        <select name="catgeory">
                            <?php 
                                if($CategoryData) {
                                    foreach($CategoryData as $d) {?>
                                        <option value="<?= $d->CategoryID ?>"><?= $d->CategoryName ?></option>
                                <?php }
                                }
                            ?> 
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Search"></td>
                </tr>
            </table>
            <table class="table table-striped" border="2" align="center">
              <tr>
                  <td>ItemID</td>
                  <td>ItemName</td>
                  <td>Price</td>
                  <td>Quantity</td>
                  <td>CategoryID</td>
                  <td>Image</td>
                  <td>Add to Cart</td>
                </tr>
        <?php
            if(isset($itemdata))
            {
                foreach($itemdata as $i)
                {
                ?>
                <tr>
                <td> <?php echo $i->ItemID ?> </td>
                <td> <?php echo $i->ItemName ?> </td>
                <td> <?php echo $i->Price ?> </td>
                <td>
                <select name="qtyselect">
                            <?php 
                                if($i->Quantity >0) {
                                    for($j=1;$j<=$i->Quantity;$j++) {?>
                                        <option value="<?= $j ?>"><?= $j ?></option>
                                <?php }
                                }
                            ?> 
                </select>
                </td>
                <td> <?php echo $i->CategoryID ?> </td>
                <td>
                    <img src="http://localhost/CI/public/<?php echo $i->Image?>" height="100" width="100"> 
                </td>
                <td>
                    <a href="<?= site_url();?>/UserDashboardC/AddToCart/<?= $i->ItemID?>/<?= $i->ItemName?>/" >Add to Cart</a>
                </td>
                </tr>
                <?php    
                }
            }
                ?>
           </table> 
        </form>
    </body>
</html>

<?= $this->endSection(); ?>