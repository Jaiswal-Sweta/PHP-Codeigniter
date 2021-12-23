<?= $this->extend('layouts/AdminDashboardV'); ?>
<?= $this->section('content'); ?>
<html>
    <head>
        <title>
            Admin Dashboard
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $session = session();
            //echo "in view ";
            //print_r($itemdata);
        ?>
        <?= form_open_multipart("additemsc/insert") ?>
        <!-- <form action="http://localhost/CI/public/index.php/additemsc/insert" enctype="multipart/form-data" method="post"> -->
            <input type="hidden" name="hItemID" value = "<?php if(isset($itemdata)){ echo $itemdata[0]->ItemID; }?>">
            <div class="" style="width: 500px; margin: auto;">
            <h3 align="center"><b>Add New Items</b></h3>
            <table class="table table-striped" border="1">
               <tr>
                   <td>Select Category : </td>
                   <td><input type="text" name="category" value="<?php if(isset($itemdata)){ echo $itemdata[0]->CategoryID; }?>"></td>
               </tr>
               <tr>
                   <td>Item Name : </td>
                   <td><input type="text" name="txtItemName" value="<?php if(isset($itemdata)){ echo $itemdata[0]->ItemName; }?>"></td>
               </tr>
               <tr>
                   <td>Price</td>
                   <td><input type="text" name="txtPrice" value="<?php if(isset($itemdata)){ echo $itemdata[0]->Price; }?>"></td>
               </tr>
               <tr>
                   <td>Quantity</td>
                   <td><input type="text" name="txtQuantity" value="<?php if(isset($itemdata)){ echo $itemdata[0]->Quantity; }?>"></td>
               </tr>
               <tr>
                   <td>Item Image</td>
                   <td><input type="file" name="FileUpload1"></td>
               </tr>
               <tr>
                   <td></td>
                   <td>
                       <input type="submit" name="submit" value="Add Items">
                       <input type="submit" name="submit" value="Update Items">
                    </td>
               </tr>
           </table> 
           </div>
        <!-- </form> -->
        <?= form_close() ?>
    </body>
</html>


<?= $this->endSection(); ?>