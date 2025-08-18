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
      <div class="col-md-3">
        <div class="card">
          <div class="card-header header-elements-inline bg-blue-600">
            <h5 class="card-title font-weight-bolder">
              Employee Details
            </h5>
          </div>
          <div class="card-body text-center">
            <a href="#" class="d-inline-block mb-1">
              <img src="<?= base_url('public/assets/global_assets/images/user_male.jpg') ?>" class="rounded-round"
                width="150" height="150" alt="" />
            </a>
            <!-- <a href="#" class="d-inline-block mb-1">
                    <img
                      src="../../../../global_assets/images/placeholders/user_female.jpg"
                      class="rounded-round"
                      width="150"
                      height="150"
                      alt=""
                    />
                  </a> -->
            <div class="mb-2">
              <h4 class="font-weight-semibold text-success mb-0 mt-1">EMP ID: 20012025141</h4>
            </div>
            <div class="py-1 table-striped">
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3 ">
                <div class="font-weight-semibold"><b>Full name:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">Hanna Dorman</div>
              </div>
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Father's name:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">Joe Dorman</div>
              </div>
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Mother's name:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">Sofie Dorman</div>
              </div>
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Martial Status:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">Unmarried</div>
              </div>
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Spouse's name:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">-NA-</div>
              </div>
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Date of Birth:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">05-05-2000</div>
              </div>
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Mobile No:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">
                  +91 6666666666
                </div>
              </div>
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Email:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">abc@gmail.com</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card-body py-0">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <!-- <div class="card-header header-elements-inline bg-blue-600">
                  <h5 class="card-title font-weight-bolder">
                    Employee All Informations
                  </h5>
                  <div class="">
                    <a href="#" class="btn bg-white btn-sm float-right">
                      Edit</a>
                    <a href="#" class="btn bg-white btn-sm float-right ml-2">
                      Exits</a>
                  </div>
                </div> -->
                <div class="card-header bg-blue-600 header-elements-inline"
                  style="padding-top: 10px; padding-bottom: 10px">
                  <h5 class="card-title">Employee All Informations</h5>
                  <div class="btn-group" style="float: right">
                    <button type="button" class="btn bg-slate dropdown-toggle ml-1 legitRipple" data-toggle="dropdown"
                      aria-expanded="false">
                      <i class="icon-cog5 mr-1"></i> Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                      style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(428px, 39px, 0px);">
                      <a href="javascript::void(0);" data-toggle="modal" data-target="#modal_objection"
                        class="dropdown-item"><i class="icon-square-left"></i>Exits</a>
                      <a href="javascript::void(0);" class="dropdown-item"><i class="icon-printer4"></i> Edit
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6 mb-3">
                      <!-- iden details -->
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                          <tr>
                            <th class="text-danger-700" colspan="3">
                              Identification Details
                            </th>
                          </tr>
                          <tr>
                            <th style="width: 30%">
                              <b>Aadhaar Number</b>
                            </th>
                            <td>12121212121</td>
                          </tr>
                          <tr>
                            <th><b>PAN Number</b></th>
                            <td>JNHVR89</td>
                          </tr>
                          <tr>
                            <th><b>Voter ID</b></th>
                            <td>EHNCOY86767</td>
                          </tr>
                          <tr>
                            <th><b>Passport</b></th>
                            <td>UAHARO</td>
                          </tr>
                          <tr>
                            <th><b>Any Other</b></th>
                            <td>-NA-</td>
                          </tr>
                        </table>
                      </div>
                      <!-- add details -->
                      <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered table-hover">
                          <tr>
                            <th class="text-danger-700" colspan="3">
                              Address Details
                            </th>
                          </tr>
                          <tr>
                            <th style="width: 35%">
                              <b>Permanent Address</b>
                            </th>
                            <td>
                              Hno. 85 Ghaziabad, Uttar Pardesh, 201009
                            </td>
                          </tr>
                          <tr>
                            <th><b>Present Address</b></th>
                            <td>
                              Hno. 85 Ghaziabad, Uttar Pardesh, 201009
                            </td>
                          </tr>
                        </table>
                      </div>
                      <!-- family details -->
                      <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered table-hover">
                          <tr>
                            <th class="text-danger-700" colspan="4">
                              Family Details
                            </th>
                          </tr>
                          <tr>
                            <th style="width: 30%" colspan="3">
                              <b>Father's Name</b>
                            </th>
                            <td>ABC Kumar</td>
                          </tr>
                          <tr>
                            <th colspan="3"><b>Mother's Name</b></th>
                            <td>XYZ <strong>Nominee</strong></td>
                          </tr>
                          <tr>
                            <th colspan="3"><b>Spouse Name</b></th>
                            <td>-NA-</td>
                          </tr>
                          <tr>
                            <th colspan="4" class="text-center">
                              <b>Children Details</b>
                            </th>
                          </tr>
                          <tr>
                            <th style="width: 30%"><b>Name</b></th>
                            <th><b>Age</b></th>
                            <th><b>Relation</b></th>
                            <th colspan="3"><b>DOB</b></th>
                          </tr>
                          <tr>
                            <td>Child One</td>
                            <td>5</td>
                            <td>Daughter</td>
                            <td colspan="3">1-2-2020</td>
                          </tr>
                          <tr>
                            <td>Child Two</td>
                            <td>3</td>
                            <td>Son</td>
                            <td colspan="3">1-2-2023</td>
                          </tr>
                        </table>
                      </div>
                      <!-- joining details -->
                      <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered table-hover">
                          <tr>
                            <th class="text-danger-700" colspan="3">
                              Joining Details
                            </th>
                          </tr>
                          <tr>
                            <th style="width: 30%">
                              <b>Department Name</b>
                            </th>
                            <td>dfsf</td>
                          </tr>
                          <tr>
                            <th><b>Designation Name</b></th>
                            <td>daffds</td>
                          </tr>
                          <tr>
                            <th><b>Date of Joining</b></th>
                            <td>dfsf</td>
                          </tr>
                          <tr>
                            <th><b>District and State</b></th>
                            <td>dfsf, UP</td>
                          </tr>
                        </table>
                      </div>
                      <!-- compliance details -->
                      <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered table-hover">
                          <tr>
                            <th class="text-danger-700" colspan="3">
                              Compliance Details
                            </th>
                          </tr>
                          <tr>
                            <th style="width: 30%"><b>ESIC No.</b></th>
                            <td>dfsf</td>
                          </tr>
                          <tr>
                            <th><b>UAN No.</b></th>
                            <td>daffds</td>
                          </tr>
                          <tr>
                            <th><b>Medical Claim Card No.</b></th>
                            <td>dfsf</td>
                          </tr>
                          <tr>
                            <th><b>Any Other</b></th>
                            <td>-NA-</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                      <!-- qual details -->
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                          <tr>
                            <th class="text-danger-700" colspan="3">
                              Qualification Details
                            </th>
                          </tr>
                          <tr>
                            <th style="width: 35%" class="text-dark-800">
                              <b>Matriculation (10th)</b>
                            </th>
                            <th><b>Board/University</b></th>
                            <th><b>Passing Year</b></th>
                          </tr>
                          <tr>
                            <td></td>
                            <td>CBSE</td>
                            <td>2016</td>
                          </tr>
                          <tr>
                            <th style="width: 35%" class="text-dark-800">
                              <b>Intermediate (12th)</b>
                            </th>
                            <th><b>Board/University</b></th>
                            <th><b>Passing Year</b></th>
                          </tr>
                          <tr>
                            <td></td>
                            <td>CBSE</td>
                            <td>2016</td>
                          </tr>
                          <tr>
                            <th style="width: 35%" class="text-dark-800">
                              <b>Graduation</b>
                            </th>
                            <th><b>Board/University</b></th>
                            <th><b>Passing Year</b></th>
                          </tr>
                          <tr>
                            <td></td>
                            <td>IGNOU</td>
                            <td>2016</td>
                          </tr>
                          <tr>
                            <th style="width: 35%" class="text-dark-800">
                              <b>Post Graduation</b>
                            </th>
                            <th><b>Board/University</b></th>
                            <th><b>Passing Year</b></th>
                          </tr>
                          <tr>
                            <td></td>
                            <td>IGNOU</td>
                            <td>2016</td>
                          </tr>
                          <tr>
                            <th style="width: 35%" class="text-dark-800">
                              <b>Certificate Course</b>
                            </th>
                            <th><b>Board/University</b></th>
                            <th><b>Passing Year</b></th>
                          </tr>
                          <tr>
                            <td></td>
                            <td>IGNOU</td>
                            <td>2016</td>
                          </tr>
                        </table>
                      </div>
                      <!-- account details -->
                      <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered table-hover">
                          <tr>
                            <th class="text-danger-700" colspan="2">
                              Account Details
                            </th>
                          </tr>
                          <tr>
                            <th style="width: 40%"><b>Bank Name</b></th>
                            <td>ABC BANK</td>
                          </tr>
                          <tr>
                            <th><b>Bank A/C No.</b></th>
                            <td>1487682365555</td>
                          </tr>
                          <tr>
                            <th><b>IFSC Code</b></th>
                            <td>BHFHK123456</td>
                          </tr>
                          <tr>
                            <th><b>Branch Name</b></th>
                            <td>GZB</td>
                          </tr>
                        </table>
                      </div>
                      <!-- emergency contact details -->
                      <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered table-hover">
                          <tr>
                            <th class="text-danger-700" colspan="4">
                              Emergency Contact Details
                            </th>
                          </tr>
                          <tr>
                            <th><b>Name</b></th>
                            <th><b>Relation</b></th>
                            <th><b>Contact No.</b></th>
                          </tr>
                          <tr>
                            <td>abc</td>
                            <td>Mother</td>
                            <td>9999999999</td>
                          </tr>
                          <tr>
                            <td>abc</td>
                            <td>son</td>
                            <td>9999999999</td>
                          </tr>
                        </table>
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
    <!-- /main charts -->
  </div>
</div>
</div>
<!-- /content-wrapper -->
</div>
</div>
<?= $this->endSection() ?>