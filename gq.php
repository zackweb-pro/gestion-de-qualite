<?php
    include "db_conn.php";
        $id = $_POST["produit"];
        $genre = $_POST["genre"];
        $name = $_POST["name"];
        $speed = $_POST["speed"];
        $rom = $_POST["rom"];
        $ram = $_POST["ram"];
        $size = $_POST["size"];
        $camera = $_POST["camera"];

        $sql = "SELECT * FROM `produits`WHERE id = '$id'";
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_array($result);
        $check = 1;
        if($genre != $row["genre"]){
            $check = 0;
        }
        if($speed < $row["speed"]){
            $check = 0;
        }
        if($rom < $row["rom"]){
            $check = 0;
        }
        if($ram < $row["ram"]){
            $check = 0;
        }
        if($size < $row["size"]){
            $check = 0;
        }
        if($camera < $row["camera"]){
            $check = 0;
        }
        if($check){
            header("location: quality.php?msg=positive");
        }else{
            header("location: quality.php?msg=negative");
        }