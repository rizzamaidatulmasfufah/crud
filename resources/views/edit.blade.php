
<div class="card">
    <div class="card-body">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
      <h1>Form Edit Data Buku</h1>

      <?php
        $date= date('d F Y, h:i:s A');
        ?>
    <form action="/buku/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $buku->id }}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Buku</label>
            <input name="kodebuku" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $buku->kodebuku }}"required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
            <input name="judul" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $buku->judul }}"required>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label>
            <input name="gambar" required="reqired" class="form-control" type="file" id="formFile" value="{{ $buku->gambar }}"required>
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pengarang Buku</label>
            <input name="pengarang" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $buku->pengarang }}"required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
            <input name="penerbit" required="reqired" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $buku->penerbit }}"required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stok</label>
            <input name="stok" required="reqired" type="number" class="form-control" id="exampleFormControlInput1" value="{{ $buku->stok }}"required>
        </div>
        <input type="hidden" name="created_at" value="{{ $buku->created_at }}">
        <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="submit" value="Simpan Data">
    </form>

    </div>
  </div>

