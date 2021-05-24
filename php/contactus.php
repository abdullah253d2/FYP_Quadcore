<?php 
$sent = false;
if($_SERVER["REQUEST_METHOD"] ==  "POST")
    {
        include '../controllers/db.php';
       $Cname = $_POST['contact_name'];
       $Cemail = $_POST['contact_email'];
       $header = 'From: abd253d2@gmail.com' . "\r\n" . 
       'MIME-Version: 1.0' . "\r\n" . 
       'Content-Type: test/html; charset=utf-8';  
       $Subject = $_POST['Subject'];
       $Cmsg = $_POST['contact_msg'];

       if(empty($Cname) || empty($Cemail) || empty($Subject) || empty($Cmsg))
       {
       }
       else
       {
           $to = "abd253d2@gmail.com";

           if(mail($to,$Subject,$Cmsg,$header))
           {
            $sent = true;
           }
       }
    }
    // else
    // {
    //     header("location:contactus.php");
    // }
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
        if($sent){
            echo '<div class="alert alert-success m-0" role="alert">
            Success, you are logged in!
          </div>';
        }
    ?> 
    <section class="main pb-5 bg-white">
        <div class="p-3 container xs">
            <h3 class="font20 mb-1 text-dark font-weight-sbold">Contact Us</h3>
            <div class="text-dark py-2">
                <i class="i-phone font-18"></i>
                <p class=" font-18 d-inline"> 03078888272 </p>
            </div>
            <div class="text-dark py-2">
                <i class="i-whatsapp font-18"></i>
                <p class=" font-18 d-inline"> 03078888272 </p>
            </div>
            <!-- <div class="text-dark py-2">
                <i class="i-location font-18"></i>
                <p class=" font-18 d-inline">
                    <u><a href="https://maps.google.com/?q=31.515895420999396,74.33457931869897('139 E-1, Gulberg 3, Shahrah E Hazrat Imam Hussain,')"
                            style="color:#000;">139 E-1, Gulberg 3, Shahrah E Hazrat Imam Hussain,</a>
                    </u>
                </p>
            </div> -->
            <div class="text-dark py-2">
                <i class="i-clock font-18"></i>
                <p class=" font-18 d-inline">
                    Timings: 10:00AM to 10:00PM
                </p>
            </div>
            <h3 class="font20 py-2 text-dark font-weight-sbold"></h3>
            <form id="contact_us_form" autocomplete="off" action="./contactus.php" method="POST">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" required name="contact_name" id="contact_name">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" required name="contact_email" id="contact_email">
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" required name="Subject" id="Subject">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" required name="contact_msg" id="contact_msg"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sends mt-2 w-100 font-18 py-25 ">Submit</button>
            </form>
        </div>
    </section>
    <?php include '../controllers/db.php'; include '../controllers/footer.php';  ?>

</body>

</html>