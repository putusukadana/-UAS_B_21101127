<h3>Edit Data Matakuliah <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Perbaharui
</div>
<form>
    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" class="form-control" id="txkodemk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control" id="txnamamk">
    </div>
    <div class="mb-3">
        <label class="form-label">Semester</label>
        <select id="txsms" class="form-select">
            <option value="Semester 1"> Semester 1 </option>
            <option value="Semester 2"> Semester 2</option>
            <option value="Semester 3"> Semester 3</option>
            <option value="Semester 4"> Semester 4</option>
            <option value="Semester 5"> Semester 5</option>
            <option value="Semester 6"> Semester 6</option>
            <option value="Semester 7"> Semester 7</option>
            <option value="Semester 8"> Semester 8</option>
        </select>
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
  location.replace("http://localhost/webproB1/client/index.php?p=matakuliah")
}
</script>
<script src="http://localhost/webproB1/client/MK/pagemkcaridata.js"></script>
<script src="http://localhost/webproB1/client/MK/pagemkupdatedata.js"></script>