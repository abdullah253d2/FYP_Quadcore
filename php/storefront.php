<?php
         include '../controllers/db.php';
         $sql = "Select * from products where user_id = ".$_SERVER['QUERY_STRING'];
         $result = mysqli_query($conn, $sql);
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
    <!-- NAVBAR START -->
    <?php include '../controllers/db.php'; include '../controllers/header.php';  ?>
    <!-- NAVBAR ENDS -->
    <!-- CAROUSEL/SLIDESHOW START -->
    <section class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators of Slideshow-->
            <ul class="carousel-indicators" style="margin-bottom: 40px;">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <!-- END Indicators of Slideshow-->
            <div class="carousel-inner position-relative">
                <div class="position-absolute carousel-overlay"></div>
                <div class="carousel-item active">
                    <img src="../assets/img/banner-cos.png" style="width: 100%;">
                </div>
                <div class="carousel-item">
                    <img src="../assets/img/banner.png" style="width: 100%;">
                </div>
                <div class="carousel-item">
                    <img src="../assets/img/banner-cos.png" style="width: 100%;">
                </div>
                <div class="carousel-caption  p-0 w-100"
                    style="background-color: rgba(0, 0, 0, 0.67); left: 0; bottom: 0;">
                    <div class="font-14 mb-0 px-3">
                        <div class="float-left py-2 text-white">Timings: 10:00AM to 10:00PM</div>
                        <div class="float-right py-2">
                            <a class="" href="#"><i class="i-whatsapp font-18 text-white"></i></a>
                            <a class="ml-3" href="#"><i class="i-phone font-18 text-white"></i></a>
                            <a class="ml-3" href="#"><i class="i-location font-18 text-white"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- CAROUSEL/SLIDESHOW ENDS -->
    <!-- PRODUCT SECTION START -->
    <section class="container pb-5">
        <!-- <div class="categories-scroll bg-white d-none">
            <div id="cat_2" class="py-3 font-weight-sbold scroll-x border-bottom">
                <a href="javascript:;" id="sub_6" class=" p-3 text-default active">Category1
                </a>
                <a href="javascript:;" id="sub_192" class=" p-3 text-default ">Cat2
                </a>
                <a href="javascript:;" id="sub_194" class=" p-3 text-default ">Cat
                </a>
                <a href="javascript:;" id="sub_193" class=" p-3 text-default ">CAc
                </a>
                <a href="javascript:;" id="sub_6" class=" p-3 text-default ">Category1
                </a>
                <a href="javascript:;" id="sub_192" class=" p-3 text-default ">Cat2
                </a>
                <a href="javascript:;" id="sub_194" class=" p-3 text-default ">Cat
                </a>
                <a href="javascript:;" id="sub_193" class=" p-3 text-default ">CAc
                </a>
                <a href="javascript:;" id="sub_all" class="p-3 text-default " onclick="showAllProducts();">All</a>
            </div>
        </div> -->
        <div class="row p-2 m-0 d-flex" id=""> 
        <?php while($row =  $result->fetch_assoc()) {?>   
            <div class="col-md-4 col-6 p-0 px-2">
                <div class="mb-2 bg-white" style="border-radius: 6px;"><a href="">
                        <div class="border" style="border-radius: 6px 6px 0 0;"><img
                                src="<?php echo $row['prod_image'] ?>"
                                class="img-fluid" style="border-radius: 6px 6px 0px 0px;width:100%;"></div>
                        <div class="pt-2 text-left crop-text-2 px-2"
                            style="white-space: normal; height: 44px; line-height: 1.2;"><?php echo $row['prod_name'] ?></div>
                        <div class="d-flex font-18 p-2" style="  line-height:1;">
                            <div class="text-primary"><b>Rs. <?php echo $row['prod_price'] ?></b></div>
                        </div>
                    </a>
                </div>
            </div>
            <?php }?>
        </div>
    </section>
    <!-- PRODUCT SECTION ENDS -->
    <!-- FOOTER START -->
        <?php include '../controllers/db.php'; include '../controllers/footer.php';  ?>
    <!-- FOOTER ENDS -->
</body>

</html>