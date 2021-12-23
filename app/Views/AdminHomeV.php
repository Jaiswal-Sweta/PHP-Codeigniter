<?= $this->extend('layouts/AdminDashboardV'); ?>
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
        <form action="http://localhost/CI/public/index.php/additemsc/insert" enctype="multipart/form-data" method="post">
            <div class="" style="width: 900px; margin: auto;">
            <h3 align="center"><b>All Items List</b></h3>
            <table class="table table-striped" border="2" align="center">
              <tr>
                  <td>ItemID</td>
                  <td>ItemName</td>
                  <td>Price</td>
                  <td>Quantity</td>
                  <td>CategoryID</td>
                  <td>Image</td>
                  <td>Edit</td>
                  <td>Delete</td>
                </tr>
                
                <?php
                foreach($itemdata as $i)
                {
                ?>
                <tr>
                <td> <?php echo $i->ItemID ?> </td>
                <td> <?php echo $i->ItemName ?> </td>
                <td> <?php echo $i->Price ?> </td>
                <td> <?php echo $i->Quantity ?> </td>
                <td> <?php echo $i->CategoryID ?> </td>
                <td>
                    <img src="http://localhost/CI/public/<?php echo $i->Image?>" height="100" width="100"> 
                </td>
                <td>
                    <a href="<?= site_url();?>/adminhomeC/edit/<?= $i->ItemID?>" >Edit</a>
                </td>
                <td>
                    <a href="<?= site_url();?>/adminhomeC/delete/<?= $i->ItemID?>" >Delete</a>
                </td>
                </tr>
                <?php    
                }
                ?>
           </table> 
        </form>
    </body>
</html>

<?= $this->endSection(); ?>