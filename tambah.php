<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="dashboard.php">Dashboard</a> / Tambah Tempat</span>
    <h2>Tambah Tempat</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row ">
  <!-- <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 "> -->
  <form>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Tempat</label>
    <div class="col-sm-10">
      <input type="NamaTempat" class="form-control form-control-sm" id="colFormLabelSm" placeholder="NamaTempat">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="colFormLabel" placeholder="Alamat">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nomor</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Nomor">
    </div>
  </div>
    <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kapasitas</label>
    <div class="col-sm-10">
      <input type="NamaTempat" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Kapasitas">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="colFormLabel" placeholder="Harga">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Gambar</label>
    <div class="col-sm-10">
      <input type="file" class="custom-file-input" id="customFile" placeholder="Pilih Gambar">
    </div>
  </div>
</form>
      <button type="submit" class="btn btn-success" name="Submit">Tambah Tempat</button>
          


                
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>