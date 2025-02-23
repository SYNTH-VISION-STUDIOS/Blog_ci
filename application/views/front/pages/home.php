<style>
/* General Styling */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to right, #FFFFFFFF, #FFFFFFFF);
    color: #000000FF;
}

/* Carousel Styling */
.carousel-item {
    transition: transform 0.8s ease-in-out;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
    filter: invert(100%);
}

/* Button Styling */
.genric-btn {
    transition: 0.3s ease-in-out;
    background: #00A8E8;
    color: #fff;
    border-radius: 25px;
    padding: 10px 20px;
}
.genric-btn:hover {
    transform: scale(1.05);
    box-shadow: 0px 4px 15px rgba(0, 168, 232, 0.5);
}

/* Card Styling */
.card {
    border-radius: 15px;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3);
    background: #00EEFFFF;
    color: #000000FF;
}
.card-body {
    transition: 0.3s ease-in-out;
}
.card-body:hover {
    transform: translateY(-5px);
}

/* News Section */
.choice_item {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    transition: 0.3s ease-in-out;
    background: #8A8A8A11;
    color: #000;
    padding: 15px;
}
.choice_item img {
    transition: 0.3s ease-in-out;
    border-radius: 10px;
}
.choice_item:hover img {
    transform: scale(1.1);
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.main_title2 h2 {
    animation: fadeInUp 0.8s ease-in-out;
    color: #00A8E8;
    font-size: 28px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    padding-bottom: 10px;
    border-bottom: 3px solid #00A8E8;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .carousel-item img {
        width: 100%;
        height: auto;
    }
    .choice_item {
        margin-bottom: 20px;
    }
}
</style>



<!--================ Home Banner Area =================-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
      <?php $no = 0;?>
      <?php foreach($featured as $f) : ?>
         <?php $no++;  ?>
         <div class="carousel-item <?php if($no <= 1) { echo "active"; } ?> ">
            <div class="row align-items-center my-5">
               <div class="col-lg-8">
                  <img class="img-fluid mb-4 mb-lg-0" src="<?= base_url("images/posting/$f->photo") ?>" alt="">
               </div>
               <div class="col-lg-4">
                  <div class="container">
                     <div class="date text-center">
                        <a class="genric-btn success circle small" href="<?= base_url("blog/category/$f->slug") ?>"><?= $f->category_name ?></a>
                     </div>
                     <h1 class="font-weight-light text-center"><?= $f->title ?></h1>
                     <p><?= character_limiter($f->content, 200) ?></p>
                     <div class="row">
                        <div class="col text-center">
                           <a href="<?= base_url("blog/read/$f->seo_title") ?>" class="genric-btn info circle arrow">Continue Reading<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <?php endforeach ?>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
   </a>
</div>
<!--================ End Home Banner Area =================-->

<!--================ Subscribe Area =================-->
<div class="card bg-light text-center">
   <div class="card-body">
      <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-4">
                  <br>
                  <h4 class="float-right my-2 text-dark">Subscribe to our Web-Genius</h4>
               </div>
               <div class="col-lg-6 col-sm-8">
                  <form action="" class="form-inline">
                     <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <button class="genric-btn info radius ml-2">Subscribe</button>
                     </div>
                  </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!--================ End Subscribe Area =================-->

<!--================ Choice Area =================-->
<section class="choice_area mt-4">
   <div class="container">
      <div class="main_title2">
         <h2>Editor's Choice</h2>
      </div>
      <div class="row choice_inner">
         <?php foreach($choice as $c) : ?>
            <div class="col-lg-3">
               <div class="choice_item">
                  <img class="img-fluid choice" src="<?= base_url("images/posting/small/$c->photo") ?>" alt="">
                  <div class="choice_text">
                     <div class="date">
                        <a class="gad_btn" href="<?= base_url("blog/category/$c->slug") ?>"><?= $c->category_name ?></a>
                        <a href="<?= base_url("blog/read/$c->seo_title") ?>" class="float-right">
                           <i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($c->date) ?>
                        </a>
                     </div>
                     <a href="<?= base_url("blog/read/$c->seo_title") ?>"
                        ><h4><?= $c->title ?></h4>
                     </a>
                     <p><?= character_limiter($c->content, 70) ?></p>
                  </div>
               </div>
            </div>
         <?php endforeach ?>
      </div>
   </div>
</section>
<!--================End Choice Area =================-->

<!--================News Area =================-->
<section class="news_area mt-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">

            <!-- Last News -->
            <div class="main_title2">
               <h2>Latest News</h2>
            </div>
            <div class="latest_news">
               <?php foreach($lastNews as $ln)  :?>
                  <div class="media">
                     <div class="d-flex">
                        <img class="img-fluid" src="<?= base_url("images/posting/medium/$ln->photo") ?>" alt="">
                     </div>
                     <div class="media-body">
                        <div class="choice_text">
                           <div class="date">
                              <a class="gad_btn" href="<?= base_url("blog/category/$ln->slug") ?>"><?= $ln->category_name ?></a>
                              <a href="<?= base_url("blog/read/$ln->seo_title") ?>" class="float-right"><i class="fa fa-calendar" aria-hidden="true">
                                 </i><?= mediumdate_indo($ln->date) ?>
                              </a>
                           </div>
                           <a href="<?= base_url("blog/read/$ln->seo_title") ?>">
                              <h4><?= $ln->title ?></h4>
                           </a>
                           <p><?= character_limiter($ln->content, 100) ?></p>
                        </div>
                     </div>
                  </div>
               <?php endforeach ?>
            </div>
            <!-- End of Last News -->

            <div class="tavel_food mt-5">
               <div class="main_title2">
                  <h2>Gaming Corner</h2>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="row choice_small_inner">
                        <?php $no = 0;?>
                        <?php foreach($video_game as $vg) : ?>
                        <?php 
                           $no++ ;
                           if($no < 5) : ?>
                              <div class="col-lg-6 col-sm-6">
                                 <div class="choice_item small">
                                    <img class="img-fluid" src="<?= base_url("images/posting/xsmall/$vg->photo") ?>" alt="">
                                    <div class="choice_text">
                                       <a href="<?= base_url("blog/read/$vg->seo_title") ?>"><h4><?= $vg->title ?></h4></a>
                                       <div class="date">
                                          <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($vg->date) ?></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           <?php endif ?>
                        <?php endforeach ?>
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <?php $no = 0; ?>
                     <?php foreach($video_game as $vg) : ?>
                        <?php 
                           $no++ ;
                           if($no == 5) : ?>
                              <div class="choice_item">
                                 <img class="img-fluid" src="<?= base_url("images/posting/large/$vg->photo") ?>" alt="">
                                 <div class="choice_text">
                                    <div class="date">
                                       <a class="gad_btn" href="<?= base_url("blog/category/$vg->slug") ?>"><?= $vg->category_name ?></a>
                                       <a href="#" class="float-right"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($vg->date) ?></a>
                                    </div>
                                    <a href="<?= base_url("blog/read/$vg->seo_title") ?>"><h4><?= $vg->title ?></h4></a>
                                    <p><?= character_limiter($vg->content, 150) ?></p>
                                 </div>
                              </div>
                        <?php endif ?>
                     <?php endforeach ?>
                  </div>               
               </div>     
            </div>

            <div class="row mt-5">
               <div class="col text-center">
                  <a href="<?= base_url('blog') ?>" class="genric-btn info-border circle arrow">View More<span class="lnr lnr-arrow-right"></span></a>
               </div>
            </div>
          
         </div>      
         
         <!-- ================Sidebar================== -->
         <?php $this->load->view('front/layouts/_sidebar', $trending) ?>
         <!-- ================End of Sidebar================== -->
         
      </div>
   </div>
</section>
<!--================End News Area =================-->
