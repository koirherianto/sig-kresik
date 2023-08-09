<div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url()?>" class="nav-link">Home</a>
          </li>
          <?php if($this->session->userdata('nama_user')){ ?>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false" class="nav-link dropdown-toggle">Lahan</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="<?=base_url('lahan/add') ?>" class="dropdown-item">Input Lahan</a></li>
                <li><a href="<?= base_url('lahan')?>" class="dropdown-item">Data Lahan</a></li>
            </ul>
          </li>
          <?php } ?>
          
          <li class="nav-item">
            <a href="<?= base_url('About')?>" class="nav-link">About</a>
          </li>

        </ul>

      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        
        <li class="nav-item">
            <?php if (!$this->session->userdata('nama_user')) { ?>
              <a href="<?= base_url('auth/login') ?>"><i class="fas fa-sign"></i>Login</a>
            <?php }else{?>
              <a href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign"></i>Logout</a>
            <?php } ?>
        </li>

      </ul>
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
            <h1 class="m-0 text-dark">Pemetaan Tanah Bersertifikat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->