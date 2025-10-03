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
<?php include './content/section1.php'; ?>
<?php include './content/section2.php'; ?>
<?php include './content/section3.php'; ?>
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