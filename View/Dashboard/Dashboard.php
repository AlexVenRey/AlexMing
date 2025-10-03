<?php include dirname(__DIR__, 2) . '/Includes/header.php'; ?>
<body>
<div class="d-flex">
  <!-- Sidebar -->
  <?php include dirname(__DIR__, 2) . '/Includes/sidebar.php'; ?>

  <!-- Main content -->
  <div class="flex-grow-1 d-flex flex-column">
    <!-- Topbar -->
    <?php include dirname(__DIR__, 2) . '/Includes/navbar.php'; ?>

    <!-- Content -->
    <main class="p-4 overflow-auto">
      <div class="row g-3 mb-4">
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>Numbers</small><div class="h4 fw-bold">320</div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>Percentage</small><div class="h4 fw-bold">12%</div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>Numbers</small><div class="h4 fw-bold">1,024</div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>Numbers</small><div class="h4 fw-bold">8,540</div></div></div>
      </div>

      <div class="row g-3">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">A table</div>
            <div class="card-body" style="height:260px;">
              <p class="text-muted">Something here</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">Recent Activity</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Something<small class="text-muted d-block">X minutes ago</small></li>
              <li class="list-group-item">Something <small class="text-muted d-block">X hour ago</small></li>
              <li class="list-group-item">Something <small class="text-muted d-block">X hours ago</small></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="card mt-4">
        <div class="card-header d-flex justify-content-between">
          <span>Something</span>
          <small class="text-muted">Well</small>
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
                <td>Td</td>
                <td>Td</td>
                <td>Td</td>
                <td>Td</td>
                <td><span class="badge bg-success">Active</span></td>
              </tr>
              <tr>
                <td>Td</td>
                <td>Td</td>
                <td>Td</td>
                <td>Td</td>
                <td><span class="badge bg-secondary">Non active</span></td>
              </tr>
              <tr>
                <td>Td</td>
                <td>Td</td>
                <td>Td</td>
                <td>Td</td>
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

<?php include dirname(__DIR__, 2) . '/Includes/chatbot-widget.html'; ?>
<?php include dirname(__DIR__, 2) . '/Includes/footer.php'; ?>
</body>
</html>