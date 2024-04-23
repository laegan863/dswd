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
              <div class="col-md-12 col-sm-12">

              @if(session()->has('data'))
                <div class="alert alert-success">
                  {{session()->get('data')}}
                </div>
              @endif
                <div class="x_panel py-5">
                  <div class="text-center">
                    <h4 class="fw-bold">Announcement</h4>
                  </div>
                <form method="post" action="{{route('announcement')}}">
                  @csrf
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="fw-bold fs-5">Enter Message Here:</div>
                      <textarea class="form-control" name="message" rows="4">
                      </textarea>
                    </div>
                    <div class="col-lg-4">

                      <div class="mb-2 col-lg-12">
                        <div class="fw-bold fs-5">
                          Choose A Receiver
                        </div>
                        <select class="form-control" id="receiver" name="receiver">
                          <option value="" selected="">Choose Here...</option>
                          <option value="pwd">Person With Disability</option>
                          <option value="senior">Senior Citizen</option>
                          <option value="women">Womens</option>
                          <option value="solo">Solo Parents</option>
                        </select>
                      </div>
                      <div class="col-lg-12">
                        <button class="btn btn-primary col-12" id="submit" type="submit">Send Message</button>
                      </div>
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
@include('Admin/files/scripts')

<script type="text/javascript">
  $("#submit").click(function(){
    if ($("#receiver").val()=="") {
      alert("Please Seleect A Receiver To Proceed");
    }
  });
</script>

<!-- end -->
  </body>
</html>
