<?php
    include "db_conn.php";
        $genre = $_POST["genre"];
        $name = $_POST["name"];
        $speed = $_POST["speed"];
        $rom = $_POST["rom"];
        $ram = $_POST["ram"];
        $size = $_POST["size"];
        $camera = $_POST["camera"];

        $sql = "INSERT INTO `produits` (`genre`, `name`, `speed`, `rom`, `ram`, `size`, `camera`) VALUES ('$genre', '$name', '$speed', '$rom', '$ram', '$size', '$camera') ";
        $result = mysqli_query($conn, $sql); 
        header("location: produit.php");