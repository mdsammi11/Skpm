<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand pt-2">
      <img src="./assets/img/logo.png" class="rounded-circle width-cng">
      <a href="dashboard.php">SKPM Services</a>
    </div>
    <ul class="sidebar-menu pt-2">
      <li class="<?php if ($page == 'dashboard')
        echo 'active' ?>">
          <a href="./dashboard.php" class="nav-link">
            <i class="fa-solid fa-grip"></i><span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if ($page == 'news_room')
        echo 'active' ?>">
          <a href="./services.php" class="nav-link">
            <i class="fa-solid fa-user-group"></i><span>Add Services</span>
          </a>
        </li>
        <li class="<?php if ($page == 'plots')
        echo 'active' ?>">
          <a href="./project.php" class="nav-link">
            <i class="fa-regular fa-newspaper"></i><span>Add Project</span>
          </a>
        </li>
        <li class="<?php if ($page == 'quarry')
        echo 'active' ?>">
          <a href="./quarry.php" class="nav-link">
            <i class="fa-solid fa-file-pen"></i><span>Service Quarry</span>
          </a>
        </li>
        <li class="<?php if ($page == 'contact')
        echo 'active' ?>">
          <a href="./contact.php" class="nav-link">
            <i class="fa-solid fa-address-book"></i><span>Contact</span>
          </a>
        </li>
        <li class="<?php if ($page == 'logout')
        echo 'active' ?>">
          <a href="#!" class="nav-link">
            <i class="fa-solid fa-right-from-bracket"></i><span>logout</span>
          </a>
        </li>

      </ul>

    </aside>
  </div>