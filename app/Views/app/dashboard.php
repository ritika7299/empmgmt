<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4>
                <i class="icon-arrow-left52 mr-2"></i>
                <span class="font-weight-semibold">Home</span> - Dashboard
            </h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="javascript::void(0);" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                    Home</a>
                <span class="breadcrumb-item active">Dashboard</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Welcome to the Dashboard</h5>
                   
                </div>
                <div class="card-body">
                    <div class="mb-3">                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>