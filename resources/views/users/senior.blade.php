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
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel py-5">
                <form>
                  <div class="text-center">
                    <h4 class="fw-bold">Application For Senior Citizen</h4>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Surname</div>
                        <input type="text" class="form-control" name="surname">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">First Name</div>
                        <input type="text" class="form-control" name="firstname">
                      </div>
                    </div>
                    
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Middle Name</div>
                        <input type="text" class="form-control" name="middlename">
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-6">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Date Of Birth</div>
                        <input type="date" class="form-control" name="date_of_birth">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="my-2">
                            <div class="fw-bold fs-5">Age</div>
                            <input type="text" class="form-control" name="age">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="my-2">
                            <div class="fw-bold fs-5">Sex</div>
                            <select class="form-control" name="sex">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-12">
                      <div class="my-3">
                        <div class="fw-bold fs-5">Address</div>
                        <input type="text" class="form-control" name="address">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Occupation</div>
                        <input type="text" class="form-control" name="occupation">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Annual Income</div>
                        <input type="text" class="form-control" name="annualincome">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Other Skills</div>
                        <input type="text" class="form-control" name="otherskills">
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Name</div>
                        <input type="text" class="form-control" name="name1">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Birthday</div>
                        <input type="date" class="form-control" name="bday1">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Sex</div>
                        <select class="form-control" name="sex1">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Relationship</div>
                        <input type="text" class="form-control" name="relationship1">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Occupation</div>
                        <input type="text" class="form-control" name="occupation1">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Name</div>
                        <input type="text" class="form-control" name="name2">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Birthday</div>
                        <input type="date" class="form-control" name="bday2">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Sex</div>
                        <select class="form-control" name="sex2">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Relationship</div>
                        <input type="text" class="form-control" name="relationship2">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Occupation</div>
                        <input type="text" class="form-control" name="occupation2">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Name</div>
                        <input type="text" class="form-control" name="name3">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Birthday</div>
                        <input type="date" class="form-control" name="bday3">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Sex</div>
                        <select class="form-control" name="sex3">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Relationship</div>
                        <input type="text" class="form-control" name="relationship3">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Occupation</div>
                        <input type="text" class="form-control" name="occupation3">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Name</div>
                        <input type="text" class="form-control" name="name4">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Birthday</div>
                        <input type="date" class="form-control" name="bday4">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Sex</div>
                        <select class="form-control" name="sex4">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Relationship</div>
                        <input type="text" class="form-control" name="relationship4">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Occupation</div>
                        <input type="text" class="form-control" name="occupation4">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Name</div>
                        <input type="text" class="form-control" name="name5">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Birthday</div>
                        <input type="date" class="form-control" name="bday5">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Sex</div>
                        <select class="form-control" name="sex5">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Relationship</div>
                        <input type="text" class="form-control" name="relationship5">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Occupation</div>
                        <input type="text" class="form-control" name="occupation5">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Name</div>
                        <input type="text" class="form-control" name="name6">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Birthday</div>
                        <input type="date" class="form-control" name="bday6">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Sex</div>
                        <select class="form-control" name="sex6">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Relationship</div>
                        <input type="text" class="form-control" name="relationship6">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Occupation</div>
                        <input type="text" class="form-control" name="occupation6">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Name</div>
                        <input type="text" class="form-control" name="name7">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Birthday</div>
                        <input type="date" class="form-control" name="bday7">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Sex</div>
                        <select class="form-control" name="sex7">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Relationship</div>
                        <input type="text" class="form-control" name="relationship7">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Occupation</div>
                        <input type="text" class="form-control" name="occupation7">
                      </div>
                    </div>
                  </div>

                  <div class="text-center my-5">
                    <h4 class="fw-bold text-transform-uppercase">MEMBERSHIP TO SENIOR CITIZEN'S ASSOCIATION</h4>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="my-2">
                        <div class="fw-bold fs-5">NAME OF ASSOCIATION</div>
                        <input type="text" class="form-control" name="association_name">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="my-2">
                        <div class="fw-bold fs-5">ADDRESS OF ASSOCIATION</div>
                        <input type="text" class="form-control" name="association_address">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="my-2">
                        <div class="fw-bold fs-5">DATE OF MEMBERSHIP</div>
                        <input type="date" class="form-control" name="association_address">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="my-2">
                        <div class="fw-bold fs-5">IF AN OFFICE DATE ELECTED</div>
                        <input type="text" class="form-control" name="date_elected">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Date Of Registration</div>
                        <input type="date" class="form-control" name="registration_date">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Residence Certificate No.</div>
                        <input type="text" class="form-control" name="certi_number">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Issued At.</div>
                        <input type="text" class="form-control" name="issued_at">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="my-2">
                        <div class="fw-bold fs-5">On</div>
                        <input type="text" class="form-control" name="on">
                      </div>
                    </div>
                  </div>
                <div class="text-end mt-3">
                  <button type="text" class="btn btn-primary">Submit Application</button>
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
