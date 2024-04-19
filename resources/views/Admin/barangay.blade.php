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
                <div class="x_panel">
                  <div class="x_title">
                    @if(session()->has('brgy_name'))
                      <h2 class="fw-bold">Barangay: {{session()->get('brgy_name')}}</h2>
                    @endif
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <!-- Button trigger modal -->

                  <div class="d-flex justify-content-center align-items-center flex-column">
                  
                  </div>
                  
                    
                    <div class="row align-item-center">
                      <div class="col-lg-3">
                        <form method="get" action="/list-of-members">
                        
                        @csrf
                          <input type="hidden" value="{{session()->get('brgy_name')}}" name="brgy_name">
                          <input type="hidden" value="pwd" name="list_of_members">
                          <div class="card py-5 px-4">
                            <div class="fw-bold text-center">
                              <i class="fa fa-person text-dark fa-2x"></i>
                              <p style="font-size: 15px">Person With Disabilities </p>
                            </div>

                            <button class="col-12 btn btn-primary" type="submit">List Of Members</button>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-3">
                        <form method="post" action="/list-of-members">
                          @csrf
                          <input type="hidden" value="{{session()->get('brgy_name')}}" name="brgy_name">
                          <input type="hidden" value="solo_parents" name="list_of_members">
                          <div class="card py-5 px-4">
                            <div class="fw-bold text-center">
                              <i class="fa fa-person text-dark fa-2x"></i>
                              <p style="font-size: 15px">Solo Parents </p>
                            </div>
                            <button class="col-12 btn btn-primary" type="submit">List Of Members</button>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-3">
                        <form method="post" action="/list-of-members">
                          @csrf
                          <input type="hidden" value="{{session()->get('brgy_name')}}" name="brgy_name">
                          <input type="hidden" value="womens" name="list_of_members">
                          <div class="card py-5 px-4">
                            <div class="fw-bold text-center">
                              <i class="fa fa-person text-dark fa-2x"></i>
                              <p style="font-size: 15px">Womens </p>
                            </div>
                            <button class="col-12 btn btn-primary" type="submit">List Of Members</button>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-3">
                        <form method="post" action="/list-of-members">
                          @csrf
                          <input type="hidden" value="{{session()->get('brgy_name')}}" name="brgy_name">
                          <input type="hidden" value="senior" name="list_of_members">
                          <div class="card py-5 px-4">
                            <div class="fw-bold text-center">
                              <i class="fa fa-person text-dark fa-2x"></i>
                              <p style="font-size: 15px">Senior Citizen </p>
                            </div>
                            <button class="col-12 btn btn-primary" type="submit">List Of Members</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  


                  <!-- <div class="x_content">
                     <div class="table-responsive">
                       <table id="example" class="table border border-0" style="width:100%">
                          <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ITEM NAME</th>
                                    <th>ITEM QUANTITY</th>
                                    <th>ITEM PRICE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                              @if(session()->has('return_data'))
                                @foreach(session()->get('return_data') as $key)
                                    <tr>
                                      <td>{{$key->id}}</td>
                                      <td>{{$key->first_name}}</td>
                                      <td>{{$key->last_name}}</td>
                                      <td>{{$key->middle_name}}</td>
                                      <td>Delete</td>
                                  </tr>
                                  @endforeach
                                @endif
                            </tbody>
                        </table>
                     </div>
                  </div> -->
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
    @include('Admin/files/scripts')
<!-- end -->
  </body>
</html>
