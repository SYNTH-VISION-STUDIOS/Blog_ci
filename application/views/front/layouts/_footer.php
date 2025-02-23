<!--================ start footer Area  =================-->	
<footer class="footer-area mt-5">
   <div class="container">
      <div class="row f_widgets_inner">
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget ab_widgets">
               <div class="f_title">
                  <h3>Web-Genius.com</h3>
               </div>
               <p>The Best Place for News in the Best Place on Earth!</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                  <div class="f_title">
                  <h3>Quick Links</h3>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <h5 style="color: white">Category</h5>
                        <ul class="list mt-3">
                           <?php foreach($category as $c) : ?>
                              <li><a href="<?= base_url("blog/category/$c->slug") ?>"><?= $c->category_name ?></a></li>
                           <?php endforeach ?>
                        </ul>
                     </div>
                     <div class="col-6">
                        <h5 style="color: white">Info</h5>
                        <ul class="list">
                              <li><a href="<?= base_url('contact') ?>">About</a></li>
                              <li><a href="#">Contact</a></li>
                        </ul>
                     </div>										
                  </div>							
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer-widget m_news_widgets">
               <div class="f_title">
                  <h3>Social Networks</h3>
               </div>
               <div class="col-lg-4 col-md-4 footer-social icon mx-auto">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-youtube-play"></i></a>
               </div>
            </div>
         </div>	
      </div>
      <div class="row footer-bottom d-flex justify-content-between align-items-center">
         <div class="col-lg-12">
            <div class="f_boder"></div>
         </div>
         <p class="col-lg-8 col-md-8 footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
   </div>
</footer>
<!--================ End footer Area  =================-->
<style>
   /* Footer Styling */
.footer-area {
    background: linear-gradient(45deg, #FFD900FF, #FFA500); /* Gradasi warna cerah */
    padding: 50px 0;
    color: #333;
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

.footer-area .f_title h3 {
    font-size: 22px;
    color: #fff;
    margin-bottom: 15px;
    text-transform: uppercase;
}

.footer-area p {
    font-size: 14px;
    color: #fff;
    margin-bottom: 10px;
}

.footer-area .list li {
    list-style: none;
}

.footer-area .list li a {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s ease-in-out;
}

.footer-area .list li a:hover {
    color: #333;
    font-weight: bold;
}

/* Social Icons */
.footer-social a {
    display: inline-block;
    margin: 10px;
    color: #fff;
    font-size: 22px;
    transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
}

.footer-social a:hover {
    color: #333;
    transform: scale(1.2);
}

/* Footer Bottom */
.footer-bottom {
    margin-top: 30px;
    padding-top: 15px;
    border-top: 1px solid rgba(255, 255, 255, 0.3);
}

.footer-bottom p {
    font-size: 14px;
    color: #fff;
}

.footer-bottom i {
    color: red;
}

/* Responsive */
@media (max-width: 768px) {
    .footer-area {
        padding: 30px 20px;
    }

    .footer-social {
        margin-top: 10px;
    }
}

</style>