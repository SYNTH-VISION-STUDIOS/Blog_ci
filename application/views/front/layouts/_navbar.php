<?php
   $this->load->model('category_model', 'category', true);
   $navbar   = $this->category->getCategory();

   $category = $this->uri->segment(3);
?>

<nav class="navbar navbar-light navbar-expand-lg navbar-light bg-light fixed-top home">
   <div class="container">
      <a href="<?= base_url() ?>" class="navbar-brand d-flex w-50 mr-auto">
      <img src="<?= base_url('images/brand/bek.png') ?>" height="50" alt="">
      </a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
   <ul class="navbar-nav w-100 justify-content-center">
      <li class="nav-item">
         <a class="nav-link" href="<?= base_url('Home') ?>">
            Beranda
         </a>
      </li>
      <?php foreach($navbar as $n) : ?>
         <li class="nav-item <?php if($n->slug === $category) { echo "active"; } ?>">
            <a class="nav-link" href="<?= base_url("blog/category/$n->slug") ?>"><?= $n->category_name ?></a>
         </li>
      <?php endforeach ?>
   </ul> 
   <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
      <li class="nav-item">
         <a class="nav-link" href="<?= base_url() ?>">
            <i class="fa fa-twitter"></i>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?= base_url() ?>">
            <i class="fa fa-instagram"></i>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?= base_url() ?>">
            <i class="fa fa-facebook"></i>
         </a>
      </li>
   </ul>
</div>

</nav>



<style>
   /* Navbar Styling */
.navbar {
    background: linear-gradient(45deg, #FFD700, #FFA500); /* Gradasi warna emas-oranye */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 10px 15px;
}

.navbar-brand img {
    height: 50px;
}

.navbar-nav .nav-item {
    margin: 0 10px;
}

.navbar-nav .nav-link {
    color: #fff !important;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
}

.navbar-nav .nav-link:hover {
    color: #333 !important;
    transform: scale(1.05);
}

/* Active menu item */
.navbar-nav .nav-item.active .nav-link {
    color: #333 !important;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 5px;
    padding: 8px 12px;
}

/* Social Media Icons */
.navbar-nav.ml-auto .nav-link {
    font-size: 20px;
    padding: 5px;
}

.navbar-nav.ml-auto .nav-link:hover {
    transform: scale(1.2);
}

/* Navbar Toggler */
.navbar-toggler {
    border: none;
    outline: none;
}

.navbar-toggler:focus {
    box-shadow: none;
}

/* Responsive */
@media (max-width: 768px) {
    .navbar {
        padding: 8px 12px;
    }

    .navbar-nav {
        text-align: center;
    }

    .navbar-nav .nav-item {
        margin: 5px 0;
    }
}

</style>