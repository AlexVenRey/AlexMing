<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acme Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/Dashboard.css">
</head>
<body>
<div class="d-flex">
  <!-- Sidebar -->
  <aside class="sidebar d-none d-md-flex flex-column p-3">
    <h2 class="h4 fw-bold mb-0">Dashboard</h2>
    <small class="text-muted">Dashboard v1</small>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li><a href="#" class="nav-link"><i class="bi bi-house me-2"></i> Home</a></li>
      <li><a href="#" class="nav-link"><i class="bi bi-people me-2"></i> Users</a></li>
      <li><a href="#" class="nav-link"><i class="bi bi-bar-chart me-2"></i> Analytics</a></li>
      <li><a href="#" class="nav-link"><i class="bi bi-gear me-2"></i> Settings</a></li>
    </ul>
    <hr>
    <a href="#" class="btn btn-light w-100">Logout</a>
  </aside>

  <!-- Main content -->
  <div class="flex-grow-1 d-flex flex-column">
    <!-- Topbar -->
    <header class="d-flex justify-content-between align-items-center p-3 bg-white border-bottom">
      <h5 class="mb-0">Dashboard</h5>
      <div class="d-flex align-items-center gap-3">
        <button class="btn btn-light position-relative">
          <i class="bi bi-bell"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></span> <!-- Notification -->
        </button>
        <div class="d-flex align-items-center">
          <div class="me-2 text-end">
            <div class="fw-semibold">Jane Admin</div>
            <small class="text-muted">Administrator</small>
          </div>
          <div class="rounded-circle bg-secondary" style="width:36px; height:36px;"></div>
        </div>
      </div>
    </header>

    <!-- Content -->
    <main class="p-4 overflow-auto">
      <!-- Stats -->
      <div class="row g-3 mb-4">
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>New Orders</small><div class="h4 fw-bold">320</div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>Bounce Rate</small><div class="h4 fw-bold">12%</div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>User Registrations</small><div class="h4 fw-bold">1,024</div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>Unique Visitors</small><div class="h4 fw-bold">8,540</div></div></div>
      </div>

      <!-- Recent Activity -->
      <div class="row g-3">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">Weekly Active Users</div>
            <div class="card-body" style="height:260px;">
              <p class="text-muted">[Insert Chart.js or other chart here]</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">Recent Activity</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">New user registered <small class="text-muted d-block">10 minutes ago</small></li>
              <li class="list-group-item">Server backup completed <small class="text-muted d-block">1 hour ago</small></li>
              <li class="list-group-item">Payment received <small class="text-muted d-block">3 hours ago</small></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Table -->
      <div class="card mt-4">
        <div class="card-header d-flex justify-content-between">
          <span>Latest Members</span>
          <small class="text-muted">Showing 10 of 230</small>
        </div>
        <div class="table-responsive">
          <table class="table table-striped mb-0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Signup</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Anna Smith</td>
                <td>anna@example.com</td>
                <td>Editor</td>
                <td>2025-09-11</td>
                <td><span class="badge bg-success">Active</span></td>
              </tr>
              <tr>
                <td>Mark Johnson</td>
                <td>mark@example.com</td>
                <td>Subscriber</td>
                <td>2025-09-09</td>
                <td><span class="badge bg-secondary">Inactive</span></td>
              </tr>
              <tr>
                <td>Linda Lee</td>
                <td>linda@example.com</td>
                <td>Admin</td>
                <td>2025-09-02</td>
                <td><span class="badge bg-success">Active</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="p-3 bg-white border-top text-muted small">
      © <?php echo date('Y'); ?> Rights.
    </footer>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>