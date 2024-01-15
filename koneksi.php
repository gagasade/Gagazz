<?php
    $con = mysqli_connect("localhost","id21793182_gagas","@Gagas123","id21793182_toko_online");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
