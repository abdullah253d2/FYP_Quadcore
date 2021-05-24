<?php
    $alert = "";
    $Serror = false;
    if($_SERVER["REQUEST_METHOD"] ==  "POST"){
        include '../controllers/db.php';
        $b_phone = $_POST['b_phone'];
        $b_name = $_POST['b_name'];
        $b_password = $_POST['b_password'];
        $b_address = $_POST['b_address'];
        $existSql ="SELECT * FROM `b_user` WHERE b_phone = '$b_phone'";
        $result = mysqli_query($conn, $existSql);
        $existRows = mysqli_num_rows($result);
        if($existRows > 0){
            $Serror = "Failed, your account is already created!";
        }
        else{
            $sql = "INSERT INTO `b_user` (`b_phone`, `b_name`, `b_password`, `b_address`) VALUES ('$b_phone', '$b_name', '$b_password', '$b_address')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $alert = "1";
            }
        }
    }
?> 

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here" />
        <link rel="stylesheet" href="../assets/css/bootstrap4.min.css">
        <link rel="stylesheet" href="../assets/css/fyp-fonts.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <title></title>
    </head>

    <body class="theme-light">
    <?php include '../controllers/db.php'; include '../controllers/header.php';  ?>
    <?php
        if($alert == "1"){
            echo '<div class="alert alert-success m-0" role="alert">
            Success, your account has been created!
          </div>';
        }
        elseif($Serror){
            echo '<div class="alert alert-danger m-0" role="alert">
            '. $Serror . '
          </div>';
        }
    ?> 
            <section class="main pb-5 bg-white h-100">
                <div class="p-3 container xs">
                    <h3 class="font20 mb-1 text-dark font-weight-sbold">Create Account</h3>
                    <p class="font14">Please fill in the information below</p>
                    <form id="register_form" autocomplete="off" action="./bsignup.php" method="POST">
                        <div class="form-group">
                            <label>Cell Number</label>
                            <input type="text" maxlength="11" class="form-control" name="b_phone" id="register_mobile_no" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  required>
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="b_name" id="register_name" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="b_password" id="register_password" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea type="address" class="form-control" name="b_address" id="register_address" required></textarea>
                        </div>
                        <div class="fixed-bottom container px-3">
                            <button type="submit" class="btn btn-primary mt-2 w-100 font14 py-25">Create</button>
                            <div class="py-3 font14 text-center text-default">Already a member? <a href="#" class="text-primary">Login</a></div>
                        </div>
                    </form>
                </div>
            </section>
            <?php include '../controllers/db.php'; include '../controllers/footer.php';  ?> 
    </body>
</html>