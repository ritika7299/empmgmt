<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<!-- content-wrapper -->
     <div class="content-wrapper">       
        <div class="page-header page-header-light">
          <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
              <h4>
                <i class="icon-arrow-left52 mr-2"></i>
                <span class="font-weight-semibold">Dashboard</span> - RMS
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
                  ><i class="icon-home2 mr-2"></i> Dashboard</a>
                <span class="breadcrumb-item active">RMS</span>
              </div>
              <a href="#" class="header-elements-toggle text-default d-md-none"
                ><i class="icon-more"></i>
              </a>
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
                  <div
                    class="card-header bg-transparent header-elements-inline"
                  >
                    <a
                      href="<?= base_url('/new_emp_joining') ?>"
                      class="text-uppercase font-size-sm font-weight-semibold text-grey-800"
                      ><i class="icon-diff-added mr-2 text-pink"></i> New
                      Joining</a
                    >
                  </div>
                  <div
                    class="card-header bg-transparent header-elements-inline"
                  >
                    <a
                      href="<?= base_url('/incomp_employeeslist') ?>"
                      class="text-uppercase font-size-sm font-weight-semibold text-grey-800"
                      ><i class="icon-diff-added mr-2 text-pink"></i>In-compeleted Employee List 
                      </a
                    >
                  </div>
                  <div
                    class="card-header bg-transparent header-elements-inline"
                  >
                    <a
                      href="<?= base_url('/employeeslist') ?>"
                      class="text-uppercase font-size-sm font-weight-semibold text-grey-800 active"
                      ><i class="icon-diff-added mr-2 text-pink"></i> Employees
                      List
                    </a>
                  </div>
                  <div
                    class="card-header bg-transparent header-elements-inline"
                  >
                    <a
                      href="<?= base_url('/department_master') ?>"
                      class="text-uppercase font-size-sm font-weight-semibold text-grey-800"
                      ><i class="icon-diff-added mr-2 text-pink"></i> Department
                      Master</a
                    >
                  </div>
                  <div
                    class="card-header bg-transparent header-elements-inline"
                  >
                    <a
                      href="<?= base_url('/designation_master') ?>"
                      class="text-uppercase font-size-sm font-weight-semibold text-grey-800"
                      ><i class="icon-diff-added mr-2 text-pink"></i>
                      Designation Master</a
                    >
                  </div>
                  <div
                    class="card-header bg-transparent header-elements-inline"
                  >
                    <a
                      href="<?= base_url('/city_master') ?>"
                      class="text-uppercase font-size-sm font-weight-semibold text-grey-800"
                      ><i class="icon-diff-added mr-2 text-pink"></i> City
                      Master</a
                    >
                  </div>
                  <div
                    class="card-header bg-transparent header-elements-inline"
                  >
                    <a
                      href="<?= base_url('/state_master') ?>"
                      class="text-uppercase font-size-sm font-weight-semibold text-grey-800"
                      ><i class="icon-diff-added mr-2 text-pink"></i> State
                      Master</a
                    >
                  </div>
                </div>
              </div>
            </div>
             <div class="col-xl-9">
              <div class="card-body py-0">  
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <ul
                          class="nav nav-tabs nav-tabs-solid rounded border-0"
                          id="formTabs" 
                          role="tablist"
                        >
                          <li class="nav-item">
                            <a
                              href="#solid-rounded-tab1"
                              class="nav-link rounded-left active"
                              data-toggle="tab"
                              >Personal Info</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              href="#solid-rounded-tab2"
                              class="nav-link rounded-left"
                              data-toggle="tab"
                              >Identification Details</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              href="#solid-rounded-tab3"
                              class="nav-link"
                              data-toggle="tab"
                              >Qualification</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              href="#solid-rounded-tab4"
                              class="nav-link"
                              data-toggle="tab"
                              >Address</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              href="#solid-rounded-tab5"
                              class="nav-link"
                              data-toggle="tab"
                              >Family Details</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              href="#solid-rounded-tab6"
                              class="nav-link"
                              data-toggle="tab"
                              >Account Details</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              href="#solid-rounded-tab7"
                              class="nav-link"
                              data-toggle="tab"
                              >Emergency Contact</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              href="#solid-rounded-tab8"
                              class="nav-link"
                              data-toggle="tab"
                              >Joining Details
                            </a>
                          </li>
                          <li class="nav-item">
                            <a
                              href="#solid-rounded-tab9"
                              class="nav-link"
                              data-toggle="tab"
                              >Compliance Details</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              href="#solid-rounded-tab10"
                              class="nav-link"
                              data-toggle="tab"
                              >Upload Document</a
                            >
                          </li>
                        </ul>
                        <div class="tab-content">
                          <div
                            class="tab-pane fade show active"
                            id="solid-rounded-tab1"
                          >                           
                            <div class="card">
                              <div
                                class="card-header header-elements-inline bg-blue-600"
                              >
                                <h5 class="card-title">Personal Information</h5>
                              </div>
                              <div class="card-body">
                                <form class="form-validate-jquery" method="post" action="<?= base_url('/personal_info_save') ?>" id="personal_info">
                                 <fieldset class="mb-3">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >First Name
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="firstname"
                                          id="firstname"
                                          class="form-control"
                                          required
                                          placeholder="Enter First Name"
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Middle Name
                                      </label>
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="middlename"
                                          id="middlename"
                                          class="form-control"
                                          required
                                          placeholder="Enter Middle Name"
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Last Name
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="lastname"
                                          id="lastname"
                                          class="form-control"
                                          required
                                          placeholder="Enter Last Name"
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Father's Name
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="fathername"
                                          id="fathername"
                                          class="form-control"
                                          required
                                          placeholder="Enter Father Name"
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Mother's Name
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="mothername"
                                          id="mothername"
                                          class="form-control"
                                          required
                                          placeholder="Enter Mother Name"
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Marital Status
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <select
                                          name="martialstatus"
                                          data-placeholder="Select Martial Status"
                                          class="form-control form-control-select2 select2-hidden-accessible"
                                          required
                                          id="martialstatus"
                                          data-fouc=""
                                          data-select2-id="1"
                                          tabindex="-1"
                                          aria-hidden="true"
                                          aria-invalid="false"
                                        >
                                          <option data-select2-id="3">
                                            Select
                                          </option>
                                          <option value="Unmarried">Unmarried</option>
                                          <option value="Married">Married</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-lg-3 col-form-label"
                                        >Gender
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <div
                                          class="form-check form-check-inline"
                                        >
                                          <label class="form-check-label">
                                            <input
                                              type="radio"
                                              name="gender"
                                              value="1"
                                              class="form-input-styled"
                                              id="male"
                                              required
                                              data-fouc
                                            />
                                            Male
                                          </label>
                                        </div>
                                        <div
                                          class="form-check form-check-inline"
                                        >
                                          <label class="form-check-label">
                                            <input
                                              type="radio"
                                              id="female"
                                              name="gender"
                                              value="2"
                                              class="form-input-styled"
                                              data-fouc
                                            />
                                            Female
                                          </label>
                                        </div>
                                        <div
                                          class="form-check form-check-inline"
                                        >
                                          <label class="form-check-label">
                                            <input
                                              type="radio"
                                              id="others"
                                              name="gender"
                                              value="3"
                                              class="form-input-styled"
                                              data-fouc
                                            />
                                            Others
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Date of Birth
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <div class="input-group">
                                          <!-- <span class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="icon-calendar"></i>
                                            </span>
                                          </span> -->
                                          <input
                                            type="date"
                                            class="form-control datepicker hasDatepicker"
                                            placeholder="dd/mm/yyyy"
                                            name="dob"
                                            id="dob"
                                            
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Mobile Number
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="mobile_no"
                                          class="form-control"
                                          id="mobile_no"
                                          maxlength="10"
                                          required
                                          placeholder="Enter Mobile number....."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Alternative Mobile Number
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="altmobile"
                                          id="mobile_no_alt"
                                          class="form-control"
                                          maxlength="10"
                                          required
                                          placeholder="Enter Alternative Mobile number....."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Email
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="email"
                                          name="email"
                                          class="form-control"
                                          id="email"
                                          required=""
                                          placeholder="Enter a valid email address"
                                          aria-invalid="false"
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Religion
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <select
                                          name="religion"
                                          data-placeholder="Select a Religion..."
                                          class="form-control form-control-select2 select2-hidden-accessible"
                                          required
                                          data-fouc=""
                                          id="religion"
                                          data-select2-id="1"
                                          tabindex="-1"
                                          aria-hidden="true"
                                          aria-invalid="false"
                                        >
                                          <option data-select2-id="3">
                                            Select
                                          </option>
                                          <option
                                            value="hindu"
                                            data-select2-id="11"
                                          >
                                            Hindu
                                          </option>
                                          <option
                                            value="muslim"
                                            data-select2-id="11"
                                          >
                                            Muslim
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                  </fieldset>
                                  <div
                                    class="d-flex justify-content-end align-items-center"
                                  >
                                    <!-- <button
                                      type="reset"
                                      class="btn btn-light"
                                      id="reset"
                                    >
                                      Reset <i class="icon-reload-alt ml-2"></i>
                                    </button> -->
                                    <button
                                      type="submit"
                                      class="btn btn-primary ml-3"
                                    >
                                      Next
                                      <i class="icon-paperplane ml-2"></i>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                           </div>
                          <div class="tab-pane fade" id="solid-rounded-tab2">
                            <div class="card">
                              <div
                                class="card-header header-elements-inline bg-blue-600"
                              >
                                <h5 class="card-title">
                                  Identification Details
                                </h5>
                              </div>
                              <div class="card-body">
                                <form class="form-validate-jquery" method="post" action="<?= base_url('/identification_details_save') ?>" id="identification_details">
                                   <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                      >Aadhaar Number
                                      <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                      <input
                                        type="text"
                                        name="aadhar"
                                        maxlength="16"
                                        class="form-control"
                                        id="aadhar"
                                        required
                                        placeholder="Enter a Aadhaar Number"
                                      />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                      >PAN Number
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-9">
                                      <input
                                        type="text"
                                        name="panno"
                                        maxlength="16"
                                        class="form-control"
                                        id="panno"
                                        required
                                        placeholder="Enter a PAN Number"
                                      />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                      >Voter ID
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-9">
                                      <input
                                        type="text"
                                        name="voterid"
                                        maxlength="16"
                                        class="form-control"
                                        id="voterid"
                                        required
                                        placeholder="Enter a Voter ID Number"
                                      />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                      >Passport
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-9">
                                      <input
                                        type="text"
                                        name="passport"
                                        maxlength="16"
                                        class="form-control"
                                        id="passport"
                                        required
                                        placeholder="Enter a Passport Number"
                                      />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                      >Any Other
                                    </label>
                                    <div class="col-lg-9">
                                      <input
                                        type="text"
                                        name="other"
                                        maxlength="16"
                                        class="form-control"
                                        id="other"
                                        required
                                        placeholder="Enter a Others"
                                      />
                                    </div>
                                  </div>
                                  <div
                                    class="d-flex justify-content-end align-items-center"
                                  >
                                    <!-- <button
                                      type="reset"
                                      class="btn btn-light"
                                      id="reset"
                                    >
                                      Reset <i class="icon-reload-alt ml-2"></i>
                                    </button> -->
                                    <button
                                      type="submit"
                                      class="btn btn-primary ml-3"
                                    >
                                      Next
                                      <i class="icon-paperplane ml-2"></i>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="solid-rounded-tab3">
                            <!-- qualification info-->
                            <div class="card">
                              <div
                                class="card-header header-elements-inline bg-blue-600"
                              >
                                <h5 class="card-title">
                                  Qualification Information
                                </h5>
                              </div>
                              <div class="card-body">
                                <form class="form-validate-jquery" method="post" action="<?= base_url('/qualification_details_save') ?>" id="qualification_info">
                                <fieldset class="mb-3">
                                    <legend
                                      class="text-uppercase font-size-sm font-weight-bold"
                                    >
                                      Matriculation (10th)
                                    </legend>
                                    <!-- <input type="text" name="qualification_level[]" value="10th"> -->
                                     <!-- For 10th -->
                                        <input type="hidden" name="qualification_level[]" value="10th">

                                        <!-- For 12th -->
                                        <input type="hidden" name="qualification_level[]" value="12th">

                                        <!-- For Graduation -->
                                        <input type="hidden" name="qualification_level[]" value="Graduation">

                                        <!-- For Post-Graduation -->
                                        <input type="hidden" name="qualification_level[]" value="Post-Graduation">

                                        <!-- For Certificate -->
                                        <input type="hidden" name="qualification_level[]" value="Certificate">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >School/Collage
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="institute_name[]"
                                          class="form-control"
                                          value=""
                                          required
                                          placeholder="Enter School/Collage name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Board/University
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="board_university[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Board/University name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Subjects
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="subjects[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Subjects...."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Passing Year
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <div class="input-group">
                                          <!-- <span class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="icon-calendar"></i>
                                            </span>
                                          </span> -->
                                          <input
                                            type="date"
                                            class="form-control datepicker hasDatepicker"
                                            placeholder="Pick a date…"
                                            name="passing_year[]"
                                            required
                                            id="datepick"
                                          />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Marks Obtain
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="marks_obtained[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Marks Obtain...."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Total Marks
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="total_marks[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Total Marks...."
                                        />
                                      </div>
                                    </div>
                                  </fieldset>
                                  <fieldset class="mb-3">
                                    <legend
                                      class="text-uppercase font-size-sm font-weight-bold"
                                    >
                                      Intermediate (12th)
                                    </legend>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >School/Collage
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="institute_name[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter School/Collage name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Board/University
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="board_university[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Board/University name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Subjects
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="subjects[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Subjects...."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Passing Year
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <div class="input-group">
                                          <!-- <span class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="icon-calendar"></i>
                                            </span>
                                          </span> -->
                                          <input
                                            type="date"
                                            class="form-control datepicker hasDatepicker"
                                            placeholder="Pick a date…"
                                            name="passing_year[]"
                                            id="datepick"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Marks Obtain
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="marks_obtained[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Marks Obtain...."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Total Marks
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="total_marks[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Total Marks...."
                                        />
                                      </div>
                                    </div>
                                  </fieldset>
                                  <fieldset class="mb-3">
                                    <legend
                                      class="text-uppercase font-size-sm font-weight-bold"
                                    >
                                      Graduation
                                    </legend>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >School/Collage
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="institute_name[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter School/Collage name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Board/University
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="board_university[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Board/University name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Subjects
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="subjects[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Subjects...."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Passing Year
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <div class="input-group">
                                          <!-- <span class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="icon-calendar"></i>
                                            </span>
                                          </span> -->
                                          <input
                                            type="date"
                                            class="form-control datepicker hasDatepicker"
                                            placeholder="Pick a date…"
                                            name="passing_year[]"
                                            required
                                            id="datepick"
                                          />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Marks Obtain
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="marks_obtained[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Marks Obtain...."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Total Marks
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="total_marks[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Total Marks...."
                                        />
                                      </div>
                                    </div>
                                  </fieldset>
                                  <fieldset class="mb-3">
                                    <legend
                                      class="text-uppercase font-size-sm font-weight-bold"
                                    >
                                      Post Graduation
                                    </legend>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >School/Collage
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="institute_name[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter School/Collage name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Board/University
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="board_university[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Board/University name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Subjects
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="subjects[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Subjects...."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Passing Year
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <div class="input-group">
                                          <!-- <span class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="icon-calendar"></i>
                                            </span>
                                          </span> -->
                                          <input
                                            type="date"
                                            class="form-control datepicker hasDatepicker"
                                            placeholder="Pick a date…"
                                            name="passing_year[]"
                                            required
                                            id="datepick"
                                          />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Marks Obtain
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="marks_obtained[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Marks Obtain...."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Total Marks
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="total_marks[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Total Marks...."
                                        />
                                      </div>
                                    </div>
                                  </fieldset>
                                  <fieldset class="mb-3">
                                    <legend
                                      class="text-uppercase font-size-sm font-weight-bold"
                                    >
                                      Certificate Course
                                    </legend>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >School/Collage
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="institute_name[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter School/Collage name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Board/University
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="board_university[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Board/University name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Subjects
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="subjects[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Subjects...."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Passing Year
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <div class="input-group">
                                          <!-- <span class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="icon-calendar"></i>
                                            </span>
                                          </span> -->
                                          <input
                                            type="date"
                                            class="form-control datepicker hasDatepicker"
                                            placeholder="Pick a date…"
                                            name="passing_year[]"
                                            required
                                            id="datepick"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Marks Obtain
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="marks_obtained[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Marks Obtain...."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Total Marks
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="total_marks[]"
                                          class="form-control"
                                          required
                                          placeholder="Enter Total Marks...."
                                        />
                                      </div>
                                    </div>
                                  </fieldset>
                                  <div
                                    class="d-flex justify-content-end align-items-center"
                                  >
                                    <!-- <button
                                      type="reset"
                                      class="btn btn-light"
                                      id="reset"
                                    >
                                      Reset <i class="icon-reload-alt ml-2"></i>
                                    </button> -->
                                    <button
                                      type="submit"
                                      class="btn btn-primary ml-3"
                                    >
                                      Next
                                      <i class="icon-paperplane ml-2"></i>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <!-- /qualification info -->
                          </div>
                          <div class="tab-pane fade" id="solid-rounded-tab4">
                            <div class="card">
                              <div
                                class="card-header header-elements-inline bg-blue-600"
                              >
                                <h5 class="card-title">Address</h5>
                              </div>
                              <div class="card-body">
                                <form class="form-validate-jquery" method="post" action="<?= base_url('/address_details_save') ?>" id="address_info">
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-3 text-gray-900"
                                      >Permanent Address
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-9">
                                      <input
                                        type="text"
                                        name="permanent_address"
                                        class="form-control"
                                        required
                                        id="permanent_address"
                                        placeholder="Enter Permanent Address...."
                                      />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                      >State
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-9">
                                      <select
                                        name="permanent_state"
                                        data-placeholder="Select States"
                                        class="form-control form-control-select2 select2-hidden-accessible"
                                        required   
                                        id="permanent_state"                                
                                        >
                                        <option>
                                          Select
                                        </option>
                                        <option value="delhi">Delhi</option>
                                        <option value="uttarpardesh">
                                          Uttar Pardesh
                                        </option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                      >District/City
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-3">
                                      <select
                                       name="permanent_district"
                                        data-placeholder="Select States"
                                        class="form-control form-control-select2 select2-hidden-accessible"
                                        required      
                                         id="permanent_district"                            
                                        >
                                        <option>
                                          Select
                                        </option>
                                        <option value="westdelhi">West Delhi</option>
                                        <option value="centraldelhi">
                                          Central Delhi
                                        </option>
                                      </select>
                                    </div>
                                    <label class="col-form-label col-lg-3"
                                      >PIN Code
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-3">
                                      <input
                                        type="text"
                                        name="permanent_pin"
                                        maxlength="6"
                                        id="permanent_pin"
                                        class="form-control"
                                        required
                                        placeholder="Enter PIN"
                                      />
                                    </div>
                                  </div>

                                <div class="form-group row">
                                    <div class="form-check ml-2">
                                        <label class="form-check-label">
                                        <input
                                        type="checkbox"
                                        class="form-check-input-styled"
                                         name="same_as_permanent"
                                         value="1"
                                        id="same_address" onclick="copyAddress()"
                                        />
                                        Same as Permanent Address
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 text-gray-900"
                                      >Present Address
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-9">
                                      <input
                                        type="text"
                                        id="present_address"
                                        name="present_address"
                                        class="form-control"
                                        required
                                        placeholder="Enter Present Address...."
                                      />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                      >State
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-9">
                                      <select
                                        name="present_state"
                                        data-placeholder="Select State"
                                        class="form-control form-control-select2 select2-hidden-accessible"
                                        id="present_state"
                                        required
                                        >
                                        <option>
                                          Select
                                        </option>
                                        <option value="delhi">Delhi</option>
                                        <option value="uttarpardesh">
                                          Uttar Pardesh
                                        </option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                      >District/City
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-3">
                                      <select
                                       name="present_district"
                                        data-placeholder="Select District/City"
                                        class="form-control form-control-select2 select2-hidden-accessible"
                                        required
                                        id="present_district"
                                        >
                                        <option>
                                          Select
                                        </option>
                                        <option value="westdelhi">West Delhi</option>
                                        <option value="centraldelhi">
                                          Central Delhi
                                        </option>
                                      </select>
                                    </div>
                                    <label class="col-form-label col-lg-3"
                                      >PIN Code
                                      <span class="text-danger">*</span></label
                                    >
                                    <div class="col-lg-3">
                                      <input
                                        type="text"
                                        name="present_pin"
                                        id="present_pin"
                                        maxlength="6"
                                        class="form-control"
                                        required
                                        placeholder="Enter PIN"
                                      />
                                    </div>
                                  </div>
                                  <div
                                    class="d-flex justify-content-end align-items-center"
                                  >
                                    <!-- <button
                                      type="reset"
                                      class="btn btn-light"
                                      id="reset"
                                    >
                                      Reset <i class="icon-reload-alt ml-2"></i>
                                    </button> -->
                                    <button
                                      type="submit"
                                      class="btn btn-primary ml-3"
                                    >
                                      Next
                                      <i class="icon-paperplane ml-2"></i>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                            </div>
                          <div class="tab-pane fade" id="solid-rounded-tab5">
                                <div class="card">
                              <div
                                class="card-header header-elements-inline bg-blue-600"
                              >
                                <h5 class="card-title">Family Details</h5>
                              </div>
                              <div class="card-body">
                                <form class="form-validate-jquery" method="post" action="<?= base_url('/family_details_save') ?>" id="family_info">
                                  <fieldset class="mb-3">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Father's Name
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9 d-flex">
                                        <input
                                          type="text"
                                          name="fathername"
                                          class="form-control"
                                          required
                                          placeholder="Enter Father Name"
                                        />
                                        <div
                                          class="form-check form-check-inline ml-5 col-md-2"
                                        >
                                          <label class="form-check-label">
                                            <input
                                              type="checkbox"
                                              name="styled_inline_radio"
                                              class="form-check-input nominee-checkbox"
                                              id="is_nominee"
                                              name="is_nominee[father]"
                                              value="true"
                                              required
                                             />
                                            Is Nominee
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Mother's Name
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9 d-flex">
                                        <input
                                          type="text"
                                          name="mothername"
                                          class="form-control"
                                          required
                                          placeholder="Enter Mother Name"
                                        />
                                        <div
                                          class="form-check form-check-inline ml-5 col-md-2"
                                        >
                                          <label class="form-check-label">
                                            <input
                                              type="checkbox"
                                              name="styled_inline_radio"
                                              class="form-check-input nominee-checkbox"
                                              id="is_nominee"
                                              name="is_nominee[mother]"
                                              value="true"
                                              required
                                             
                                            />
                                            Is Nominee
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Spouse Name
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9 d-flex">
                                        <input
                                          type="text"
                                          name="spousename"
                                          class="form-control"
                                          required
                                          placeholder="Enter Spouse Name"
                                        />
                                        <div
                                          class="form-check form-check-inline ml-5 col-md-2"
                                        >
                                          <label class="form-check-label">
                                            <input
                                              type="checkbox"
                                              name="styled_inline_radio"
                                              class="form-check-input nominee-checkbox"
                                              id="is_nominee"
                                              name="is_nominee[father]"
                                              value="true"
                                              required
                                             
                                            />
                                            Is Nominee
                                          </label>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >children
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <div class="table-responsive">
                                          <table
                                            class="table table-bordered"
                                            id="familyTable"
                                          >
                                            <thead>
                                              <tr>
                                                <th style="width: 30%">Name</th>
                                                <th style="width: 30%">
                                                  Relation
                                                </th>
                                                <th style="width: 30%">
                                                  Date of Birth
                                                </th>
                                                <th style="width: 10%">#</th>
                                              </tr>
                                            </thead>
                                            <tbody id="tableBody">
                                              <tr>
                                                <td>
                                                  <input
                                                    type="text"
                                                    name="children_name[]"
                                                    class="form-control"
                                                    required
                                                    placeholder="Enter Name "
                                                  />
                                                </td>
                                                <td>
                                                  <input
                                                    type="text"
                                                    name="children_relation[]"
                                                    class="form-control"
                                                    required
                                                    placeholder="Enter Relation "
                                                  />
                                                </td>
                                                <td>
                                                  <input
                                                    type="date"
                                                    name="children_dob[]"
                                                    class="form-control"
                                                    required
                                                    placeholder="DD/MM/YYYY"
                                                  />
                                                </td>
                                                <td>
                                                  <div class="d-flex">
                                                    <button
                                                      type="button"
                                                      class="btn btn-danger mr-2 delete-btn"
                                                      onclick="deleteRow(this)"
                                                      disabled
                                                    >
                                                      <i class="icon-trash-alt fa-2x"></i>
                                                    </button>
                                                    <br />
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <div class="float-right mt-2"> 
                                            <button
                                              type="button"
                                              class="btn btn-success"
                                              onclick="addRow()">
                                            <i class="icon-plus-circle2 fa-2x"></i>
                                            </button>
                                          </div>                                          
                                        </div>
                                      </div>
                                    </div>
                                  </fieldset>
                                  <div
                                    class="d-flex justify-content-end align-items-center"
                                  >
                                    <!-- <button
                                      type="reset"
                                      class="btn btn-light"
                                      id="reset"
                                    >
                                      Reset <i class="icon-reload-alt ml-2"></i>
                                    </button> -->
                                    <button
                                      type="submit"
                                      class="btn btn-primary ml-3"
                                    >
                                      Next
                                      <i class="icon-paperplane ml-2"></i>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="solid-rounded-tab6">
                            <div class="card">
                              <div
                                class="card-header header-elements-inline bg-blue-600"
                              >
                                <h5 class="card-title">Accounts Details</h5>
                              </div>
                              <div class="card-body">
                                <form class="form-validate-jquery" method="post" action="<?= base_url('/accounts_details_save') ?>" id="accounts_info">
                                  <fieldset class="mb-3">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Bank Name
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="bank_name"
                                          id="bank_name"
                                          class="form-control"
                                          required
                                          placeholder="Enter Bank name...."
                                        />
                                      </div>
                                    </div>
                                     <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Bank Address
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="bank_address"
                                          id="bank_address"
                                          class="form-control"
                                          required
                                          placeholder="Enter Bank Address...."
                                        />
                                      </div>
                                    </div>
                                     <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Branch Name
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="branch_name"
                                          id="branch_name"
                                          class="form-control"
                                          required
                                          placeholder="Enter Branch Name...."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Bank Account No.
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="bank_account_no"
                                          id="bank_account_no"
                                          class="form-control"
                                          maxlength="16"
                                          required
                                          placeholder="Enter Bank Account no."
                                        />
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >IFSC Code
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <input
                                          type="text"
                                          name="bank_ifsc"
                                          maxlength="16"
                                          class="form-control"
                                          required
                                          placeholder="Enter IFSC Code"
                                        />
                                      </div>
                                    </div>
                                  </fieldset>
                                  <div
                                    class="d-flex justify-content-end align-items-center"
                                  ><button
                                      type="submit"
                                      class="btn btn-primary ml-3"
                                    >
                                      Next
                                      <i class="icon-paperplane ml-2"></i>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                        </div>
                          <div class="tab-pane fade" id="solid-rounded-tab7">
                             <div class="card">
                              <div
                                class="card-header header-elements-inline bg-blue-600"
                              >
                                <h5 class="card-title">Emergency Contact</h5>
                              </div>
                              <div class="card-body">
                                <form class="form-validate-jquery" method="post" action="<?= base_url('/emergency_details_save') ?>" id="emergency_info">
                                  <fieldset class="mb-3">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Contact
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <div class="table-responsive">
                                          <table
                                            class="table table-bordered"
                                            id="contactTable"
                                          >
                                            <thead>
                                              <tr>
                                                <th style="width: 30%">Name</th>
                                                <th style="width: 30%">
                                                  Relation
                                                </th>
                                                <th style="width: 30%">
                                                  Contact No.
                                                </th>
                                                <th style="width: 10%">#</th>
                                              </tr>
                                            </thead>
                                            <tbody id="tableBody1">
                                              <tr>
                                                <td>
                                                  <input
                                                    type="text"
                                                    name="name[]"
                                                    id="name"
                                                    class="form-control"
                                                    required
                                                    placeholder="Enter Name"
                                                  />
                                                </td>
                                                <td>
                                                  <input
                                                    type="text"
                                                    name="relation[]"
                                                    id="relation"
                                                    class="form-control"
                                                    required
                                                    placeholder="Enter Relation"
                                                  />
                                                </td>
                                                <td>
                                                  <input
                                                    type="text"
                                                    name="contact_no[]"
                                                    id="contact_no"
                                                    class="form-control"
                                                    maxlength="10"
                                                    required
                                                    placeholder="Enter contact Number"
                                                  />
                                                </td>
                                                <td>
                                                  <div class="d-flex">
                                                    <button
                                                      type="button"
                                                      class="btn btn-danger mr-2 btn-delete"
                                                      disabled
                                                      >
                                                      <i class="icon-trash-alt fa-2x"></i>
                                                    </button>
                                                    <br />
                                                    <button
                                                      type="button"
                                                      class="btn btn-success btn-add"
                                                      onclick="addRowContact()"
                                                      >
                                                      <i class="icon-plus-circle2 fa-2x"></i>
                                                    </button>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </fieldset>
                                  <div
                                    class="d-flex justify-content-end align-items-center"
                                  >
                                   <button
                                      type="submit"
                                      class="btn btn-primary ml-3"
                                    >
                                      Next
                                      <i class="icon-paperplane ml-2"></i>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                           </div>
                          <div class="tab-pane fade" id="solid-rounded-tab8">
                                <div class="card">
                              <div
                                class="card-header header-elements-inline bg-blue-600"
                              >
                                <h5 class="card-title">Joining Details</h5>
                              </div>
                              <div class="card-body">
                                <form class="form-validate-jquery" method="post" action="<?= base_url('/joining_details_save') ?>" id="joining_info">
                                  <fieldset class="mb-3">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Department Name
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <select
                                          name="department"
                                          data-placeholder="Select Department"
                                          class="form-control form-control-select2 select2-hidden-accessible"
                                          required                                         
                                        >
                                          <option>
                                            Select
                                          </option>
                                          <option value="depttone">
                                            Department One
                                          </option>
                                          <option value="deptttwo">
                                            Department two
                                          </option>
                                        </select>
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >Designation
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <select
                                          name="designation"
                                          data-placeholder="Select Designation"
                                          class="form-control form-control-select2 select2-hidden-accessible"
                                          required
                                          >
                                          <option>
                                            Select
                                          </option>
                                          <option value="desi1">
                                            Designation One
                                          </option>
                                          <option value="desi2">
                                            Designation two
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >State
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <select
                                          name="state"
                                          data-placeholder="Select States"
                                          class="form-control form-control-select2 select2-hidden-accessible"
                                          required
                                         >
                                          <option>
                                            Select
                                          </option>
                                          <option value="delhi">Delhi</option>
                                          <option value="uttarpardesh">
                                            Uttar Pardesh
                                          </option>
                                        </select>
                                      </div>
                                      <label class="col-form-label col-lg-3"
                                        >District/City
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-3">
                                        <select
                                          name="district"
                                          data-placeholder="Select States"
                                          class="form-control form-control-select2 select2-hidden-accessible"
                                          required
                                          >
                                          <option>Select</option>
                                          <option value="westdelhi">West Delhi</option>
                                          <option value="centraldelhi">
                                            Central Delhi
                                          </option>
                                        </select>
                                      </div>                                   
                                    </div>

                                     <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Date of Joining
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                            type="date"
                                            class="form-control datepicker hasDatepicker"
                                            placeholder="dd/mm/yyyy"
                                            name="date_of_joining"
                                            id="date_of_joining"
                                            required
                                          />
                                      </div>                                  
                                    </div>
                                  </fieldset>
                                  <div
                                    class="d-flex justify-content-end align-items-center"
                                  >
                                    <button
                                      type="submit"
                                      class="btn btn-primary ml-3"
                                    >
                                      Next
                                      <i class="icon-paperplane ml-2"></i>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                           </div>
                                                  
                           <div class="tab-pane fade" id="solid-rounded-tab9">
                              <div class="card">
                              <div
                                class="card-header header-elements-inline bg-blue-600"
                              >
                                <h5 class="card-title">Compliance Details</h5>
                              </div>
                              <div class="card-body">
                                <form class="form-validate-jquery" method="post" action="<?= base_url('/compliance_details_save') ?>" id="compliance_info">
                                  <fieldset class="mb-3">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >ESIC No.
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="esic_no"
                                          class="form-control"
                                          required
                                          placeholder="Enter ESIC No."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >UAN No.
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="uan_no"
                                          class="form-control"
                                          required
                                          placeholder="Enter UAN No."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Medical Claim Card No.
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="medical_card_no"
                                          class="form-control"
                                          required
                                          placeholder="Enter Medical Claim Card No."
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Any Other
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="text"
                                          name="any_other"
                                          class="form-control"
                                          required
                                          placeholder="Enter any other"
                                        />
                                      </div>
                                    </div>
                                  </fieldset>
                                  <div
                                    class="d-flex justify-content-end align-items-center"
                                  >
                                    <!-- <button
                                      type="reset"
                                      class="btn btn-light"
                                      id="reset"
                                    >
                                      Reset <i class="icon-reload-alt ml-2"></i>
                                    </button> -->
                                    <button
                                      type="submit"
                                      class="btn btn-primary ml-3"
                                    >
                                      Next
                                      <i class="icon-paperplane ml-2"></i>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                           </div>
                           <div class="tab-pane fade" id="solid-rounded-tab10">
                             <div class="card">
                              <div
                                class="card-header header-elements-inline bg-blue-600"
                              >
                                <h5 class="card-title">Upload Documents</h5>
                              </div>
                              <div class="card-body">                                
                                <form class="form-validate-jquery" method="post" action="<?= base_url('/upload_details_save') ?>" id="upload_info" enctype="multipart/form-data">
                                  <fieldset class="mb-3">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Photo
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="file"
                                          name="photo_path"
                                          class="form-input-styled"
                                          accept=".jpg,.jpeg,.png"
                                          required
                                          data-fouc
                                        />
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3"
                                        >Document
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <div class="col-lg-9">
                                        <input
                                          type="file"
                                          name="document_path"
                                          accept=".pdf,.doc,.docx"
                                          class="form-input-styled"
                                          required
                                          data-fouc
                                        />
                                      </div>
                                    </div>
                                  </fieldset>
                                  <div
                                    class="d-flex justify-content-end align-items-center"
                                  >
                                  <button
                                      type="submit"
                                      class="btn btn-primary ml-3"
                                    >
                                      Submit
                                      <i class="icon-paperplane ml-2"></i>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                           </div>                     
                           </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
          </div>
        </div>       
    </div>
<!-- /content-wrapper -->
<script src="<?= base_url('public/assets/js/emp_forms.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?= $this->endSection() ?>