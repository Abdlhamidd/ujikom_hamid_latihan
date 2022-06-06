    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title">Hasil Perhitungan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                    <div class="ribbon-wrapper ribbon-lg">
                      <div class="ribbon bg-danger">
                          SEMUA
                        </div>
                      </div>
                      <h3>Jumlah Perhitingan </h3>
                      <br />
                      <center><h1><b><?= $jumlah_semua;?></b>  Kali</h1></center>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-info">
                          SEGITIGA
                        </div>
                      </div>
                      <h3>Persentasi Hitungan</h3>
                      <br />
                      <center><h1><b><?= round($persentase_segitiga);?>  %</b></h1></center>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-success">
                            PERSEGI
                            </div>
                        </div>
                        <h3>Persentasi Hitungan</h3>
                      <br />
                      <center><h1><b><?= round($persentase_persegi);?>  %</b></h1></center>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-success">
                            LINGKARAN
                            </div>
                        </div>
                        <h3>Persentasi Hitungan</h3>
                      <br />
                      <center><h1><b><?= round($persentase_lingkaran);?>  %</b></h1></center>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>