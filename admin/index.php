<?php

session_start();
if ($_SESSION["email"] === null) {
  header("location: /portalberita/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/logo2.png" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="img/Page.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Event Suroboyo</title>
</head>

<body>
  <nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="../img/admin.png" class="logo" alt="">
      <span class="hide"><?php echo $_SESSION["email"]; ?></span>
    </div>

    <div class="sidebar-links">
      <ul>
        <div class="active-tab">
          <li class="tooltip-element" data-tooltip="0">
            <a href="#" data-active="0">
              <div class="icon">
                <i class='bx bx-tachometer'></i>
                <i class='bx bxs-tachometer'></i>
              </div>
              <span class="link hide">Dashboard</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="0">
            <a href="#Page" data-active="0">
              <div class="icon">
                <i class='bx bx-notepad'></i>
                <i class='bx bxs-notepad'></i>
              </div>
              <span class="link hide">Page</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="0">
            <a href="../index.php" data-active="0">
              <div class="icon">
                <i class='bx bx-world'></i>
                <i class='bx bxs-world'></i>
              </div>
              <span class="link hide">My Page</span>
            </a>
          </li>


          <div class="tooltip">
            <span class="show">Dashboard</span>
            <span>Page</span>
          </div>
          <div class="admin-user tooltip-element" data-tooltip="1">
            <a href="../db/act-signout.php" class="log-out">
              <i class='bx bx-log-out'></i>
            </a>
          </div>
        </div>
      </ul>
    </div>
  </nav>


  <main>
    <section class="siswa-dashboard" data-section="dashboard">
      <div class="mb-5 mb-lg-0 text-center text-lg-start">
        <h3 class="fw-bold text-center">Admin Event Suroboyo</h3>
      </div>
    </section>
    <div class="col-md-6">
      <div class="container rounded-10">
          <h3 class="text-dark"><strong>Overview</strong></h3>
          <h6 class="mb-3 text-dark">of News Category</h6>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load('current', {
              'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([
                ['category', 'id'],
                <?php
                include '../db/db-conn.php';
                $sql = "SELECT * FROM portalweb";
                $calc = mysqli_query($conn, $sql);
                while ($result = mysqli_fetch_assoc($calc)) {
                  echo "['" . $result['category'] . "'," . $result['id'] . "],";
                }
                ?>
              ]);

              var options = {
                width: '100%',
                height: '500px'
              };

              var chart = new google.visualization.PieChart(document.getElementById('piechart'));

              chart.draw(data, options);
            }
          </script>
          <div id="piechart"></div>
      </div>
    </div>
    </div>
    <section class="siswa-Page" id="Page">
      <div class="container" style="background-color:#fff; padding-bottom:20px; padding-top:15px; margin-top:15px; border-radius: 10px 10px 10px 10px;">
        <div class="row">
          <div class="col-6">
            <h3 style="margin-top:10px; margin-bottom:25px;"><b>Portal Berita</b></h3>
          </div>
          <div class="col-6 text-end">
            <a href="../db/act-create.php">
              <button type="button" class="btn btn-outline-primary" style="margin-bottom:-10px; margin-top:10px;"><i class="fas fa-plus"> Add Current News</i></button></a>
          </div>
        </div>
        <table id="example" class="table table-striped table-bordered" style="background-color:#fff; width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Tagline</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Tagline</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            include "../db/db-conn.php";
            $sql = "SELECT * FROM portalweb";
            $queri = mysqli_query($conn, $sql);

            $no = 1;
            while ($data = mysqli_fetch_array($queri)) {
            ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data['tagline']; ?></td>
                <td><?php echo $data['category']; ?></td>
                <td style="text-align:center;">
                  <a href="../db/act-update.php?updateid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-success text-white" name="update" id="update"><i class="fas fa-edit"> Edit</i></button></a>
                  <a href="../db/act-delete.php?deleteid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-danger text-white" name="delete" id="delete" onclick="return confirm('are you sure to delete?')"><i class="fas fa-trash"> Delete</i></button></a>
                </td>
              </tr>
            <?php
              $no++;
            }
            ?>
          </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap.min.js"></script>
        <script>
          $(document).ready(function() {
            var table = $('#example').DataTable({
              responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
          });
        </script>
      </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
      </div>

      </div>
      </div>
      </div>

      <p class="copyright">
        &copy; 2022 - <span>Kurniawan Try Yudha</span> All Rights Reserved.
      </p>

  </main>

  <script src="app.js"></script>

</body>

</html>