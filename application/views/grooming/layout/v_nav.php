<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>"><span class="flaticon-pawprint-1 mr-2"></span>Pet Grooming</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
				<!-- <li class="nav-item"><a href="about.html" class="nav-link">Tentang</a></li> -->
				<li class="nav-item"><a href="<?= base_url() ?>layanan" class="nav-link">Layanan</a></li>
				<!-- <li class="nav-item"><a href="contact.html" class="nav-link">Hubungi Kami</a></li> -->
				<?php if (empty($this->session->userdata('nama_pelanggan'))): ?>
					<li class="nav-item"><a href="<?= base_url() ?>daftar" class="nav-link">Daftar</a></li>
					<li class="nav-item"><a href="<?= base_url() ?>login" class="nav-link">Login</a></li>
					<?php else: ?>
						<li class="nav-item"><a href="<?= base_url() ?>member" class="nav-link">Profil</a></li>
						<li class="nav-item"><a href="<?= base_url() ?>login/logout" class="nav-link">Logout</a></li>
					<?php endif ?>

				</ul>
			</div>
		</div>
	</nav>