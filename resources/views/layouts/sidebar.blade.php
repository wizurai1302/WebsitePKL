<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link" style="text-decoration: none;">
      <img src="{{asset('assets/img/cropped-Logo-SMKN-4-Payakumbuh-PNG.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Website PKL Admin</span>
      <div class="info">
        <a href="{{route('admin.show')}}" class="d-block"></a>
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img/cropped-Logo-SMKN-4-Payakumbuh-PNG.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item">
                <a href="{{route('admin.show')}}" class="nav-link">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <p>
                    Home
                  </p>
                </a>
              </li>
          
          
          
            <li class="nav-item menu-open">
            <div class="nav-link active">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </div>
            
            
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.datasiswa')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Siswa</p>
                  </a>
                </li>
            </ul>

            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pembimbing</p>
                </a>
              </li>
            </ul> --}}
          
            <li class="nav-item menu-open">
              <div class="nav-link active">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Perusahaan Data
                  <i class="right fas fa-angle-left"></i>
                </p>
              </div>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('card')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Input Data Perusahaan</p>
                  </a>
                </li>
            </ul>
              

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('admin.dataperusahaan')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Table Perusahaan</p>
                    </a>
                  </li>
              </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>