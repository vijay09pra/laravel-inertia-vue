<template>
    <!-- <div>
        <header class="bg-green-500 text-white">
            <nav class="flex-item-center justify-between p-4 max-w-screen-lg mx-auto">
                <div class="space-x-6">
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                </div>
            </nav>
        </header>
        <main class="p-4">
            <slot />
        </main>
    </div> -->
    <div class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
          <!-- <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" /> -->
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" @click="toggleSidebar" role="button">
                <i class="fas fa-bars"></i>
              </a>
            </li>
          </ul>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto"></ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="" class="img-circle elevation-2" alt="User Image" />
              </div>
              <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class -->
                <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v3</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Dashboard</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <!-- <ol class="breadcrumb float-sm-right"> -->
                    <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li> -->
                  <!-- </ol> -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
    </div>
</template>
