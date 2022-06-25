<?php
    include_once("dbkoneksi2.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kode_mk"])){
        $KODE_MK=$_POST["kode_mk"];
        $NAMA=$_POST["nama"];
        $SEMESTER=$_POST["semester"];

        $sql = "UPDATE mk SET 
            NAMA='".$NAMA."',
            SEMESTER='".$SEMESTER."',
            WHERE KODE_MK='".$KODE_MK."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);