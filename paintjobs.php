<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>
    <!-- header -->
    <nav class="navbar custom-navbar">
        <div class="container d-flex justify-content-center align-items-center">
          <h1 class="navbar-text text-center" href="#">JUAN'S AUTO PAINT</h1>
        </div>
      </nav>
<!-- Navbar -->
       <nav class="navbar navbar-expand-sm navbar-custom">
        
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">New Paint Job</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="paintjobs.php">Paint Jobs</a>
            </li>
          </ul>

      </nav>

    

    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 p-3 text-center">
            <h1>Paint Jobs</h1>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <h6>Paint Jobs in Progress</h6>
            </div>
          </div>
        <div class="row">
          <div class="col-md-9">
                <table class="table table-bordered">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Plate No.</th>
                        <th scope="col">Current Color</th>
                        <th scope="col">Target Color</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody id="paint-jobs-table-body">
                    </tbody>
                  </table>
            </table>
          </div>
          <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    SHOP PERFORMANCE
                </div>
                <div class="card-body">
                    <table class="table  table-borderless">
                        <tbody>
                          <tr>
                            <td>Total Cars Painted:</td>
                            <td id="painted-count"></td>
                          </tr>
                          <tr>
                            <td>Breakdown:</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Blue</td>
                            <td id="blue-count"></td>
                          </tr>
                          <tr>
                            <td>Red</td>
                            <td id="red-count"></td>
                          </tr>
                          <tr>
                            <td>Green</td>
                            <td id="green-count"></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>

        </div>
        </div>

        <div class="row">
            <div class="col-md-12">
              <h6>Paint Queue</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
                  <table class="table table-bordered ">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Plate No.</th>
                          <th scope="col">Current Color</th>
                          <th scope="col" colspan="2">Target Color</th>
                        
                        </tr>
                      </thead>
                      <tbody id="paint-queue-table-body">
                      </tbody>
                    </table>
              </table>
            </div>
            </div>
        </div>
      </div>
      
</body>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/ajax.js"></script>

</html>