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
                  <div class="x_title">
                      <h2 class="fw-bold">Barangay Name: {{$brgy_name}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <!-- Button trigger modal -->
                  <div class="x_content">
                     <div class="table-responsive">
                       <table id="example" class="table border border-0" style="width:100%">
                          <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>DATE APPLIED</th>
                                    <th>FULL NAME</th>
                                    <th>BARANGAY</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                  $count = 1;
                                @endphp
                                @foreach($data_member as $key)
                                    <tr>
                                      <td>{{$count}}</td>
                                      <td>{{$key->date_applied}}</td>
                                      <td>{{$key->name}}</td>
                                      <td>{{$key->barangay}}</td>
                                      <td class="text-center">
                                        <a class="btn btn-primary btn-sm" title="Member Info" href="#">
                                          <i class="fa fa-arrow-right"></i> Member Info
                                        </a>
                                        <a class="btn btn-danger btn-sm" title="Update Members" href="#">
                                          <i class="fa fa-trash"></i> Delete
                                        </a>
                                      </td>
                                  </tr>

                                  @php
                                    $count++;
                                  @endphp

                                @endforeach
                            </tbody>
                        </table>
                     </div>
                  </div>
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
