<?php $page = "plots";
require './assets/components/head.php' ?>
<title>Edit Project</title>
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
            <h1>Edit Project</h1>
            <div class="btns">
              <a href="./viewProject.php" class="btn btn-danger btn-sm">Cancel</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <form class="row g-3">
                    <div class="col-md-6 form-group">
                      <label for="image" class="form-label">Upload Image</label>
                      <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="id_no" class="form-label">Project Name</label>
                      <input type="text" class="form-control" id="id_no" placeholder="Project Name" name="id_no">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="catagori" class="form-label">Location</label>
                      <select class="form-control" id="catagori" name="catagori">
                        <option value="">Select Category</option>
                        <option value="">India</option>
                        <option value="">Kolkata</option>
                        <option value="">Mumbai</option>
                        <option value="">Delhi</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="rg_no" class="form-label">Start Date</label>
                      <input type="date" class="form-control" id="rg_no" placeholder="Date" name="rg_no">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="nam" class="form-label">Description</label>
                      <input type="text" class="form-control" id="nam" placeholder="Type Description" name="nam">
                    </div>
                    <div class="col-12 mt-4">
                      <button type="submit" class="btn btn-primary px-5">Submit</button>
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