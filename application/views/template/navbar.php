 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a class="navbar-brand">
        <span class="brand-text font-weight-black"> Aplikasi Penghitung Keliling Bangun Datar</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="brand-text font-weight-black">
            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url('home');?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('bangun_datar');?>" class="nav-link">Hitung</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Histori</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                      <li><a href="<?= base_url('file/segitiga.txt');?>" class="dropdown-item">Segitiga </a></li>
                      <li><a href="<?= base_url('file/lingkaran.txt');?>" class="dropdown-item">Lingkaran</a></li>
                      <li><a href="<?= base_url('file/persegi.txt');?>" class="dropdown-item">Persegi</a></li>
                    </ul>
                    <!-- <a onclick="window.location.href='file/persegi.txt'" class="btn btn-danger">Lihat Riwayat Hitungan</a> -->
                  </li>
                </ul>
            </div>
        </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- isi -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">