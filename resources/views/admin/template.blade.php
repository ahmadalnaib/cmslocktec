<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Bootstrap core CSS-->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

  <!-- Icons -->
  <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/sb-admin.css') }}" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav text-right" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light  bg-secondary fixed-top" id="mainNav">
        <div class="container">
        
         {{-- @include('partials.navbar') --}}

                <ul class="navbar-nav navbar-sidenav h-auto" id="exampleAccordion">
                    <li class="nav-item mt-5" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Statistics</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a class="nav-link" href="">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Actions Cateogries</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right">
                        <a class="nav-link" href="">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Users</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Actions">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePosts" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">Actions</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapsePosts">
                            <li>
                                <a href="{{ route('admin.action') }}">All Actions </a>
                            </li>
                            <li>
                                <a href="#">Add Action</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Role">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseRoles" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">Role</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseRoles">
                            <li>
                                <a href="#">Role</a>
                            </li>
                            <li>
                                <a href="#">Add Role</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right">
                        <a class="nav-link" href="">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Permissions</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePages" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-file"></i>
                            <span class="nav-link-text">Pages</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapsePages">
                            <li>
                                <a href=""> Pages</a>
                            </li>
                            <li>
                                <a href="">Add New Page</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        <div>
  </nav>

  <!-- /.content-wrapper-->
  <div class="content-wrapper">
      <!-- /.container-fluid-->
      <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb mt-5">
              <li class="breadcrumb-item">
                  <a href="/dashboard">Dashboard </a>
              </li>
              <li class="breadcrumb-item active">
                  @yield('breadcrumb')
              </li>
          </ol>
         @yield('content')
       </div>
   </div>

   <footer class="bg-secondary text-center p-4">
       
    </footer>
  </div>
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('/js/app.js') }}"></script>
    @yield('script')
</body>

</html>