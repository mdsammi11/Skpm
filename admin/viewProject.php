<?php $page = "plots";
require './assets/components/head.php' ?>
<title>View Project</title>
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
            <h1>Project</h1>
            <div class="btns">
              <a href="./project.php" class="btn btn-danger btn-sm">Cancel</a>
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
                        <label for="id_no" class="form-label">Project Name</label>
                        <input type="text" class="form-control" readonly id="id_no" placeholder="Project Name"
                          name="id_no">
                      </div>
                      <div class="col-md-12 form-group">
                        <label for="catagori" class="form-label">Location</label>
                        <input type="text" class="form-control" readonly id="catagori" placeholder="Location"
                          name="catagori">
                      </div>
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="rg_no" class="form-label">Start Date</label>
                      <input type="text" class="form-control" readonly id="rg_no" placeholder="Date" name="rg_no">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="nam" class="form-label">Description</label>
                      <input type="text" class="form-control" readonly id="nam" placeholder="Type Description"
                        name="nam">
                    </div>
                    <div class="col-12 mt-4">
                      <a href="./editProject.php" class="btn btn-primary">Edit</a>
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