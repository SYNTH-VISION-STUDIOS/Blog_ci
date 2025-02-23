<?php $this->load->view('auth/templates/header') ?>

  <main class="container">
   <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
         <div class="card card-signin my-5">
            <div class="card-body">
            <h5 class="card-title text-center">LOGIN</h5>

            <!-- Alert -->
            <div class="row">
               <div class="col">
                  <?php if($this->session->flashdata('message')) : ?>
                     <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                     <?= $this->session->flashdata('message') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>   
                     </div>
                  <?php endif ?>
               </div>
            </div>

            <?= form_open("auth/login", ["class" => "form-signin"]) ?>
               <div class="form-label-group">
                  <input type="text" name="identity" value="" class="form-control" id="inputEmail" placeholder="Email" required autofocus>  
                  <label for="inputEmail">Email</label>
               </div>

               <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" value="" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
               </div>

               <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" name="remember" value="1" class="custom-control-input" id="remember">
                  <label class="custom-control-label" for="remember">Remember Me</label>
               </div>

               <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit">Sign In</button>

               <hr class="my-4">

               <div class="text-center mt-1">
                  <a href="<?= base_url('auth/forgot_password') ?>" style="text-decoration:none;">Forgot Your Password ? </a> 
               </div>
               
            <?= form_close() ?>
            </div>
         </div>
      </div>
   </div>
  </main>
  
<?php $this->load->view('auth/templates/footer') ?>


<style>
   /* Background */
body {
    background: linear-gradient(135deg, #ff416c, #ff4b2b);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Card Styling */
.card-signin {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    padding: 30px;
    transition: all 0.3s ease-in-out;
}

.card-signin:hover {
    transform: translateY(-5px);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
}

/* Form Styling */
.form-label-group input {
    border-radius: 30px;
    padding: 10px 15px;
    font-size: 16px;
}

/* Button */
.btn-danger {
    background: linear-gradient(45deg, #ff416c, #ff4b2b);
    border: none;
    border-radius: 30px;
    padding: 10px;
    transition: all 0.3s ease-in-out;
}

.btn-danger:hover {
    background: linear-gradient(45deg, #ff4b2b, #ff416c);
    transform: scale(1.05);
}

/* Forgot Password */
.text-center a {
    color: #ff416c;
    font-weight: bold;
    transition: all 0.3s;
}

.text-center a:hover {
    color: #ff4b2b;
}

</style>