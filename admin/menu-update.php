<?php
    include 'config.php';
    if ($_POST["submit"]) {
        $dname = $_POST['dishname'];
        $id = $_POST['id'];
        $des = $_POST['description'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $img = $_POST['image'];
        $mysqli->query("UPDATE menus SET product_name='$dname',product_description='$des',product_img_name='$img',price=$price,qty=$qty where id=$id");
    }
 ?>