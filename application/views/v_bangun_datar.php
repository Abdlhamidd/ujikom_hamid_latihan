<!-- Main content -->
<section class="content">
<!-- Default box -->
<div class="container">
<div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
          <div class="card-header text-muted border-bottom-0">
              <center>
                  <h3>Hitung Luas lingkaran</h3>
              </center>
          </div>
          <div class="card-body pt-0 mt-3">
            <form action="<?= base_url('bangun_datar/lingkaran'); ?>" method="POST">
                <div class="form-group">
                    <label>Panjang Jari-Jari lingkaran</label>
                    <input type="number" class="form-control" name="jari" placeholder="masukan Panjang Jari-Jari lingkaran" required>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Hitung</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
          <div class="card-header text-muted border-bottom-0">
              <center>
                  <h3>Hitung Luas Segitiga</h3>
              </center>
          </div>
          <div class="card-body pt-0 mt-3">
            <form action="<?= base_url('bangun_datar/segitiga'); ?>" method="POST">
                <div class="form-group">
                    <label>Panjang Alas Segitiga</label>
                    <input type="number" class="form-control" name="alas" placeholder="masukan Panjang Alas Segitiga" required>
                </div>
                <div class="form-group">
                    <label>Tinggi Segitiga</label>
                    <input type="number" class="form-control" name="tinggi" placeholder="masukan Tinggi Segitiga" required>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Hitung</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
          <div class="card-header text-muted border-bottom-0">
              <center>
                  <h3>Hitung Luas persegi</h3>
              </center>
          </div>
          <div class="card-body pt-0 mt-3">
            <form action="<?= base_url('bangun_datar/persegi'); ?>" method="POST">
                <div class="form-group">
                    <label>Panjang Sisi persegi</label>
                    <input type="number" class="form-control" name="sisi" placeholder="Masukan panjang Sisi persegi" required>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Hitung</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card -->
</div>
</section>
    <!-- /.content -->