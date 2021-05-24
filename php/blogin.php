<?php
    $login = false;
    $error = false;
    if($_SERVER["REQUEST_METHOD"] ==  "POST"){
        include '../controllers/db.php';
        $b_phone = $_POST['b_phone'];
        $b_password = $_POST['b_password'];
        $sql = "Select * from b_user where b_phone = '$b_phone' AND b_password = '$b_password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['b_password'] = $b_password;
            header("location: storefront.php");
        }
        else{
            $error = "Failed, Invalid phone number or password!";
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
        if($login){
            echo '<div class="alert alert-success m-0" role="alert">
            Success, you are logged in!
          </div>';
        }
        if($error){
            echo '<div class="alert alert-danger m-0" role="alert">
            '. $error .'
          </div>';
        }
    ?> 
    <section class="main pb-5 bg-white h-100">
        <div class="p-3 container xs" id="login_container">
            <h3 class="font20 mb-1 text-dark font-weight-sbold">Login</h3>
            <form id="login_form" action="./blogin.php" method="POST">
                <div class="form-group">
                    <label>Cell Number</label>
                    <input type="text" maxlength="11" class="form-control" name="b_phone" id="register_mobile_no" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="b_password" id="register_password" required>
                </div>
                <div class="fixed-bottom container px-3">
                    <div class="py-3 font14 text-center text-default"><a href="javascript:;" class="text-primary"
                            onclick="$('#password_container').css('display','block');$('#login_container').css('display','none');">Forgot
                            Password?</a></div>
                    <button class="btn btn-primary mt-2 w-100 font14 py-25" type="submit">Login</button>
                    <div class="py-3 font14 text-center text-default">Not a member? <a href="#"
                            class="text-primary">Register</a></div>
                </div>
            </form>
        </div>
        <div class="p-3 container xs" style="display: none;" id="password_container">
            <h3 class="font20 mb-1 text-dark font-weight-sbold">Forgot Password</h3>
            <form id="forget_password_form" novalidate="novalidate">
                <div class="form-group">
                    <label>Cell Number</label>
                    <input type="text" class="form-control" name="reset_login_mobile_no" id="reset_login_mobile_no">
                </div>
                <div class="fixed-bottom container px-3">
                    <button class="btn btn-primary mt-2 w-100 font14 py-25">Reset Password</button>
                    <div class="py-3 font14 text-center text-default">Already a member? <a href="javascript:;"
                            class="text-primary"
                            onclick="$('#login_container').css('display','block');$('#password_container').css('display','none');">Sign
                            In</a></div>
                </div>
            </form>
        </div>
    </section>
    <?php include '../controllers/db.php'; include '../controllers/footer.php';  ?>
</body>

</html>




