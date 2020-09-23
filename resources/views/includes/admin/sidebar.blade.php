<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Charts -->
  <li class="nav-item {{ request()->is('post') ? ' active' : '' }}">
    <a class="nav-link" href="{{ route('post.index') }}">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Artikel</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('messages.index') }}">
      <i class="fas fa-fw fa-comment-dots"></i>
      <span>Pesan</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('cabang-olahraga.index') }}">
      <i class="fas fa-fw fa-trophy"></i>
      <span>Cabang Olahraga</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
