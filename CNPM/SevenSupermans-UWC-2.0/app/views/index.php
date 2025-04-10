<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet" />

  <link href="../../css/home.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion bg-mvc" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center bg-brand" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-leaf"></i>
        </div>
        <div class="sidebar-brand-text mx-3 fs-4">UWC 2.0</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0 mb-3" />

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span class="fs-6">Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider" />

      <!-- Nav Item - Task -->
      <li class="nav-item">
        <a class="nav-link" href="./managetask.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span class="fs-6">Task</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider" />

      <!-- Nav Item - Employees -->
      <li class="nav-item">
        <a class="nav-link" href="emp.php">
          <i class="fas fa-fw fa-table"></i>
          <span class="fs-6">Employees</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Nav Item - Vehicles -->
      <li class="nav-item">
        <a class="nav-link" href="vehicle.php">
          <i class="fas fa-fw fa-table"></i>
          <span class="fs-6">Vehicles</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Nav Item - MCPs -->
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-table"></i>
          <span class="fs-6">MCPs</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />
    </ul>
    <!-- /Sidebar -->

    <!-- Content -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" data-dashlane-rid="3a185025e0576f01" data-form-type="">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" data-dashlane-rid="c452bc135382be1b" data-form-type="">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" data-dashlane-rid="1a622703d7490619" data-dashlane-label="true" data-form-type="">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

          <h1 class="text-dark fw-bold" style="position: absolute; left: 35%">
            Trang chủ
          </h1>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">Thông báo</h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">1/12/2022</div>
                    <span class="font-weight-bold">Báo cáo mỗi tháng đã được cập nhật!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">25/11/2022</div>
                    Tiền công đã được chuyển. Mời mọi người kiểm tra!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">22/11/2022</div>
                    Đi muộn 9 phút.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Tất cả thông báo</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">Tin nhắn</h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="/img/undraw_profile_1.svg" alt="..." />
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">
                      Hôm nay khi nào cậu đi làm vậy?
                    </div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="/img/undraw_profile_2.svg" alt="..." />
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">
                      Việc hôm qua đã xong chưa ấy nhờ?
                    </div>
                    <div class="small text-gray-500">HTT · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="/img/undraw_profile_3.svg" alt="..." />
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">
                      Hôm nay làm xong lên kèo nhé!
                    </div>
                    <div class="small text-gray-500">Bu · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="..." />
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">
                      Hôm nay tớ có việc, cậu xin phép giúp tớ nhé.
                    </div>
                    <div class="small text-gray-500">LTH · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Tất cả tin nhắn</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_COOKIE["user_name"]; ?></span>
                <img class="img-profile rounded-circle" src="../../img/undraw_profile.svg" />
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Trang cá nhân
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cài đặt
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Nhật ký hoạt động
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./login.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- /Topbar -->
        <!-- Home Content -->
        <div class="container-fluid">
          <div class="row">
            <!-- Area Chart - Donut Chart - Progress -->
            <div class="col-xl-8 col-lg-7">
              <!-- MCPs - Charts -->
              <div class="row ms-1">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                      Trạng thái MCPs trong 12 giờ gần đây
                    </h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Lựa chọn:</div>
                        <a class="dropdown-item" href="#">Xem bảng dữ liệu</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Cài đặt</a>
                      </div>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area">
                      <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                          <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                          <div class=""></div>
                        </div>
                      </div>
                      <canvas id="myAreaChart" style="display: block; height: 320px; width: 781px" width="976" height="400" class="chartjs-render-monitor"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /MCPs - Charts -->

              <!-- Daily Progress & Work Progress -->
              <div class="row">
                <!-- Daily Progress -->
                <div class="col-6">
                  <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">
                        Tiến độ công việc
                      </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div class="chart-pie pt-4">
                        <div class="chartjs-size-monitor">
                          <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                          </div>
                          <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                          </div>
                        </div>
                        <canvas id="myPieChart" width="447" height="316" style="display: block; height: 253px; width: 358px" class="chartjs-render-monitor"></canvas>
                      </div>
                      <hr />
                      Tiến độ công việc hằng ngày, di chuyển chuột vào đồ thị
                      để thấy rõ hơn thông tin.
                    </div>
                  </div>
                </div>
                <!-- /Daily Progress -->

                <!-- Work Progress -->
                <div class="col-6">
                  <!-- Project Card Example -->
                  <div class="card shadow">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">
                        Tiến trình công việc
                      </h6>
                    </div>
                    <div class="card-body">
                      <h4 class="small font-weight-bold">
                        Khu vực 1 <span class="float-right">20%</span>
                      </h4>
                      <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h4 class="small font-weight-bold">
                        Khu vực 2 <span class="float-right">40%</span>
                      </h4>
                      <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h4 class="small font-weight-bold">
                        Khu vực 3 <span class="float-right">60%</span>
                      </h4>
                      <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h4 class="small font-weight-bold">
                        Khu vực 4 <span class="float-right">80%</span>
                      </h4>
                      <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h4 class="small font-weight-bold">
                        Khu vực 5 <span class="float-right">Hoàn thành!</span>
                      </h4>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Work Progress -->
              </div>
              <!-- /Daily Progress & Work Progress -->
            </div>

            <!-- Nearly Update - Work CheckBox -->
            <div class="col-xl-4 col-lg-5">
              <!-- List -->
              <div class="card shadow animated--grow-in">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">
                    Cập nhật gần đây
                  </h6>
                </div>
                <div class="list-group">
                  <a class="list-group-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">1/12/2022</div>
                      <span class="font-weight-bold">Báo cáo mỗi tháng đã được cập nhật!</span>
                    </div>
                  </a>
                  <a class="list-group-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">25/11/2022</div>
                      Tiền công tháng này đã được gửi đi, mời mọi người kiểm
                      tra!
                    </div>
                  </a>
                  <a class="list-group-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">22/11/2022</div>
                      Đi muộn 9 phút.
                    </div>
                  </a>
                  <a class="list-group-item text-center small text-gray-500" href="#">Tất cả cập nhật</a>
                </div>
              </div>
              <!-- /List -->

              <!-- List -->
              <div class="card shadow mt-5 animated--grow-in">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Công việc</h6>
                </div>
                <div class="list-group">
                  <div class="list-group-item d-flex align-items-center">
                    <div class="mr-3 form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckBox" />
                    </div>
                    <div>
                      Thu gom khu vực 1.
                      <div class="small text-gray-500">December 2, 2019</div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div class="mr-3 form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckBox" />
                    </div>
                    <div>
                      Thu gom khu vực 2.
                      <div class="small text-gray-500">December 2, 2019</div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div class="mr-3 form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckBox" />
                    </div>
                    <div>
                      Kiểm tra thiết bị khu vực 1.
                      <div class="small text-gray-500">December 2, 2019</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /List -->
            </div>
          </div>
        </div>
        <!-- /Home Content -->
      </div>
      <!-- /Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © UWC 2.0</span>
          </div>
        </div>
      </footer>
      <!-- /Footer -->
    </div>
    <!-- /Content -->
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../js/demo/chart-area-demo.js"></script>
  <script src="../../js/demo/chart-pie-demo.js"></script>
</body>

</html>