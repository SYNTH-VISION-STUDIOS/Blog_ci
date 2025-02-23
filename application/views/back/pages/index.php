<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
   </div>

   <!-- Alert -->
   <div class="row">
      <div class="col">
         <?php if($this->session->flashdata('message')) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
               <?= $this->session->flashdata('message') ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>   
            </div>
         <?php endif ?>
      </div>
   </div>

   <!-- Content Row -->
   <div class="row">
      <div class="col-xl-4 col-md-6 mb-4">
         <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-s font-weight-bold text-danger text-uppercase mb-1">Total Posts</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= $total_posting ?>
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="far fa-newspaper fa-3x text-gray-500"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-xl-4 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-s font-weight-bold text-success text-uppercase mb-1">News Category</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= $total_category ?>
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-box fa-3x text-gray-500"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-xl-4 col-md-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-s font-weight-bold text-primary text-uppercase mb-1">Banner</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= $total_banner ?>
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-images fa-3x text-gray-500"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<center>
<!-- Grafik Donut Total Posts, News Category, dan Banner -->
<div class="row">
   <div class="col-xl-6 col-lg-6">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Distribusi Data</h6>
         </div>
         <div class="card-body d-flex justify-content-center">
            <canvas id="combinedDonutChart" style="height: 400px; width: 400px;"></canvas>
         </div>
      </div>
   </div>
</div>


<script>
   document.addEventListener("DOMContentLoaded", function() {
      var ctxDonut = document.getElementById("combinedDonutChart").getContext("2d");

      var myDonutChart = new Chart(ctxDonut, {
         type: 'doughnut',
         data: {
            labels: ["Total Posts", "News Category", "Banner"],
            datasets: [{
               data: [<?= $total_posting ?>, <?= $total_category ?>, <?= $total_banner ?>],
               backgroundColor: [
                  'rgba(255, 99, 132, 0.7)',  // Merah
                  'rgba(54, 162, 235, 0.7)',  // Biru
                  'rgba(255, 206, 86, 0.7)'   // Kuning
               ],
               borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)'
               ],
               borderWidth: 1
            }]
         },
         options: {
            responsive: true,
            maintainAspectRatio: false,
            aspectRatio: 1, // Memastikan grafik tetap proporsional
            cutout: '60%',
            plugins: {
               legend: {
                  position: 'bottom'
               }
            }
         }
      });
   });
</script>
</center>