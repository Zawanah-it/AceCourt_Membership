<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Ensure session is started
}
?>

<!-- Load Bootstrap and Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
    <!-- Left: Logo -->
    <a class="navbar-brand d-flex align-items-center" href="admin_dashboard.php">
      <img src="image/ac_logo.png" class="logo" alt="AceCourt Logo">
      <span class="ms-2 brand-text">ace court</span>
    </a>

    <!-- Right: Logout or Login -->
    <div class="ms-auto">
      <?php if (isset($_SESSION['email']) && $_SESSION['role'] === 'admin'): ?>
        <a class="btn btn-primary btn-logout" href="logout.php">
          <i class="bi bi-box-arrow-right me-1"></i>Logout
        </a>
      <?php else: ?>
        <a class="nav-link text-white" href="login.php">Login</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
