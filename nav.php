<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Customers</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#customers" aria-expanded="false" aria-controls="customers">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Customers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="customers">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="addcustomers.php">Add Customers</a></li>
          <li class="nav-item"> <a class="nav-link" href="customers.php">Customers</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item nav-category">Producst</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false" aria-controls="products">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Products</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="products">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="addproducts.php">Add Products</a></li>
          <li class="nav-item"> <a class="nav-link" href="products.php">Products</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
