<html>
    <body>
    <?php
        if(isset($validation)) {
            echo $validation->listErrors();
        }
    ?>
        <h2 align="center">Login</h2>
        <form action="http://localhost/CI/public/index.php/logincontroller/checkuser" method="post">
        <table align="center">
            <tr>
                <td> Username : </td>
                <td><input type="text" name="txtusername"></td>
            </tr>
            <tr>
                <td> Password : </td>
                <td><input type="text" name="txtpassword"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="login"></td>
            </tr>
        </table>
        </form>
    </body>
</html>