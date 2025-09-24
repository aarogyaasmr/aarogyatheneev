<?php $this->load->view(adminpath.'/sidebar') ?>
<div class="content-page">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box">
            
            <h4 class="page-title">Dashboard</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-xl-3">
          <div class="widget-rounded-circle card-box">
            <div class="row">
              <div class="col-6">
                <div class="avatar-lg rounded-circle shadow-lg bg-primary border-primary border"> <i class="fe-user font-22 avatar-title text-white"></i> </div>
              </div>
              <div class="col-6">
                <div class="text-right">
                  <h3 class="text-dark mt-1"><span data-plugin="counterup">
                    <?php   echo $this->db->count_all_results('testimonials');?>
                    </span></h3>
                  <p class="text-muted mb-1 text-truncate">Testimonials</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="widget-rounded-circle card-box">
            <div class="row">
              <div class="col-6">
                <div class="avatar-lg rounded-circle shadow-lg bg-success border-success border"> <i class="fa-book fa font-22 avatar-title text-white"></i> </div>
              </div>
              <div class="col-6">
                <div class="text-right">
                  <h3 class="text-dark mt-1"><span data-plugin="counterup">
                    <?php   echo $this->db->count_all_results('category');?>
                    </span></h3>
                  <p class="text-muted mb-1 text-truncate">Services</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="widget-rounded-circle card-box">
            <div class="row">
              <div class="col-6">
                <div class="avatar-lg rounded-circle shadow-lg bg-info border-info border"> <i class="fa-blog fa font-22 avatar-title text-white"></i> </div>
              </div>
              <div class="col-6">
                <div class="text-right">
                  <h3 class="text-dark mt-1"><span data-plugin="counterup">
                    <?php   echo $this->db->count_all_results('contact');?>
                    </span></h3>
                  <p class="text-muted mb-1 text-truncate">Enquiry</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
