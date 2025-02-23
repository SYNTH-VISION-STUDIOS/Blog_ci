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
    background: #FFFFFFFF;
    color: #EAEAEA;
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



<!--================Home Banner Area =================-->
<section class="banner_area">
   <div class="banner_inner d-flex align-items-center" style="background-image: url(<?= base_url('images/banner/' . $banner->photo) ?>)">
      <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
      <div class="container">
         <div class="banner_content text-center">
            <h2>News Details</h2>
            <div class="page_link">
               <a href="<?= base_url('home') ?>">Home</a>
               <a href="<?= base_url("blog/read/$posting->seo_title") ?>">News Details</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--================End Home Banner Area =================-->

<!--================News Area =================-->
<section class="news_area single-post-area mt-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="main_blog_details">
               <img class="img-fluid" src="<?= base_url("images/posting/large/$posting->photo") ?>" alt="">
               <h4><?= $posting->title ?></h4>
               <div class="user_details">
                  <div class="float-left">
                     <a class="gad_btn" href="<?= base_url("blog/category/$posting->slug") ?>"><?= $posting->category_name ?></a>
                  </div>
                  <div class="float-right">
                     <div class="media">
                        <div class="media-body">
                           <p><?= mediumdate_indo($posting->date) ?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <p><?= $posting->content ?></p>
            </div>
         </div>
         
         <!-- ================Sidebar================== -->
         <?php $this->load->view('front/layouts/_sidebar', $trending) ?>
         <!-- ================End of Sidebar================== -->

      </div>
   </div>
</section>
<!--================End News Area =================-->
	