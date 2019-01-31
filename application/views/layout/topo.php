<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

	<title><?php echo $titulo ?></title>

	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('dist/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('dist/bootstrap/css/dashboard.css') ?>" rel="stylesheet">
</head>

<body>
  <!-- TOPO -->
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-1 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Wise</a>
      <input class="form-control form-control-dark w-50" type="text" placeholder="Pesquisar..." aria-label="Search">
      <ul class="navbar-nav px-4">
        <li class="nav-item text-nowrap">
          <a class="nav-link" style="" href="#">Sair</a>
        </li>
      </ul>
    </nav>
    <!-- FIM TOPO -->

    <!-- MENU LATERAL -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Principal <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Link 1
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Link 2
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Link 3
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Link 4
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Link 5
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- FIM DO MENU LATERAL -->