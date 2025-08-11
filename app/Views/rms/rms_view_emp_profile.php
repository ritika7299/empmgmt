<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<!-- content-wrapper -->
<div class="content-wrapper">
        <div class="page-header page-header-light">
          <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
              <h4>
                <i class="icon-arrow-left52 mr-2"></i>
                <span class="font-weight-semibold">Dashboard</span> - Employee
                Profile
              </h4>
              <a href="#" class="header-elements-toggle text-default d-md-none"
                ><i class="icon-more"></i
              ></a>
            </div>
          </div>

          <div
            class="breadcrumb-line breadcrumb-line-light header-elements-md-inline"
          >
            <div class="d-flex">
              <div class="breadcrumb">
                <a href="<?= base_url('/dashboard') ?>" class="breadcrumb-item"
                  ><i class="icon-home2 mr-2"></i> Dashboard</a
                >
                <span class="breadcrumb-item active">Employee List</span>
              </div>

              <a href="#" class="header-elements-toggle text-default d-md-none"
                ><i class="icon-more"></i
              ></a>
            </div>
          </div>
        </div>      
        <div class="content">
          <div class="row">
            <div class="col-xl-3">
              <div class="card">
                <div class="card-header header-elements-inline bg-blue-600">
                  <h5 class="card-title font-weight-bolder">Employee Details</h5>
                </div>
                <div class="card-body py-0">
                  <!-- add here content -->                             
                </div>
              </div>
            </div>
            <div class="col-9">
              <div class="card-body py-0">
                <!-- Rounded solid tabs -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div
                        class="card-header header-elements-inline bg-blue-600"
                      >
                        <h5 class="card-title font-weight-bolder">
                          Employee List
                        </h5>
                      </div>
                      <div class="card-body">
                        jfkljflkj
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /rounded solid tabs -->
              </div>
              <!-- /traffic sources -->
            </div>
          </div>
        </div>       
</div>
<!-- /content-wrapper -->
                        </div>
          </div>
      <?= $this->endSection() ?>