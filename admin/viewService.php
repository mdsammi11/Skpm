<?php $page = "news_room";
require './assets/components/head.php' ?>
<title>View Services</title>
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
          <div class="section-header d-flex justify-content-between">
            <h1>Services</h1>
            <div class="btns">
              <a href="./services.php" class="btn btn-danger btn-sm">Cancel</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <form class="row g-3">
                    <div class="col-md-4 form-group view-img">
                      <label for="image" class="form-label">Upload Image</label>
                      <img src="./assets/img/sr1.jpg" alt="" width="190">
                    </div>
                    <div class="col-md-8 form-group">
                      <div class="col-md-12 form-group">
                        <label for="id_no" class="form-label">Services Name</label>
                        <input type="text" class="form-control" readonly id="id_no" placeholder="Services Name"
                          name="id_no">
                      </div>
                      <div class="col-md-12 form-group">
                        <label for="nam" class="form-label">Description</label>
                        <input type="text" class="form-control" readonly id="nam" placeholder="Type Description"
                          name="nam">
                      </div>
                    </div>
                    <div class="col-12 mt-4">
                      <a href="./editServices.php" class="btn btn-primary">Edit</a>
                      <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- row end -->

        </section>
      </div>
    </div>
  </div>
  <?php require './assets/components/script.php' ?>
  <script>
    let table = new DataTable('#myTable');
  </script>
</body>

</html>