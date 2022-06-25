function storedata(){
    let kode_mk= document.getElementById("txkode_mk").value;
    let nama = document.getElementById("txnama").value;
    let semester = document.getElementById("txsemester").value;


    let dta = "kode_mk="+kode_mk+"&nama="+nama+"&semester="+semester;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/uas1/server/dtmkstore.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
    }

}