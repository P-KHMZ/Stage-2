<?php
    $numero = "(+243) 991-163-777";
    $email = "pierrekahumuza@gmail.com";
    $prooject_name = "zuri";
    $today = date('Y-m-d');

    // $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    // $server = $cleardb_url["host"];
    // $username = $cleardb_url["user"];
    // $password =$cleardb_url["password"];
    // $db = substr($cleardb_url["path"], 1);
    // $db = $cleardb_url["heroku_3a028db4874a8f2"]

    // $active_group = 'default';
    // $query_builder = TRUE
    // this is for heroku
    // $con = mysqli_connect($server,$username,$password, $db) or die("Couln't connect to the database: ".mysqli_connect_error());

    //Uncomment this code if you use the local dabatase
    $con = mysqli_connect("localhost", "root", "", "zuridb") or die("Couln't connect to the database: ".mysqli_connect_error());

    $errors = [];

?>