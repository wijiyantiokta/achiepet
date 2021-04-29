<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url() ?>admin/dashboard" class="brand-link">
    <img src="<?= base_url() ?>public/admin/dist/img/logo_v2-01.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">ACHIE PETSHOP</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <?php if (empty($data_admin->foto)): ?>
        <img src="<?= base_url() ?>public/media/upload-admin/no-img.jpg" class="img-circle elevation-2" alt="User Image">
          <?php else: ?>
        <img src="<?= base_url() ?>public/media/upload-admin/<?= $data_admin->foto ?>" class="img-circle elevation-2" alt="User Image">
        <?php endif ?>
      </div>
      <div class="info">
        <a href="<?= base_url() ?>admin/pengaturan/profil" class="d-block"><?= $data_admin->nama?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview">
            <a href="<?= base_url() ?>admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/jenis" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Layanan Grooming
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/booking" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Booking
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/pelanggan" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pelanggan
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url() ?>admin/groomer" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Groomer
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/user" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manajemen User
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url() ?>admin/bank" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Bank
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/laporan" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
               Laporan
             </p>
           </a>
         </li>
         <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Pengaturan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url() ?>admin/pengaturan/instansi" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Instansi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>admin/pengaturan/profil" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Profil</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>admin/pengaturan/ubah_password" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ubah Password</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>admin/login/logout" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>Keluar</p>
          </a>
        </li>



        <li class="nav-header"></li>






      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>