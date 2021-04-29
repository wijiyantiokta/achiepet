 <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>public/template/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url() ?>home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-0 bread">Login</h1>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb" style="margin-top: 50px; margin-bottom: 50px;">
  <div class="container">
    <div class="row d-flex no-gutters">
      <div class="col-md-3">

      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
           <h3 class="text-center">Login</h3>
           <hr>
           <?php  
           echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
           if ($this->session->flashdata('danger'))
           {
            echo '<div class="alert alert-danger alert-slide-up">';
            echo $this->session->flashdata('danger');
            echo '</div>';
          }

          if ($this->session->flashdata('sukses'))
          {
            echo '<div class="alert alert-success alert-slide-up">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }
          ?>
          <form action="<?= base_url() ?>login" method="post">
           <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required="">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
      </div>
    </div>


  </div>
</div>
</div>
</section>