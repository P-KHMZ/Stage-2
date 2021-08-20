<?php
    $numero = "(+243) 991-163-777";
    $email = "pierrekahumuza@gmail.com";
    $prooject_name = "zuri";
    $today = date('Y-m-d');

    $con = mysqli_connect("localhost", "root", "", "zuridb") or die("Couln't connect to the database: ".mysqli_connect_error());

    $errors = [];

?>