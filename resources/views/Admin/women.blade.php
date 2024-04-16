<!DOCTYPE html>
    <html lang="en">
    @include('Admin/files/head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- header-nav top navigation -->
          @include('Admin/files/sidebar')

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
                  <div class="text-center">
                    <h4 class="fw-bold">Application For Women</h4>
                  </div>
                <form>
                  <div class="row mt-3">
                    <div class="col-lg-12">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Name:</div>
                        <input type="text" class="form-control" name="complete_name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Birthday:</div>
                        <input type="text" class="form-control" name="bday">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Age:</div>
                        <input type="text" class="form-control" name="age">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Address:</div>
                        <input type="text" class="form-control" name="address">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Status:</div>
                        <input type="text" class="form-control" name="status">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Occupation:</div>
                        <input type="text" class="form-control" name="occupation">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="my-2">
                        <div class="fw-bold fs-5">Income:</div>
                        <input type="text" class="form-control" name="income">
                      </div>
                    </div>
                    <div class="text-end mt-3">
                      <button class="btn btn-primary" type="submit">Submit Application</button>
                    </div>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
                $('#example').DataTable();
            });
    </script>
<!-- end -->
  </body>
</html>
