<?php
     include '../controllers/db.php';
     $sql = "Select * from s_user";
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
    <style>
        .text-primary{
color: #212121 !important;
        }
    </style>
</head>

<body class="theme-light">
    <?php include '../controllers/db.php'; include '../controllers/header.php';  ?>
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
    <!-- <section class="container" style="background-color: #f2f2f2;">
        <div class="p-2">
            <label class="font20 font-weight-sbold text-primary d-inline">Featured Products</label>
        </div>
        <div class="row mx-0 px-2 scroll-x">
            <a href="#" class="col-md-3 col-5 p-0 pr-2">
                <div class="mb-3   bg-white" style="border-radius: 6px;">
                    <div class="thumb1 border" style="border-radius: 6px 6px 0px 0px;">
                        <img src="https://www.dukan.pk/pi/91/tumb-ptImg1614520793-57982655493291.jpg" class="img-fluid"
                            style="border-radius: 6px 6px 0px 0px; width: 100%;">
                    </div>
                    <div class="pt-2 pname text-dark text-left font14 font-weight-ebold crop-text-2 pl-2"
                        style="white-space: normal; height: 43px; line-height: 1.2;">
                        Blushed Silk
                    </div>
                    <div class="d-flex font16  font-weight-ebold pl-2" style="height: 19px; line-height: 1;">
                        <div class="text-primary"><b>Rs. 15,000</b></div>
                    </div>
                    <div class=" text-secondary text-left font14 font-weight-ebold crop-text-2 pl-2 pb-2"
                        style="line-height: 1;">
                        i-sha’s Studio
                    </div>
                </div>
            </a>
            <a href="#" class="col-md-3 col-5 p-0 pr-2">
                <div class="mb-3   bg-white" style="border-radius: 6px;">
                    <div class="thumb1 border" style="border-radius: 6px 6px 0px 0px;">
                        <img src="https://www.dukan.pk/pi/98/tumb-ptImg1613666988-35459105493311.jpg" class="img-fluid"
                            style="border-radius: 6px 6px 0px 0px; width: 100%;">
                    </div>
                    <div class="pt-2 pname text-dark text-left font14 font-weight-ebold crop-text-2 pl-2"
                        style="white-space: normal; height: 43px; line-height: 1.2;">
                        ALL FOR 1350RS DEAL
                    </div>
                    <div class="d-flex font16  font-weight-ebold pl-2" style="height: 19px; line-height: 1;">
                        <div class="text-primary"><b>Rs. 1,350</b></div>
                    </div>
                    <div class=" text-secondary text-left font14 font-weight-ebold crop-text-2 pl-2 pb-2"
                        style="line-height: 1;">
                        Jewel Charms
                    </div>
                </div>
            </a>
            <a href="#" class="col-md-3 col-5 p-0 pr-2">
                <div class="mb-3   bg-white" style="border-radius: 6px;">
                    <div class="thumb1 border" style="border-radius: 6px 6px 0px 0px;">
                        <img src="https://www.dukan.pk/pi/01/tumb-ptImg1613658501-12284258731861.jpg" class="img-fluid"
                            style="border-radius: 6px 6px 0px 0px; width: 100%;">
                    </div>
                    <div class="pt-2 pname text-dark text-left font14 font-weight-ebold crop-text-2 pl-2"
                        style="white-space: normal; height: 43px; line-height: 1.2;">
                        Fuchsia Fields
                    </div>
                    <div class="d-flex font16  font-weight-ebold pl-2" style="height: 19px; line-height: 1;">
                        <div class="text-primary"><b>Rs. 2,850</b></div>
                    </div>
                    <div class=" text-secondary text-left font14 font-weight-ebold crop-text-2 pl-2 pb-2"
                        style="line-height: 1;">
                        Vintage Designs
                    </div>
                </div>
            </a>
            <a href="#" class="col-md-3 col-5 p-0 pr-2">
                <div class="mb-3   bg-white" style="border-radius: 6px;">
                    <div class="thumb1 border" style="border-radius: 6px 6px 0px 0px;">
                        <img src="https://www.dukan.pk/pi/26/tumb-ptImg1613162870-55106053130860.jpg" class="img-fluid"
                            style="border-radius: 6px 6px 0px 0px; width: 100%;">
                    </div>
                    <div class="pt-2 pname text-dark text-left font14 font-weight-ebold crop-text-2 pl-2"
                        style="white-space: normal; height: 43px; line-height: 1.2;">
                        RED SKIN VALENTINE FOULARD (Spd 644)
                    </div>
                    <div class="d-flex font16  font-weight-ebold pl-2" style="height: 19px; line-height: 1;">
                        <div class="text-primary"><b>Rs. 2,500</b></div>
                    </div>
                    <div class=" text-secondary text-left font14 font-weight-ebold crop-text-2 pl-2 pb-2"
                        style="line-height: 1;">
                        SEAP by Sanaarif
                    </div>
                </div>
            </a>
        </div>
    </section> -->
    <section class="container pb-5" style="background-color: #ffffff;">
        <div class="px-2 py-3">
            <label class="font20 font-weight-sbold text-primary d-inline">Our Stores</label>
            </a>
        </div>
        <div class="row mx-0 px-2 pb-3">
            <?php while($row =  $result->fetch_assoc()) {?>
                <a href="http://localhost/FYP_quadcore/php/storefront.php?<?php echo $row['user_id'] ?>" class="col-md-3 col-5 p-0 pr-2 pb-3">
                    <div class="bg-white">
                        <div class="thumb1">
                            <img src="<?php echo $row['store_logo'] ?>"
                                class="img-fluid border" style="border-radius: 50%; width: 100%;">
                        </div>
                        <div class="text-dark pt-2 text-center font14 font-weight-ebold"
                            style="height: 50px;white-space: normal;">
                            <?php echo $row['sname'] ?>
                        </div>
                        <div class="text-center font16  font-weight-medium px-4">
                            <img class="" src="https://www.dukan.pk/assets/images/rating.svg"
                                style="margin-bottom: 5px;  width: 20px; height: 20px;">
                            <div class="font18 text-dark d-inline-block ">5.0</div>
                        </div>
                    </div>
                </a>
            <?php }?>
        </div>
    </section>
    <?php include '../controllers/db.php'; include '../controllers/footer.php';  ?>
</body>

</html>