<h3>Tambah Data Dosen</h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil ditambahkan
</div>
<form>
    <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="txnip" placeholder="Isikan NIP">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" id="txnama" placeholder="Isikan Nama Lengkap Dosen">
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select id="txjkel" class="form-select">
            <option value="L"> Laki-Laki </option>
            <option value="P"> Perempuan </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" id="txemail" placeholder="Isikan Email Dosen">
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="storedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/uas1/client/index.php?p=dsn")
}
</script>
<script src="pagedsnstoredata.js"></script>