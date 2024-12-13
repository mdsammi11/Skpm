<?php $page = "contact";
require './assets/components/head.php' ?>
<title>Contact</title>
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
            <h1>Contact</h1>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Contact List</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td>Anuj</td>
                          <td>anuj@gmaail.com</td>
                          <td>1234567890</td>
                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eum obcaecati facere.</td>
                          <td>
                            <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Anuj</td>
                          <td>anuj@gmaail.com</td>
                          <td>1234567890</td>
                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eum obcaecati facere.</td>
                          <td>
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