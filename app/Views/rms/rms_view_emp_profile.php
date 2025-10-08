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
            <!-- <div class="mb-2">
              <h4 class="font-weight-semibold text-success mb-0 mt-1">EMP ID: 20012025141</h4>
            </div> -->
            <div class="mb-2">
              <?php
              $birthYear = date('Y', strtotime($employee['personal']['dob']));
              $doj = date('Y', strtotime($employee['joining'][0]['date_of_joining']));
              $empId = $birthYear . $doj . $employee['personal']['personal_info_id'];
              ?>
              <h4 class="font-weight-semibold text-success mb-0 mt-1">
                EMP ID: <?= $empId ?>
              </h4>
            </div>
            <div class="py-1 table-striped">
              <!-- Full Name -->
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Full name:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0 text-capitalize">
                  <?= esc($employee['personal']['firstname'] . ' ' . $employee['personal']['lastname']) ?>
                </div>
              </div>
              <!-- Father's Name -->
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Father's name:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0 text-capitalize">
                  <?= esc($employee['personal']['fathername'] ?? '-') ?>
                </div>
              </div>
              <!-- Mother's Name -->
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Mother's name:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0 text-capitalize">
                  <?= esc($employee['personal']['mothername'] ?? '-') ?>
                </div>
              </div>
              <!-- Marital Status -->
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Marital Status:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0 text-capitalize">
                  <?= esc($employee['personal']['martialstatus'] ?? '-') ?>
                </div>
              </div>
              <!-- Date of Birth -->
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Date of Birth:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">
                  <?= date('d-m-Y', strtotime($employee['personal']['dob'])) ?>
                </div>
              </div>
              <!-- Mobile No -->
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Mobile No:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">
                  <?= esc($employee['personal']['mobile_no']) ?>
                </div>
              </div>
              <!-- Email -->
              <div class="d-sm-flex flex-sm-wrap mb-3 mr-3 ml-3">
                <div class="font-weight-semibold"><b>Email:</b></div>
                <div class="ml-sm-auto mt-2 mt-sm-0">
                  <?= esc($employee['personal']['email']) ?>
                </div>
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
                      <a href="javascript::void(0);" data-toggle="modal" data-target="#modal_default"
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
                            <td>
                              <div class="text-capitalize"><?= esc($employee['identity'][0]['aadhar'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>PAN Number</b></th>
                            <td>
                              <div class="text-capitalize"><?= esc($employee['identity'][0]['panno'] ?? '-NA-') ?></div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>Voter ID</b></th>
                            <td>
                              <div class="text-capitalize"><?= esc($employee['identity'][0]['voterid'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>Passport</b></th>
                            <td>
                              <div class="text-capitalize"><?= esc($employee['identity'][0]['passport'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>Any Other</b></th>
                            <td>
                              <div class="text-capitalize"><?= esc($employee['identity'][0]['other'] ?? '-NA-') ?></div>
                            </td>
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
                              <div class="text-capitalize">
                                <?= esc($employee['address'][0]['permanent_address'] ?? '-NA-') ?>,
                                <?= esc($employee['address'][0]['permanent_district'] ?? '') ?>,
                                <?= esc($employee['address'][0]['permanent_state'] ?? '') ?>,
                                <?= esc($employee['address'][0]['permanent_pin'] ?? '') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>Present Address</b></th>
                            <td>
                              <div class="text-capitalize">
                                <?= esc($employee['address'][0]['present_address'] ?? '-NA-') ?>,
                                <?= esc($employee['address'][0]['present_district'] ?? '') ?>,
                                <?= esc($employee['address'][0]['present_state'] ?? '') ?>,
                                <?= esc($employee['address'][0]['present_pin'] ?? '') ?>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <!-- family details -->
                      <?php
                      $father = null;
                      $mother = null;
                      $spouse = null;
                      $nomineeRelation = '';
                      $children = [];
                      foreach ($employee['family'] as $member) {
                        $relation = $member['relation'];        // Original case
                        $relationLower = strtolower($relation); // Lowercase for checks
                        // Assign parents/spouse
                        if (in_array($relation, ['Father', 'Mother', 'Spouse'])) {
                          if ($relation === 'Father')
                            $father = $member;
                          if ($relation === 'Mother')
                            $mother = $member;
                          if ($employee['personal']['martialstatus'] == 'Married') {
                            $spouse = $member;
                          }
                          // else {
                          //   print_r('sfasjk'); still is not perfect 
                          // }
                          // if ($relation === 'Spouse')
                          //   $spouse = $member;
                          // Check if nominee (handle boolean or int 1, 't' etc.)
                          if (!empty($member['is_nominee']) && ($member['is_nominee'] === true || $member['is_nominee'] == 1 || $member['is_nominee'] === 't')) {
                            $nomineeRelation = strtolower($relation); // Store in lowercase for consistent comparison
                          }
                        }
                        // Collect children (son or daughter, case-insensitive)
                        elseif (in_array($relationLower, ['son', 'daughter'])) {
                          $children[] = $member;
                        }
                      }
                      ?>
                      <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered table-hover">
                          <tr>
                            <th class="text-danger-700" colspan="4">Family Details</th>
                          </tr>
                          <tr>
                            <th colspan="3"><b>Father's Name</b></th>
                            <td>
                              <?= esc($father['name'] ?? '') ?>
                              <?= $nomineeRelation === 'father' ? '<strong>(Nominee)</strong>' : '' ?>
                            </td>
                          </tr>
                          <tr>
                            <th colspan="3"><b>Mother's Name</b></th>
                            <td>
                              <?= esc($mother['name'] ?? '') ?>
                              <?= $nomineeRelation === 'mother' ? '<strong>(Nominee)</strong>' : '' ?>
                            </td>
                          </tr>
                          <!-- <tr>
                            <th colspan="3"><b>Spouse Name</b></th>
                            <td>
                              <?//= esc($spouse['name'] ?? '') ?>
                              <?//= $nomineeRelation === 'spouse' ? '<strong>(Nominee)</strong>' : '' ?>
                            </td>
                          </tr> -->
                          <?php if (!empty($spouse['name'])): ?>
                            <tr>
                              <th colspan="3"><b>Spouse Name</b></th>
                              <td>
                                <?= esc($spouse['name']) ?>
                                <?= $nomineeRelation === 'spouse' ? '<strong>(Nominee)</strong>' : '' ?>
                              </td>
                            </tr>
                          <?php endif; ?>

                          <tr>
                            <th colspan="4" class="text-center"><b>Children Details</b></th>
                          </tr>
                          <tr>
                            <th><b>Name</b></th>
                            <th><b>Age</b></th>
                            <th><b>Relation</b></th>
                            <th><b>DOB</b></th>
                          </tr>

                          <?php if (!empty($children)): ?>
                            <?php foreach ($children as $child): ?>
                              <tr>
                                <td><?= esc($child['name']) ?></td>
                                <td>
                                  <?php
                                  if (!empty($child['dob'])) {
                                    $dob = new DateTime($child['dob']);
                                    $age = (new DateTime())->diff($dob)->y;
                                    echo $age;
                                  } else {
                                    echo 'N/A';
                                  }
                                  ?>
                                </td>
                                <td><?= esc($child['relation']) ?></td>
                                <td><?= !empty($child['dob']) ? date('d-m-Y', strtotime($child['dob'])) : 'N/A' ?></td>
                              </tr>
                            <?php endforeach; ?>
                          <?php else: ?>
                            <tr>
                              <td colspan="4" class="text-center">No children details available.</td>
                            </tr>
                          <?php endif; ?>
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
                            <td>
                              <div class="text-capitalize"><?= esc($employee['joining'][0]['department'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>Designation Name</b></th>
                            <td>
                              <div class="text-capitalize"><?= esc($employee['joining'][0]['designation'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>Date of Joining</b></th>
                            <td>
                              <div class="text-capitalize">
                                <?php
                                $doj = $employee['joining'][0]['date_of_joining'] ?? null;
                                echo !empty($doj) ? esc(date('d-m-Y', strtotime($doj))) : '-NA-';
                                ?>
                                <!-- 25-08-2025 -->
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>District and State</b></th>
                            <td>
                              <div class="text-capitalize">
                                <?= esc($employee['joining'][0]['district'] . ', ' . $employee['joining'][0]['state'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                      <!-- qual details -->
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                          <tr>
                            <th class="text-danger-700" colspan="3">Qualification Details</th>
                          </tr>
                          <tr>
                            <th style="width: 35%" class="text-dark-800"><b>Education Qualification</b></th>
                            <th><b>Board/University</b></th>
                            <th><b>Passing Year</b></th>
                          </tr>
                          <?php if (!empty($employee['qualifications'])): ?>
                            <?php foreach ($employee['qualifications'] as $qualification): ?>
                              <tr>
                                <td>
                                  <div class="text-uppercase"><?= esc($qualification['qualification_level']) ?></div>
                                </td>
                                <td>
                                  <div class="text-uppercase"><?= esc($qualification['board_university']) ?></div>
                                </td>
                                <!-- <td><?//= esc($qualification['passing_year']) ?></td> -->
                                <td><?= date('d-m-Y', strtotime(esc($qualification['passing_year']))) ?></td>
                              </tr>
                            <?php endforeach; ?>
                          <?php else: ?>
                            <tr>
                              <td colspan="3">No qualification details found.</td>
                            </tr>
                          <?php endif; ?>
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
                            <td>
                              <div class="text-capitalize"><?= esc($employee['accounts'][0]['bank_name'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>Bank A/C No.</b></th>
                            <td>
                              <div class="text-capitalize">
                                <?= esc($employee['accounts'][0]['bank_account_no'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>IFSC Code</b></th>
                            <td>
                              <div class="text-capitalize"><?= esc($employee['accounts'][0]['bank_ifsc'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>Branch Name</b></th>
                            <td>
                              <div class="text-capitalize"><?= esc($employee['accounts'][0]['branch_name'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <!-- emergency contact details -->
                      <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered table-hover" id="emergencyTable">
                          <thead>
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
                          </thead>
                          <tbody>
                            <?php if (!empty($employee['emergency'])): ?>
                              <?php foreach ($employee['emergency'] as $contact): ?>
                                <tr>
                                  <td><?= esc($contact['name']) ?></td>
                                  <td><?= esc($contact['relation']) ?></td>
                                  <td><?= esc($contact['contact_no']) ?></td>
                                </tr>
                              <?php endforeach; ?>
                            <?php else: ?>
                              <tr>
                                <td colspan="3">No emergency contacts found.</td>
                              </tr>
                            <?php endif; ?>
                          </tbody>
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
                            <td>
                              <div class="text-capitalize"><?= esc($employee['compliance'][0]['esic_no'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>UAN No.</b></th>
                            <td>
                              <div class="text-capitalize"><?= esc($employee['compliance'][0]['uan_no'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>Medical Claim Card No.</b></th>
                            <td>
                              <div class="text-capitalize">
                                <?= esc($employee['compliance'][0]['medical_card_no'] ?? '-NA-') ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th><b>Any Other</b></th>
                            <td>
                              <div class="text-capitalize"><?= esc($employee['compliance'][0]['any_other'] ?? '-NA-') ?>
                              </div>
                            </td>
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
  </div>
</div>



<!-- /content-wrapper -->
<?= $this->endSection() ?>