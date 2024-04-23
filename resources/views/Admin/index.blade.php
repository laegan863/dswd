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
                <div class="row justify-content-start">
                  <div class="col-lg-6">
                    <div class="card d-flex justigy-content-center">
                      <div class="card-header text-light bg-dark">
                        <p class="fw-bold">DSWD Total Members:</p>
                      </div>
                      <div class="pb-5 pt-5 ">
                        <canvas id="myChart" style="width:100%;max-width:100%"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card d-flex justigy-content-center">
                      <div class="card-header text-light bg-dark">
                        <p class="fw-bold">DSWD Total Members:</p>
                      </div>
                      <div class="pb-5 pt-5">
                        <canvas id="myChart1" style="width:100%;max-width:100%"></canvas>
                      </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
var xValues = ["PWD", "SOLO PARENTS", "SENIOR CITIZEN", "WOMENS"];
var yValues = [{{$pwd}}, {{$solo}}, {{$senior}}, 24];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9"
];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{  
      backgroundColor: barColors,
      data: yValues
    }]
  },
});
</script>

<script>
var xValues = ["PWD", "SOLO PARENTS", "SENIOR CITIZEN", "WOMENS"];
var yValues = [{{$pwd}}, 49, 44, 24];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart1", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: false,
      text: "World Wine Production 2018"
    }
  }
});
</script>
@include('Admin/files/scripts')
<!-- end -->
  </body>
</html>
