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
                @if(session()->has('result'))
                  @if(session()->get('result')==1)
                    <div class="alert alert-success text-center fw-bold">
                      Insert Success
                    </div>
                  @else
                    <div class="alert alert-success text-center fw-bold">
                      Insert Failed
                    </div>
                  @endif
                @endif
              </div>
              <div class="col-md-12 col-sm-12  ">
              <div class="x_panel py-5">
                <form action="/add-solo-parent" method="post">
                  @csrf
                  <div class="text-center">
                    <h4>Application For Solo Parent</h4>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <p class="mb-3 fw-bold">Type Of Application</p>
                      <select class="form-control" name="application">
                        <option value="New Application">New Application</option>
                        <option value="Renewal Application">Renewal Application</option>
                      </select>
                    </div>
                    <div class="col-lg-4">
                      <p class="mb-3 fw-bold">Name</p>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-lg-4">
                      <p class="mb-3 fw-bold">Barangay</p>
                      <select class="form-control" name="barangay">
                        @if(session()->has('sidebar'))
                            @foreach(session()->get('sidebar') as $key)
                                <option value="{{$key->barangay_name}}">{{$key->barangay_name}}</option>
                            @endforeach
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-5">
                      <p class="mb-3 fw-bold">Birth Date</p>
                      <input type="date" class="form-control" name="b_day">
                    </div>
                    <div class="col-lg-7">
                      <p class="mb-3 fw-bold">Birth Place</p>
                      <input type="text" class="form-control" name="b_place">
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-4">
                      <p class="mb-3 fw-bold">Age</p>
                      <input type="text" class="form-control" name="age">
                    </div>
                    <div class="col-lg-4">
                      <p class="mb-3 fw-bold">Sex</p>
                      <input type="text" class="form-control" name="sex">
                    </div>
                    <div class="col-lg-4">
                      <p class="mb-3 fw-bold">Civil Status</p>
                      <input type="text" class="form-control" name="civil_status">
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-6">
                      <p class="mb-3 fw-bold">highest Educational Attainment</p>
                      <input type="text" class="form-control" name="educ_attainment">
                    </div>
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-lg-6">
                          <p class="mb-3 fw-bold">Occupation</p>
                          <input type="text" class="form-control" name="occupation">
                        </div>
                        <div class="col-lg-6">
                          <p class="mb-3 fw-bold">Monthly Income</p>
                          <input type="text" class="form-control" name="monthly_income">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-4">
                      <p class="mb-3 fw-bold">Contact Number</p>
                      <input type="text" class="form-control" name="contact_number">
                    </div>
                    <div class="col-lg-4">
                      <p class="mb-3 fw-bold">Religion</p>
                      <input type="text" class="form-control" name="religion">
                    </div>
                    <div class="col-lg-4">
                      <p class="mb-3 fw-bold">Email Address</p>
                      <input type="text" class="form-control" name="email_address">
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-12">
                      <p class="mb-3 fw-bold">Benificiary/Pension</p>
                      <select class="form-control" name="benificiary_pension">
                        <option value="Pantawid Benificiary">Pantawid Benificiary</option>
                        <option value="UCT Benificiary">UCT Benificiary</option>
                        <option value="GSIS Pension">GSIS Pension</option>
                        <option value="SSS Pensioner">SSS Pensioner</option>
                        <option value="Soc Pen">Soc Pen</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="fw-bold mb-3 text-start h5 col-12">Family Composition</div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Name</p>
                      <input type="text" class="form-control" name="family_name1">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Age</p>
                      <input type="text" class="form-control" name="family_age1">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Relationship</p>
                      <input type="text" class="form-control" name="family_relationship1">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">With Disability-Yes/No</p>
                      <select class="form-control" name="with_disability1">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Educational Attainment</p>
                      <input type="text" class="form-control" name="family_educ_attainment1">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">School Address</p>
                      <input type="text" class="form-control" name="family_school_address1">
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Name</p>
                      <input type="text" class="form-control" name="family_name2">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Age</p>
                      <input type="text" class="form-control" name="family_age2">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Relationship</p>
                      <input type="text" class="form-control" name="family_relationship2">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">With Disability-Yes/No</p>
                      <select class="form-control" name="with_disability2">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Educational Attainment</p>
                      <input type="text" class="form-control" name="family_educ_attainment2">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">School Address</p>
                      <input type="text" class="form-control" name="family_school_address2">
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Name</p>
                      <input type="text" class="form-control" name="family_name3">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Age</p>
                      <input type="text" class="form-control" name="family_age3">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Relationship</p>
                      <input type="text" class="form-control" name="family_relationship3">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">With Disability-Yes/No</p>
                      <select class="form-control" name="with_disability3">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Educational Attainment</p>
                      <input type="text" class="form-control" name="family_educ_attainment3">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">School Address</p>
                      <input type="text" class="form-control" name="family_school_address3">
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Name</p>
                      <input type="text" class="form-control" name="family_name4">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Age</p>
                      <input type="text" class="form-control" name="family_age4">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Relationship</p>
                      <input type="text" class="form-control" name="family_relationship4">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">With Disability-Yes/No</p>
                      <select class="form-control" name="with_disability4">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Educational Attainment</p>
                      <input type="text" class="form-control" name="family_educ_attainment4">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">School Address</p>
                      <input type="text" class="form-control" name="family_school_address4">
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Name</p>
                      <input type="text" class="form-control" name="family_name5">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Age</p>
                      <input type="text" class="form-control" name="family_age5">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Relationship</p>
                      <input type="text" class="form-control" name="family_relationship5">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">With Disability-Yes/No</p>
                      <select class="form-control" name="with_disability5">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Educational Attainment</p>
                      <input type="text" class="form-control" name="family_educ_attainment5">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">School Address</p>
                      <input type="text" class="form-control" name="family_school_address5">
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Name</p>
                      <input type="text" class="form-control" name="family_name6">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Age</p>
                      <input type="text" class="form-control" name="family_age6">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Relationship</p>
                      <input type="text" class="form-control" name="family_relationship6">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">With Disability-Yes/No</p>
                      <select class="form-control" name="with_disability6">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Educational Attainment</p>
                      <input type="text" class="form-control" name="family_educ_attainment6">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">School Address</p>
                      <input type="text" class="form-control" name="family_school_address6">
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Name</p>
                      <input type="text" class="form-control" name="family_name7">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Age</p>
                      <input type="text" class="form-control" name="family_age7">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Relationship</p>
                      <input type="text" class="form-control" name="family_relationship7">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">With Disability-Yes/No</p>
                      <select class="form-control" name="with_disability7">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">Educational Attainment</p>
                      <input type="text" class="form-control" name="family_educ_attainment7">
                    </div>
                    <div class="col-lg-2">
                      <p class="mb-3 fw-bold">School Address</p>
                      <input type="text" class="form-control" name="family_school_address7">
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-lg-6">
                      <p class="fw-bold mb-3">CLASSIFICATION / CIRCUMSTANCES OF BEING A SOLO PARENT</p>
                      <select class="form-control" name="CIRCUMSTANCES_OF_BEING_A_SOLO_PARENT">
                        <option value="UNWED/UNMARRIED">UNWED/UNMARRIED</option>
                        <option value="SEPERATED / ANNUAL">SEPERATED / ANNUAL</option>
                        <option value="WIDOW">WIDOW</option>
                        <option value="OTHERS">OTHERS</option>
                      </select>
                    </div>
                    <div class="col-lg-6">
                      <p class="fw-bold mb-3">SINCE</p>
                      <input type="text" class="form-control" name="seperated_since">
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-lg-12">
                      <p class="fw-bold mb-3">NEEDS / PROBLEMS OF SOLO PARENTS</p>
                      <textarea class="form-control" rows="4" name="problem_of_soloparent"></textarea>
                    </div>
                    <div class="col-lg-12 my-5">
                      <p class="fw-bold mb-3">FAMILY RESOURCES</p>
                      <textarea class="form-control" rows="4" name="family_resources"></textarea>
                    </div>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary py-3 px-4">Submit Application</button>
                  </div>
                </form>
              </div>
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

<!-- script -->
@include('users/files/scripts')
<!-- end -->
  </body>
</html>
