<?php
    $output["error"] = true;
   
    if(isset($_GET["kode_mk"])){
        $kode_mk = $_GET["kode_mk"];

        include_once("dbkoneksi2.php");
        $sql = "SELECT KODE_MK, NAMA,  SEMESTER FROM mk WHERE KODE_MK='".$kode_mk."';";
        $hsl = mysqli_query($cnn, $sql);
        $output["isi"] = mysqli_fetch_all($hsl);
        $output["error"] = false;
    } 
   
    echo json_encode($output);