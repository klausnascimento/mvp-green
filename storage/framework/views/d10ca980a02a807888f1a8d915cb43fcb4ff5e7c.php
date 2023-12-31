 <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-lg-4">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" >
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Keep in touch</h5>
                <p class="text-white">To learn more about these new features, we invite you to visit our Git page. Here you will find all the information about the latest updates of our project, as well as instructions for using them. Do not hesitate to send us your comments and suggestions so that we can continue to improve our web application.</p>
                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="https://github.com/billyboy35/GreenSustainAbility">
                  Read More
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100 p-3">
            <canvas id="incidentChart" width="400" height="200"></canvas>

            <script>
                var months = <?php echo json_encode($months, 15, 512) ?>;
                var counts = <?php echo json_encode($counts, 15, 512) ?>;

                var ctx = document.getElementById('incidentChart').getContext('2d');
                var incidentChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months,
                        datasets: [{
                            label: 'Number of incidents',
                            data: counts,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100 p-3">
            <canvas id="environmentalIndicatorsChart" width="400" height="200"></canvas>
            <script>
              var indicatorLabels = <?php echo json_encode($indicatorLabels, 15, 512) ?>;
              var indicatorSums = <?php echo json_encode($indicatorSums, 15, 512) ?>;
          
              var ctx = document.getElementById('environmentalIndicatorsChart').getContext('2d');
              var indicatorsChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: indicatorLabels,
                      datasets: [{
                          label: 'Values of environmental indicators',
                          data: indicatorSums,
                          backgroundColor: 'rgba(54, 162, 235, 0.2)',
                          borderColor: 'rgba(54, 162, 235, 1)',
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          y: {
                              beginAtZero: true
                          }
                      }
                  }
              });
            </script>
          </div>
        </div>
      </div>
      
      <div class="row mt-4">
        <div class="col-lg-12">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" >
              <span class="mask bg-gradient-info"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Good environmental management practices</h5>
                <p class="text-white"><?php echo e($randomMessage); ?></p>
              </div>
            </div>
        </div>
      </div>
      <div class="row mt-4">
          
        <?php $__currentLoopData = $dataRSS['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" >
              <span class="mask bg-gradient-primary"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2"><?php echo e($dataRSS['title']); ?></h5>
                    <div class="item">
                      <h2><a href="<?php echo e($data->get_permalink()); ?>"><?php echo e($data->get_title()); ?></a></h2>
                      <p class="text-white"><?php echo e($data->get_description()); ?></p>
                      <p><small>Posted on <?php echo e($data->get_date('j F Y | g:i a')); ?></small></p>
                    </div>
                  
                  <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="<?php echo e($dataRSS['permalink']); ?>">
                  Read More
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </main>


<?php /**PATH /var/www/html/klaus/mvp-green/resources/views/livewire/dashboard.blade.php ENDPATH**/ ?>