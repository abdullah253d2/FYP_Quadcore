<?php
    if($_SERVER["REQUEST_METHOD"] ==  "POST"){
        include './db.php';
        $b_phone = $_POST['b_phone'];
        $b_name = $_POST['b_name'];
        $b_password = $_POST['b_password'];
        $b_address = $_POST['b_address'];
    }

?> 