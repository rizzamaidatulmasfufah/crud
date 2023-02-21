
<div class="card">
    <div class="card-body">
      <h1> Tambah Data Buku</h1>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
                        
    <form action="/buku/store" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Buku</label>
            <input name="kodebuku" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan kode buku"required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
            <input name="judul" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan judul buku"required>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label>
            <input name="gambar" class="form-control" type="file" id="formFile"required>
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
            <input name="pengarang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan pengarang buku"required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
            <input name="penerbit" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan penerbit buku"required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stok</label>
            <input name="stok" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan stok buku"required>
        </div>
        <input type="hidden" name="created_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="submit" value="Simpan Data">
    </form>
    </div>
  </div>
