<h3>Edit Data Matakuliah <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Perbaharui
</div>
<form>
    <div class="mb-3">
        <label class="form-label">KODE_MK</label>
        <input type="text" class="form-control" id="txkode_mk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama_MK</label>
        <input type="text" class="form-control" id="txnama">
    </div>
    <div class="mb-3">
        <label class="form-label">Semester</label>
        <input type="text" class="form-control" id="txsemester">
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="updatedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/uas1/client/index.php?p=mk")
}
</script>
<script src="pagemkcaridata.js"></script>
<script src="pagemkupdatedata.js"></script>