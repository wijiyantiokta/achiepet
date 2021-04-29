<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    
  </ul>

  <!-- SEARCH FORM -->


  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->

    <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->

      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
         <?php if (empty($data_admin->foto)): ?>
          <img src="<?= base_url() ?>public/media/upload-admin/no-img.jpg" class="user-image img-circle elevation-2" alt="User Image">
          <?php else: ?>
            <img src="<?= base_url() ?>public/media/upload-admin/<?= $data_admin->foto?>" class="user-image img-circle elevation-2" alt="User Image">

          <?php endif ?>
          <span class="d-none d-md-inline"><?= $data_admin->nama?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <?php if (empty($data_admin->foto)): ?>
              <img src="<?= base_url() ?>public/media/upload-admin/no-img.jpg" class="img-circle elevation-2" alt="User Image">
              <?php else: ?>
              <img src="<?= base_url() ?>public/media/upload-admin/<?= $data_admin->foto?>" class="img-circle elevation-2" alt="User Image">
              <?php endif ?>
              <p>
               <?= $data_admin->nama?>
              </p>
            </li>
            <!-- Menu Body -->
            
            <!-- Menu Footer-->
            <li class="user-footer">
              <a href="<?= base_url() ?>admin/pengaturan/profil" class="btn btn-default btn-flat">Profil</a>
              <a href="<?= base_url() ?>admin/login/logout" class="btn btn-default btn-flat float-right">Keluar</a>
            </li>
          </ul>
        </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
          </li> -->
        </ul>
      </nav>