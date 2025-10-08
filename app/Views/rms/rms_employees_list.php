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
          List
        </h4>
        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
      </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
      <div class="d-flex">
        <div class="breadcrumb">
          <a href="<?= base_url('/dashboard') ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
          <span class="breadcrumb-item active">Employee List</span>
        </div>

        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-xl-3">
        <div class="card">
          <div class="card-header header-elements-inline bg-blue-600">
            <h5 class="card-title font-weight-bolder">RMS</h5>
          </div>
          <div class="card-body py-0">
            <div class="card-header bg-transparent header-elements-inline">
              <a href="<?= base_url('/new_emp_joining') ?>"
                class="text-uppercase font-size-sm font-weight-semibold text-grey-800"><i
                  class="icon-diff-added mr-2 text-pink"></i> New
                Joining</a>
            </div>
            <div class="card-header bg-transparent header-elements-inline">
              <a href="<?= base_url('/incomp_employeeslist') ?>"
                class="text-uppercase font-size-sm font-weight-semibold text-grey-800"><i
                  class="icon-diff-added mr-2 text-pink"></i>In-compeleted Employee List
              </a>
            </div>
            <div class="card-header bg-transparent header-elements-inline">
              <a href="<?= base_url('/employeeslist') ?>"
                class="text-uppercase font-size-sm font-weight-semibold text-grey-800 active"><i
                  class="icon-diff-added mr-2 text-pink"></i> Employees
                List
              </a>
            </div>
            <div class="card-header bg-transparent header-elements-inline">
              <a href="<?= base_url('/department_master') ?>"
                class="text-uppercase font-size-sm font-weight-semibold text-grey-800"><i
                  class="icon-diff-added mr-2 text-pink"></i> Department
                Master</a>
            </div>
            <div class="card-header bg-transparent header-elements-inline">
              <a href="<?= base_url('/designation_master') ?>"
                class="text-uppercase font-size-sm font-weight-semibold text-grey-800"><i
                  class="icon-diff-added mr-2 text-pink"></i>
                Designation Master</a>
            </div>
            <div class="card-header bg-transparent header-elements-inline">
              <a href="<?= base_url('/city_master') ?>"
                class="text-uppercase font-size-sm font-weight-semibold text-grey-800"><i
                  class="icon-diff-added mr-2 text-pink"></i> City
                Master</a>
            </div>
            <div class="card-header bg-transparent header-elements-inline">
              <a href="<?= base_url('/state_master') ?>"
                class="text-uppercase font-size-sm font-weight-semibold text-grey-800"><i
                  class="icon-diff-added mr-2 text-pink"></i> State
                Master</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-9">
        <div class="card-body py-0">
          <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
              <?= session()->getFlashdata('success'); ?>
            </div>
          <?php endif; ?>
          <!-- Rounded solid tabs -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header header-elements-inline bg-blue-600">
                  <h5 class="card-title font-weight-bolder">
                    Employee List
                  </h5>
                </div>
                <div class="card-body">
                  <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper no-footer">
                    <div class="datatable-header">
                      <div id="DataTables_Table_2_filter" class="dataTables_filter">
                        <label><span>Filter:</span>
                          <input type="search" class="" placeholder="Type to filter..."
                            aria-controls="DataTables_Table_2" /></label>
                      </div>
                      <div class="dataTables_length" id="DataTables_Table_2_length">
                        <label><span>Show:</span>
                          <select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2"
                            class="select2-hidden-accessible" data-select2-id="7" tabindex="-1" aria-hidden="true">
                            <option value="10" data-select2-id="9">
                              10
                            </option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select>
                        </label>
                      </div>
                    </div>
                    <div class="datatable-scroll">
                      <table class="table table-bordered table-hover datatable-highlight dataTable no-footer"
                        id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                              colspan="1" aria-sort="ascending" style="width: 10%">
                              Emp Code
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                              style="width: 20%">
                              Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                              style="width: 20%">
                              Father's Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                              style="width: 20%">
                              Date Of Joining
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                              style="width: 20%">
                              Join Department
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (!empty($employees)): ?>
                            <?php $i = 0; ?>
                            <?php foreach ($employees as $emp): ?>
                              <tr role="row" class="<?= ($i % 2 === 0) ? 'even' : 'odd' ?>">
                                <td class="sorting_1">
                                  <a href="<?= base_url('/emp_profile_view') ?>">
                                    <?= esc($emp->personal_info_id) ?>
                                  </a>
                                </td>
                                <td><?= esc($emp->firstname . ' ' . $emp->lastname) ?></td>
                                <td><?= esc($emp->fathername) ?></td>
                                <td><?= date('d-m-Y', strtotime($emp->date_of_joining)) ?></td>
                                <td><?= esc($emp->department) ?></td>
                              </tr>
                              <?php $i++; ?>
                            <?php endforeach; ?>
                          <?php else: ?>
                            <tr>
                              <td colspan="5" class="text-center text-danger">No data found</td>
                            </tr>
                          <?php endif; ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="datatable-footer">
                      <div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">
                        Showing 1 to 10 of 15 entries
                      </div>
                      <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate">
                        <a class="paginate_button previous disabled" aria-controls="DataTables_Table_2" data-dt-idx="0"
                          tabindex="0" id="DataTables_Table_2_previous">←</a><span><a class="paginate_button current"
                            aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0">1</a><a
                            class="paginate_button" aria-controls="DataTables_Table_2" data-dt-idx="2"
                            tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_2"
                          data-dt-idx="3" tabindex="0" id="DataTables_Table_2_next">→</a>
                      </div>
                    </div>
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
<?= $this->endSection() ?>