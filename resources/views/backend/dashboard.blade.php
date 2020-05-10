<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://cdn.tutorialjinni.com/toastr.js/2.1.4/toastr.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('public/backend/dist/css/style.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('student')}}" class="nav-link">Student</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="{{url('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt nav-icon"></i> Logout</a>
      </li>
        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('customer')}}" class="nav-link"><i title="customer" style="font-size: 35px" class="fas fa-master-card nav-icon" style="font-size: 20px;"></i></a>
          </li>

          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('customer')}}" class="nav-link"><i title="customer" style="font-size: 35px" class="fas fa-users nav-icon" style="font-size: 20px;"></i></a>
          </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light text-success elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin')}}" class="brand-link">
      <img src="{{asset('public/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SoftTechIT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>


          
          <li class="nav-item has-treeview">
            <a href="{{url('/shopsetting')}}" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>

              <p>
                Shop Setting

              </p>
            </a>
          </li>

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="{{url('/account')}}" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>

              <p>
                Account 
              </p>
            </a>
          </li>
<!-- =================MENU ITEM LIST ================== -->
          

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Product/Item & Other
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Units</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/category')}}" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Item Categories</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Brands</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('item')}}" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Items</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Suppliers</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Customer Groups</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('customert')}}" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Customers</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Expense Items</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Installment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Installment Customers</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Installment Sale</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Installment Collection</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->


          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-truck-moving"></i>
              <p>
                Purchase
              </p>
            </a>
          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Sale

              </p>
            </a>

          </li>
<!-- =================MENU ITEM LIST ================== -->


<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-truck-loading"></i>
              <p>
                Stock

              </p>
            </a>
 
          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-house-damage"></i>
              <p>
                Damage

              </p>
            </a>

          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Expense
              </p>
            </a>

          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-money-bill-alt"></i>
              <p>
                Supplier Due Payment

              </p>
            </a>

          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="{{url('DeuReceives')}}" class="nav-link">
              <i class="nav-icon fas fa-money-check"></i>
              <p>
                Customer Due Receive

              </p>
            </a>

          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-undo"></i>
              <p>
                Sale Return

              </p>
            </a>
 
          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-undo"></i>
              <p>
                Purchase Return
              </p>
            </a>

          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="{{url('/deposit-or-withdraw')}}" class="nav-link">
             <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Deposit Or Withdraw

              </p>
            </a>
 
          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-envelope nav-icon"></i>
              <p>
                Send SMS

              </p>
            </a>

          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-check nav-icon"></i>
              <p>
                Attendance

              </p>
            </a>

          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-quote-right nav-icon"></i>
              <p>
                Quotation

              </p>
            </a>

          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Database Backup

              </p>
            </a>

          </li>
<!-- =================MENU ITEM LIST ================== -->

<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Customer Due Receive</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Daily Summary</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Sale</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Service Sale</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Daily Sale</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>User Sale</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Product Sale</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Employee Sale</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Details Sale</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Stock</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Low Stock</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Profit Loss</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Product Profit</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Customer Profit</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Attendance</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Supplier Ledger</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Supplier Due</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Customer Due</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                 <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Customer Ledger</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Purchase</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                 <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Product Purchase</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Expense</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Purchase Return</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Sale Return</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Damage</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Installment</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->
<!-- SINGEL ITEM LIST -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Installment Due</p>
                </a>
              </li>
            </ul>
<!-- SINGEL ITEM LIST -->

          </li>
<!-- =================MENU ITEM LIST ================== -->


<!-- =================MENU ITEM LIST ================== -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-tools nav-icon"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Manage Users</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Change Profile</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>

          </li>
<!-- =================MENU ITEM LIST ================== -->



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    @yield('content')




  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer mt-5">
    <strong>Copyright &copy; 2014-2019 <a href="http://softechit.xyz">SoftTechIT</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
 <script type="text/javascript" src="https://cdn.tutorialjinni.com/toastr.js/2.1.4/toastr.min.js"></script>
<script type="text/javascript" src="{{asset('public/backend/dist/js/savy.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/backend/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/backend/dist/js/demo.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">

//$('.auto-save').savy('load') --> can be used without callback
$('.auto-save').savy('load',function(){
  console.log("All data from savy are loaded");

});

function dstry(){
  //$('.auto-save').savy('destroy') --> can be used without callback
  $('.auto-save').savy('destroy',function(){
    console.log("All data from savy are Destroyed");
    window.location.reload();
  });
}
</script>

  <script>
    @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
            case 'info':
                  toastr.info("{{Session::get('messege')}}");
                  break;
            case 'success':
                  toastr.success("{{Session::get('messege')}}");
                  break;
            case 'warning':
                  toastr.warning("{{Session::get('messege')}}");
                  break;
            case 'error':
                  toastr.error("{{Session::get('messege')}}");
                  break;

          }
          @endif
  </script>

<script>
  $(document).on('click','#delete',function(e){
    e.preventDefault();
    var link = $(this).attr('href');
  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
       window.location.href=link;
  } else {
    swal("Your imaginary file is safe!");
  }
});

});
</script>



</body>
</html>
