<?php 
    session_start();
    $txt = false;
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true ){
        $txt = true;
    }
?> 
<header class="main-header sticky-top px-0">
        <div class="search position-relative flex-fill d-none bg-white px-3 py-2" style="z-index: 11111;">
            <input type="text" class="form-control w-100" placeholder="Search" id="search_product">
            <a href="#" onclick="$('.search').addClass('d-none'); $('.i-search').removeClass('d-none');"><i
                    class="i-close position-absolute text-grey" style="right:30px;top:19px;"></i></a>
            <div class="position-absolute d-none border py-2  shadow suggester bg-white" id="search_suggester">
            </div>
        </div>
        <nav class="navbar flex-wrap navbar-light bg-white shadow-bottom border-top">
            <a class="navbar-brand" href="#"><img class="logo" style="vertical-align: bottom;"
                    src="../assets/img/logo.jpg" alt=""><span class="ml-3 font-24">Buzcart</span></a>
            <div class="ml-auto">
                <a class="ml-3" href="#"
                    onclick="$('.search').removeClass('d-none'); $('.i-search').addClass('d-none');"><i
                        class="i-search font-24"></i></a>
                <a href="#" class="ml-3 position-relative  font20 text-dark">
                    <i class="i-cart font-24"></i>
                    <!-- <input type="hidden" id="cart_item_tooltip" value="0"> -->
                    <span class="cart-badge" id="cart_item_home_count">1</span>
                </a>
                <a href="javascript:;" onclick="rightMenu(true);" class="ml-3 font20 text-dark ">
                    <i class="i-menu font-24">
                    </i>
                </a>
            </div>
        </nav>
</header>
<div class="menu right d-none   bg-white" id="main-menu">
        <div class="p-3 border-bottom text-left font-14 text-dark font-weight-sbold">Store Name</div>
        <nav class="py-3 scroll-y font-14" id="menuAccordation">
            <ul class=" list-group font-weight-sbold">
                <ul class="ml-0 pl-0 pt-2 " id="" data-parent="#menuAccordation">
                    <li class="list-group-item py-0 border-0 px-0">
                        <a class="text-dark w-100 d-block px-3 py-2" href="#">categories</a>
                    </li>
                    <li class="list-group-item py-0 border-0 px-0">
                        <a class="text-dark w-100 d-block px-3 py-2" href="#">categories</a>
                    </li>
                    <li class="list-group-item py-0 border-0 px-0">
                        <a class="text-dark w-100 d-block px-3 py-2" href="#">categories</a>
                    </li>
                </ul>
                <?php
                    if($txt){
                        echo '<li class="list-group-item px-0 py-2 border-0">
                        <a class="text-dark px-3" href="./blogin.php">
                        Login
                        </a>
                    </li>
                    <li class="list-group-item px-0 py-2 border-0">
                        <a class="text-dark px-3" href="./bsignup.php">
                        Signup
                        </a>
                    </li>';
                    }
                    else{
                        echo '<li class="list-group-item px-0 py-2 border-0">
                        <a class="text-dark px-3" href="../controllers/logout.php">
                        Logout
                        </a>
                    </li>';
                    }
                ?> 
                <li class="list-group-item px-0 py-2 border-0">
                    <a class="text-dark px-3" href="">
                        Contact Us 
                    </a>
                </li>
            </ul>
        </nav>
        <div class="text-center py-2 position-absolute w-100 bg-primary"
            style=" bottom:0px; color:#a6c0e9;">
            Powered By <a href="#"> Buzcart
                <!-- <img style="width: 65px; height: 18px;" src=""></a> -->
        </div>
    </div>
    <div class="menu-overlay d-none" onclick="rightMenu(false)">
    </div>