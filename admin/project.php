<?php $page = "plots";
require './assets/components/head.php' ?>
<title>Project</title>
<style>
  .row a img {
    height: 50px;
    aspect-ratio: 1/1;
  }
</style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <?php require './assets/components/navbar.php' ?>

      <?php require './assets/components/sidebar.php' ?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Add Project</h1>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Project List</h4>
                  <div class="card-header-action">
                    <a href="./addProject.php" class="btn btn-primary">+ Add Project</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <th>Image</th>
                          <th>Project Name</th>
                          <th>Location</th>
                          <th>Start Date</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td scope="row">
                            <a href="#">
                              <img src="./assets/img/sr1.jpg" alt="">
                            </a>
                          </td>
                          <td>Dami Project</td>
                          <td>India</td>
                          <td>12/12/2020</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ea vitae voluptatum.</td>
                          <td>
                            <a href="./viewProject.php" class="btn btn-primary">View</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        <tr>
                          <td scope="row">
                            <a href="#">
                              <img src="./assets/img/sr2.jpg" alt="">
                            </a>
                          </td>
                          <td>Dami Project</td>
                          <td>India</td>
                          <td>12/12/2020</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ea vitae voluptatum.</td>
                          <td>
                            <a href="./viewProject.php" class="btn btn-primary">View</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
      </div>
    </div>
  </div>
  <?php require './assets/components/script.php' ?>
</body>

</html>