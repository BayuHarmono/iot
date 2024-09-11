 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <?php if(!isset($_GET['page']) || $_GET['page'] == "dashboard" ){ ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link">Status Server</a>
      </li>
      <?php } ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://wa.me/0895622242525" class="nav-link">Whatsapp</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
