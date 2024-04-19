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
                <div class="x_panel">
                  DashBoard
                          {{session()->get('designation')}}
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
