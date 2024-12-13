<?php $page = "news_room";
require './assets/components/head.php' ?>
<title>Add Services</title>
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
            <h1>Add Services</h1>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Services List</h4>
                  <div class="card-header-action">
                    <a href="./addServices.php" class="btn btn-primary">+ Add Services</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <th>Image</th>
                          <th>Services Name</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td scope="row">
                            <a href="#">
                              <img src="./assets/img/sr1.jpg" alt="">
                            </a>
                          </td>
                          <td>Dami Services</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ea vitae voluptatum.</td>
                          <td>
                            <a href="./viewService.php" class="btn btn-primary">View</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        <tr>
                          <td scope="row">
                            <a href="#">
                              <img src="./assets/img/sr2.jpg" alt="">
                            </a>
                          </td>
                          <td>Dami Services</td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ea vitae voluptatum.</td>
                          <td>
                            <a href="./viewService.php" class="btn btn-primary">View</a>
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