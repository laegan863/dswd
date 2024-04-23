<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span class="fw-bold" style="font-size:17px">DSWD</span></a>
            </div>

            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin Dashboard</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="/admin"><i class="fa fa-home"></i> DashBoard</a>
                  </li>
                  <li>
                    <a href="/admim/announcement"><i class="fa fa-bullhorn"></i> Announcements</a>
                  </li>
                  <li><a><i class="fa fa-bars"></i> List Of Barangay <span class="fa fa-chevron-down"></span></a>
                    <form method="get" action="/barangay">
                      <ul class="nav child_menu">
                        @if(session()->has('sidebar'))
                              @foreach(session()->get('sidebar') as $key)
                                  <li>
                                    <a href="/brgy/{{$key->barangay_name}}">{{$key->barangay_name}}</a>
                                  </li>
                              @endforeach
                          @endif
                      </ul>
                    </form>
                  </li>
                  <!-- <li>
                    <a href="#"><i class="fa fa-bullhorn"></i> Reports</a>
                  </li> -->  
                  
                </ul>
              </div>
            </div>

            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>