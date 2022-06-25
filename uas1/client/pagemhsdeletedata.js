function deletedata(){
    let nim = document.getElementById("txnim").value;
    
    let dta = "nim="+nim;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/uas1/server/dtmhsdelete.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(()=>{
            window.location.href="http://localhost/uas1/client/index.php?p=mhs";
        },5000);
    }

}