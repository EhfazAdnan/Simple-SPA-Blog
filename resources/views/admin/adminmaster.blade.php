<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">

  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/admin/default/admin.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview">
            <router-link to="/home" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/category-list" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>Category</p>
            </router-link>
          </li>

          <li class="nav-item">

            <router-link to="/post-list" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>Post</p>
            </router-link>>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <admin-main></admin-main>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="/">Ehfaz Ahmed Adnan</a>.</strong> All rights reserved.
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
