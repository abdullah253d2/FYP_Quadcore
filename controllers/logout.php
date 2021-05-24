<?php
    session_start();
    session_unset();
    header("location: ../php/storefront.php");
?>