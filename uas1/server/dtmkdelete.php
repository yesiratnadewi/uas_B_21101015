<?php
    include_once("dbkoneksi2.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kode_mk"])){
        $KODE_MK=$_POST["kode_mk"];
        
        $sql = "DELETE FROM mk WHERE KODE_MK='".$KODE_MK."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);