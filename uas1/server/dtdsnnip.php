<?php
    $output["error"] = true;
   
    if(isset($_GET["nip"])){
        $nip = $_GET["nip"];

        include_once("dbkoneksi2.php");
        $sql = "SELECT NIP, NAMA, JK, EMAIL FROM dsn WHERE NIP='".$nip."';";
        $hsl = mysqli_query($cnn, $sql);
        $output["isi"] = mysqli_fetch_all($hsl);
        $output["error"] = false;
    } 
   
    echo json_encode($output);