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
        ?>
        <form>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="http://localhost/CI/public/index.php/adminhomec">Admin-Dashboard</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active" selected><a href="http://localhost/CI/public/index.php/adminhomec">Home</a></li>
            <li><a href="http://localhost/CI/public/index.php/additemsc">Add New Items</a></li>
            <li><a href="http://localhost/CI/public/index.php/logincontroller">Logout</a></li>
        </ul>
        </div>
        </nav>
        <!-- <h3>Welcome <?php //echo $session->get('User') ?></h3> -->
    
        </form>
        <?= $this->renderSection('content'); ?> 
    </body>
</html>