<?php include __DIR__ . '/header.php'; ?>
<body>
<div class="d-flex">
  <!-- Sidebar -->
  <?php include __DIR__ . '/sidebar.php'; ?>

  <!-- Main content -->
  <div class="flex-grow-1 d-flex flex-column">
    <!-- Topbar -->
    <?php include __DIR__ . '/navbar.php'; ?>

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

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>