<!DOCTYPE html>
    <html lang="en">
    @include('users/files/head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- header-nav top navigation -->
          @include('users/files/sidebar')

        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <form method="get" action="../../Config/route.php">
                      <input type="hidden" value="admin" name="designation">
                      
                      <button class=" btn border-0" title="Logout">
                        <i class="fa-solid fa-right-from-bracket fa-md"></i>
                      </button>
                    </form>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- header-nav top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                @if(session()->has('msg'))
                  @if(session()->get('msg')==1)
                    <div class="alert alert-success text-center fw-bold">
                      Insert Success
                    </div>
                  @else
                    <div class="alert alert-success text-center fw-bold">
                      Insert Failed
                    </div>
                  @endif
                @endif
                <div class="x_panel p-md-5 p-3">
                  <form method="post" action="/submitted-pwd-application" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Application Form</div>
                    </div>
                  <div class="col-lg-8 col-12">
                      <div class="row">
                        <div class="col-lg-6 col-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="New Applicant" name="application" id="Application" checked="">
                            <label class="form-check-label" for="Application">
                              <div class="fw-bold">New Applicant</div>
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-6 col-6">
                          
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="Renewal" name="application" id="Application">
                            <label class="form-check-label" for="Application">
                              <div class="fw-bold">Renewal</div>
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-lg-8 col-12">
                      <div class="row">
                        <div class="col-lg-8 col-12">
                          <div class="fw-bold">Person With Disability Number (RR-PPMM-BBB-NNNNNNN)</div>
                          <input type="text" class="form-control" name="member_account_id">
                        </div>
                        <div class="col-lg-4 col-6 mt-lg-0 mt-4">
                          <div class="fw-bold">Date Applied</div>
                          <input type="date" class="form-control" name="date_applied">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-5">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Personal Information</div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-2">
                      <div class="fw-bold">Last Name</div>
                      <input type="text" class="form-control" name="last_name">
                    </div>
                    <div class="col-lg-3 mt-lg-0 mt-2">
                      <div class="fw-bold">First Name</div>
                      <input type="text" class="form-control" name="first_name">
                    </div>
                    <div class="col-lg-3 mt-lg-0 mt-2">
                      <div class="fw-bold">MiddleName</div>
                      <input type="text" class="form-control" name="middle_name">
                    </div>
                    <div class="col-lg-2 mt-lg-0 mt-2">
                      <div class="fw-bold">Suffix</div>
                      <select class="form-control" name="suffix">
                        <option selected value="">Choose Here...</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mt-lg-5 mt-2">
                    <div class="col-lg-6">
                      <div class="fw-bold">Date Of Birth</div>
                      <input type="date" class="form-control" name="date_of_birth">
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-2">
                      <div class="fw-bold">Sex</div>
                      <select class="form-control" name="sex">
                        <option value="">Choose Here...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mt-lg-5 mt-2">
                    <div class="col-lg-5 mt-2">
                      <div class="fw-bold">Civil Status</div>
                      <select class="form-control" name="civil_status">
                        <option>Choose Here...</option>
                        <option value="Single">Single</option>
                        <option value="Seperated">Seperated</option>
                        <option value="Cohabitation (Live In)">Cohabitation (Live In)</option>
                        <option value="Married">Married</option>
                        <option value="Widow/er">Widow/er</option>
                      </select>
                    </div>
                    <div class="col-lg-7 mt-2">
                      <div class="fw-bold">Type Of Disability</div>
                      <select class="form-control" name="type_of_disabilities">
                        <option value="">Choose Here...</option>
                        <option value="Deaf Or Hard Hearing">Deaf Or Hard Hearing</option>
                        <option value="Intellectual Disability">Intellectual Disability</option>
                        <option value="Learning Disability">Learning Disability</option>
                        <option value="Mental Disability">Mental Disability</option>
                        <option value="Mental Disability">Phisical Disability</option>
                        <option value="Psychological Disability">Psychological Disability</option>
                        <option value="Speech And Language Impairment">Speech And Language Impairment</option>
                        <option value="Visual Disability">Visual Disability</option>
                        <option value="Cancer (RA11215)">Cancer (RA11215)</option>
                        <option value="Rare Disease (RA10747)">Rare Disease (RA10747)</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Cause Of Disability</div>
                    </div>
                    <div class="col-lg-8 mt-2">
                      <div class="row">
                        <div class="col-6">
                          <div class="form-check">
                            <input name="cause_of_disabilities" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Congental/Inbord" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                              Congental/Inbord
                            </label>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-check">
                            <input name="cause_of_disabilities" class="form-check-input" type="radio" name="flexRadioDefault" value="Acquired" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Acquired
                            </label>
                          </div>
                        </div>
                        <div class="col-6 ps-4">
                          <div class="form-check">
                            <input name="cause_of_disabilities" class="form-check-input" type="radio" name="flexRadioDefault" value="Autism" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Autism
                            </label>
                          </div>
                        </div>
                        <div class="col-6 ps-4">
                          <div class="form-check">
                            <input name="cause_of_disabilities" class="form-check-input" type="radio" name="flexRadioDefault" value="Chronic Illness" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Chronic Illness
                            </label>
                          </div>
                        </div>
                        <div class="col-6 ps-4">
                          <div class="form-check">
                            <input name="cause_of_disabilities" class="form-check-input" type="radio" name="flexRadioDefault" value="ADHD" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              ADHD
                            </label>
                          </div>
                        </div>
                        <div class="col-6 ps-4">
                          <div class="form-check">
                            <input name="cause_of_disabilities" class="form-check-input" type="radio" name="flexRadioDefault" value="Cerebral Palsy" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Cerebral Palsy
                            </label>
                          </div>
                        </div>
                        <div class="col-6 ps-4">
                          <div class="form-check">
                            <input name="cause_of_disabilities" class="form-check-input" type="radio" name="flexRadioDefault" value="Cerebral Palsy" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Cerebral Palsy
                            </label>
                          </div>
                        </div>
                        <div class="col-6 ps-4">
                          <div class="form-check">
                            <input name="cause_of_disabilities" class="form-check-input" type="radio" name="flexRadioDefault" value="Injury" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Injury
                            </label>
                          </div>
                        </div>
                        <div class="col-6 ps-4">
                          <div class="form-check">
                            <input name="cause_of_disabilities" class="form-check-input" type="radio" name="flexRadioDefault" value="Down Syndrome" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Down Syndrome
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Resident Address</div>
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">House No. and Street: *</div>
                      <input type="text" class="form-control" name="house_number_street">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Barangay: *</div>
                      <select class="form-control" name="barangay">
                        <option value="">Choose Here...</option>

                        @foreach($brgy as $key)
                          <option value="{{$key->barangay_name}}">{{$key->barangay_name}}</option>
                        @endforeach

                      </select>
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Municipality: *</div>
                      <input type="text" class="form-control" name="municipality">
                    </div>
                  </div>
                  <div class="row mt-lg-5 mt-2">
                    <div class="col-lg-6">
                      <div class="fw-bold">Province: *</div>
                      <input type="text" class="form-control" name="province">
                    </div>
                    <div class="col-lg-6">
                      <div class="fw-bold">Region: *</div>
                      <input type="text" class="form-control" name="region">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Contact Details</div>
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Landline No: *</div>
                      <input type="text" class="form-control" name="landline_num">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Mobile No: *</div>
                      <input type="text" class="form-control" name="mobile_num">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Email Address: *</div>
                      <input type="text" class="form-control" name="email">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">                    
                    <div class="col-lg-6">
                      <div class="card p-2 border-0 shadow-sm mb-3">
                        <div class="fw-semibold text-muted fs-5">Educational Attainment: *</div>
                      </div>
                        <select class="form-control" name="educational_attainment">
                          <option value="">Choose Here...</option>
                          <option value="None">None</option>
                          <option value="Kinder Garden">Kinder Garden</option>
                          <option value="Elementary">Elementary</option>
                          <option value="Junior High School">Junior High School</option>
                          <option value="Senior High School">Senior High School</option>
                          <option value="College">College</option>
                          <option value="Vocational">Vocational</option>
                          <option value="Post Graduate">Post Graduate</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                      <div class="card p-2 border-0 shadow-sm mb-3">
                        <div class="fw-semibold text-muted fs-5">Status Of Employment: *</div>
                      </div>
                        <select class="form-control" name="status_of_employment">
                          <option value="">Choose Here...</option>
                          <option value="Employed">Employed</option>
                          <option value="Unemployed">Unemployed</option>
                          <option value="Self employed">Self-employed</option>
                          <option value="Junior High School">Junior High School</option>
                          <option value="Senior High School">Senior High School</option>
                          <option value="College">College</option>
                          <option value="Vocational">Vocational</option>
                          <option value="Post Graduate">Post Graduate</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mt-lg-5 mt-2">
                      <div class="card p-2 border-0 shadow-sm mb-3">
                        <div class="fw-semibold text-muted fs-5">Category Of Employment: *</div>
                      </div>
                        <select class="form-control" name="category_of_employment">
                          <option value="">Choose Here...</option>
                          <option value="Goverment">Goverment</option>
                          <option value="Private">Private</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mt-lg-5 mt-2">
                      <div class="card p-2 border-0 shadow-sm mb-3">
                        <div class="fw-semibold text-muted fs-5">Types Of Employment: *</div>
                      </div>
                        <select class="form-control" name="type_of_employment">
                          <option value="">Choose Here...</option>
                          <option value="Permanent/Regular">Permanent/Regular</option>
                          <option value="Seasonal">Seasonal</option>
                          <option value="Casual">Casual</option>
                          <option value="Emergency">Emergency</option>
                        </select>
                    </div>
                  </div>
                  <div class="row mt-lg-5 mt-2">                    
                    <div class="col-lg-12">
                      <div class="fw-semibold text-muted fs-5">Occupation: *</div>
                      <select class="form-control" id="occupation" name="occupation">
                        <option value="">Choose Here...</option>
                        <option value="Manager">Manager</option>
                        <option value="Professional">Professional</option>
                        <option value="Technician and association Professionals">Technician and association Professionals</option>
                        <option value="Clerial Support Workers">Clerial Support Workers</option>
                        <option value="Service and Sales Workers">Service and Sales Workers</option>
                        <option value="Skilled Agricultural and Fishery Workers">Skilled Agricultural and Fishery Workers</option>
                        <option value="Craft and related trade workers">Craft and Related Trade Workers</option>
                        <option value="Plant And Machine Operators and Assembers">Plant And Machine Operators and Assembers</option>
                        <option value="Elementary Occupations">Elementary Occupations</option>
                        <option value="Armed FOrces Occupations">Armed FOrces Occupations</option>
                      </select>
                    </div>
                    <!-- <div class="col-lg-6 d-none" id="others">
                      <div class="fw-semibold text-muted fs-5">Others, Specify</div>
                      <input type="text" class="form-control" id="other_inp" value="">
                    </div> -->                  
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Organizational Information</div>
                    </div>
                    <div class="col-lg-3">
                      <div class="fw-bold">Organizational Affiliated:</div>
                      <input type="text" class="form-control" name="organization_affiliated">
                    </div>
                    <div class="col-lg-3">
                      <div class="fw-bold">Contact Person:</div>
                      <input type="text" class="form-control" name="contact_person">
                    </div>
                    <div class="col-lg-3">
                      <div class="fw-bold">Office Address:</div>
                      <input type="text" class="form-control" name="office_address">
                    </div>
                    <div class="col-lg-3">
                      <div class="fw-bold">Tel. Nos.:</div>
                      <input type="text" class="form-control" name="tel_nos">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">ID Reference No.</div>
                    </div>
                    <div class="col-lg-3">
                      <div class="fw-bold">SSS No.:</div>
                      <input type="text" class="form-control" name="sss_num">
                    </div>
                    <div class="col-lg-2">
                      <div class="fw-bold">GSIS No.:</div>
                      <input type="text" class="form-control" name="gsis_num">
                    </div>
                    <div class="col-lg-2">
                      <div class="fw-bold">Pagibig No.:</div>
                      <input type="text" class="form-control" name="pagibig_num">
                    </div>
                    <div class="col-lg-2">
                      <div class="fw-bold">PSN No.:</div>
                      <input type="text" class="form-control" name="psn_num">
                    </div>
                    <div class="col-lg-3">
                      <div class="fw-bold">PhilHealth No.:</div>
                      <input type="text" class="form-control" name="philhealth_num">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Family Background</div>
                    </div>
                    <div class="fw-bold mt-3 mb-1">FATHER'S NAME</div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Last Name:</div>
                      <input type="text" class="form-control" name="father_l_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">First Name:</div>
                      <input type="text" class="form-control" name="father_f_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Middle Name:</div>
                      <input type="text" class="form-control" name="father_m_name">
                    </div>

                    <div class="fw-bold mt-3 mb-1">MOTHER'S NAME</div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Last Name:</div>
                      <input type="text" class="form-control" name="mother_l_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">First Name:</div>
                      <input type="text" class="form-control" name="mother_f_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Middle Name:</div>
                      <input type="text" class="form-control" name="mother_m_name">
                    </div>

                    <div class="fw-bold mt-3 mb-1">GAURDIAN</div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Last Name:</div>
                      <input type="text" class="form-control" name="gaurdian_l_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">First Name:</div>
                      <input type="text" class="form-control" name="gaurdian_f_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Middle Name:</div>
                      <input type="text" class="form-control" name="gaurdian_m_name">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Accomplished By:</div>
                    </div>
                    <div class="col-lg-12 mb-lg-4 mb-2">
                      <select class="form-control" name="accomplish_by">
                        <option value="">Choose Here...</option>
                        <option value="Applicant">Applicant</option>
                        <option value="Gaurdian">Gaurdian</option>
                        <option value="Representative">Representative</option>
                      </select>
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Last Name:</div>
                      <input type="text" class="form-control" name="accomplish_l_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">First Name:</div>
                      <input type="text" class="form-control" name="accomplish_f_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Middle Name:</div>
                      <input type="text" class="form-control" name="accomplish_m_name">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Name Of Certifying Physician</div>
                    </div>
                    <div class="fw-bold">Licence Number</div>
                    <div class="col-12 mb-4">
                      <input type="text" class="form-control" name="physician_lisence_number">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Last Name:</div>
                      <input type="text" class="form-control" name="physician_l_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">First Name:</div>
                      <input type="text" class="form-control" name="physician_f_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Middle Name:</div>
                      <input type="text" class="form-control" name="physician_m_name">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Processing Officer</div>
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Last Name:</div>
                      <input type="text" class="form-control" name="processing_l_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">First Name:</div>
                      <input type="text" class="form-control" name="processing_f_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Middle Name:</div>
                      <input type="text" class="form-control" name="processing_m_name">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Approving Officer</div>
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Last Name:</div>
                      <input type="text" class="form-control" name="approving_l_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">First Name:</div>
                      <input type="text" class="form-control" name="approving_f_name">
                    </div>
                    <div class="col-lg-4">
                      <div class="fw-bold">Middle Name:</div>
                      <input type="text" class="form-control" name="approving_m_name">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Encoder</div>
                    </div>
                    <div class="col-lg-12">
                      <div class="fw-bold">Complete Name:</div>
                      <input type="text" class="form-control" name="encoder">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Name Of reporting Unit: (Office/Section)</div>
                    </div>
                    <div class="col-lg-12">
                      <div class="fw-bold">Complete Name:</div>
                      <input type="text" class="form-control" name="name_of_reporting">
                    </div>
                  </div>

                  <div class="row mt-lg-5 mt-2">
                    <div class="col-lg-6">
                      <div class="card p-2 border-0 shadow-sm mb-3">
                        <div class="fw-semibold text-muted fs-5">Control No.</div>
                      </div>
                      <input type="text" class="form-control" name="control_num">
                    </div>
                    <div class="col-lg-6">
                      <div class="card p-2 border-0 shadow-sm mb-3">
                      <div class="fw-semibold text-muted fs-5">Picture</div>
                    </div>
                      <input type="file" class="form-control" name="img">
                    </div>
                  </div>
                  <div class="text-right">
                    <button class="btn btn-dark pyy2 px-3 mt-4">Submit Form</button>
                  </div>
                  
                </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer >
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function(){
        var value = null;
        $("#occupation").change(function(){
          if($(this).val() == "Others"){
            $("#others").removeClass("d-none");
              value = $("#other_inp").val();
              $("#val_occ").val(value);
          }else{
            $("#others").addClass("d-none");
              value = $("#occupation").val();
              $("#val_occ").val(value);
          }
        })
      })
    </script>

<!-- script -->
@include('users/files/scripts')
<!-- end -->
  </body>
</html>
