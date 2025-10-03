<?php include '../../Includes/header.php'; ?>
<body>
<div class="d-flex">
  <!-- Sidebar -->
  <?php include '../../Includes/sidebar.php'; ?>

  <!-- Main content -->
  <div class="flex-grow-1 d-flex flex-column">
    <!-- Topbar -->
    <?php include '../../Includes/navbar.php'; ?>

    <!-- Content -->
    <main class="p-4 overflow-auto">
      <div class="row g-3 mb-4">
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>Numbers</small><div class="h4 fw-bold">12,480</div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>Percentage</small><div class="h4 fw-bold">3.4%</div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>Time</small><div class="h4 fw-bold">03:21</div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><small>Things</small><div class="h4 fw-bold">27</div></div></div>
      </div>
      
      <div class="row g-3">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">Traffic Overview</div>
            <div class="card-body" style="height:300px;">
              <p class="text-muted">Will be added soon</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">Top Sources</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center">Something <span class="badge bg-success">54%</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">Something <span class="badge bg-secondary">23%</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">Something <span class="badge bg-secondary">15%</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">Something <span class="badge bg-secondary">8%</span></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="card mt-4">
        <div class="card-header d-flex justify-content-between">
          <span>Recent Events</span>
          <small class="text-muted">24 hours</small>
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

<?php include '../../Includes/chatbot-widget.html'; ?>
<?php include '../../Includes/footer.php'; ?>
</body>
</html>


