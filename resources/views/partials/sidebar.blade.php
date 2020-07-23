{{-- <div class="left-side-menu">

    <div class="h-100" id="left-side-menu-container" data-simplebar>

        <!-- LOGO -->
        <a href="#" class="logo text-center">
            <span class="logo-lg">
                <img src="assets/images/telkom.png" alt="" height="16" id="side-main-logo">
            </span>
            <span class="logo-sm">
                <img src="assets/images/telkom.png" alt="" height="16" id="side-sm-main-logo">
            </span>
        </a>

        <!--- Sidemenu -->
        <ul class="metismenu side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Alternatif</li>

            <li class="side-nav-item">
                <a href="{{ route('alternatif') }}" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> Data Tim </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Criteria</li>
            <li class="side-nav-item">
                <a href="{{ route('kriteria') }}"class="side-nav-link">
                    <i class="uil-layers-alt"></i>
                    <span> Kriteria </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item mt-1">Assesment</li>
            <li class="side-nav-item">
                <a href="{{ route('penilaian') }}"  class="side-nav-link">
                    <i class="uil-file-edit-alt"></i>
                    <span> Penilaian </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item mt-1">SAW Methode</li>
            <li class="side-nav-item">
                <a href="{{ route('saw') }}" class="side-nav-link">
                    <i class="uil-bright"></i>
                    <span> Perhitungan </span>
                </a>
            </li>
        </ul>

        <!-- Help Box -->
     
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div> --}}

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <span class="account-user-name text-white">( {{ Auth::user()->name }} )</span>
          <span class="account-position text-white"> : User Actived</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-header">DASHBOARD</li>
               <li class="nav-item">
                 <a href="{{ route('dashboard') }}" class="nav-link">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Dashboard
                   </p>
                 </a>
               </li>

               <li class="nav-header">ALTERNATIF</li>
               <li class="nav-item">
                 <a href="{{ route('alternatif') }}" class="nav-link">
                   <i class="nav-icon fas fa-edit"></i>
                   <p>
                     Data Tim 
                   </p>
                 </a>
               </li>

               <li class="nav-header">CRITERIA</li>
               <li class="nav-item">
                 <a href="{{ route('kriteria') }}" class="nav-link">
                   <i class="nav-icon fas fa-th"></i>
                   <p>
                     Data Kriteria  
                   </p>
                 </a>
               </li>

               <li class="nav-header">ASSESMENT</li>
               <li class="nav-item">
                 <a href="{{ route('penilaian') }}" class="nav-link">
                   <i class="nav-icon fas fa-chart-pie"></i>
                   <p>
                     Data Penilaian 
                   </p>
                 </a>
               </li>
               <li class="nav-header">SAW METHOD</li>
               <li class="nav-item">
                 <a href="{{ route('saw') }}" class="nav-link">
                   <i class="nav-icon fas fa-table"></i>
                   <p>
                     Perhitungan Metode 
                   </p>
                 </a>
               </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>