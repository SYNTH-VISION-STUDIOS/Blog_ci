<?php 
   $url = $this->uri->segment(3);

   if(isset($url)){
      $query = $this->db->where('slug', $url)->get('category')->row();
      $title = "About " . $query->category_name;
   }else{
      $title = '';
   }
?>
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



<!--================News Area =================-->
<section class="news_area p_100">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="main_title2">
               <h2>All News <?= $title ?></h2>
            </div>
            <div class="latest_news">
               <?php foreach($post as $p)  :?>
                  <div class="media">
                     <div class="d-flex">
                        <img class="img-fluid" src="<?= base_url("images/posting/medium/$p->photo") ?>" alt="">
                     </div>
                     <div class="media-body">
                        <div class="choice_text">
                           <div class="date">
                              <a class="gad_btn" href="<?= base_url("blog/read/$p->seo_title") ?>"><?= $p->category_name ?></a>
                              <a href="<?= base_url("blog/read/$p->seo_title") ?>" class="float-right"><i class="fa fa-calendar" aria-hidden="true">
                                 </i><?= mediumdate_indo($p->date) ?>
                              </a>
                           </div>
                           <a href="<?= base_url("blog/read/$p->seo_title") ?>">
                              <h4><?= $p->title ?></h4>
                           </a>
                           <p><?= character_limiter($p->content, 100) ?></p>
                        </div>
                     </div>
                  </div>
               <?php endforeach ?>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
               <div class="col">
                  <nav aria-label="Page navigation example">
                     <?= $pagination ?>
                  </nav>
               </div> 
            </div>
            <!-- End of Pagination -->
            
         </div>
         <!-- ================Sidebar================== -->
         <?php $this->load->view('front/layouts/_sidebar', $trending) ?>
         <!-- ================End of Sidebar================== -->
      </div>
   </div>
</section>
<!--================End News Area =================-->