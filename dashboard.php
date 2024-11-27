<?php
require_once('config.php');

$start_date = $_GET['start_date'] ?? null;
$end_date = $_GET['end_date'] ?? null;
$selected_country = $_GET['country'] ?? null;

$query = "SELECT * FROM request WHERE 1=1";
if ($start_date && $end_date) {
    $query .= " AND date BETWEEN '$start_date' AND '$end_date'";
}
if ($selected_country) {
    $query .= " AND country = '$selected_country'";
}

$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
    <title>Dashboard Page</title>
</head>
<body>
<header class="header py-3">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="logo">
      <img src="logomain.png" alt="ITTECH Logo" class="img-fluid" style="max-height: 50px;">
    </div>
    <div class="admin-login">
    <a href="logout.php">
        <img src="images/log-out.png" alt="Admin Login" style="width: 40px; height: 40px; cursor: pointer;">
    </a>
</div>
</header>
<div class="container my-4">
    <!-- Date Range Search -->
    <form method="GET" action="" class="row g-3">
        <div class="col-sm-6 col-md-3">
            <label for="start_date" class="form-label">From</label>
            <input type="date" id="start_date" name="start_date" value="<?php echo $_GET['start_date'] ?? ''; ?>" class="form-control form-control-sm">
        </div>
        <div class="col-sm-6 col-md-3">
            <label for="end_date" class="form-label">To</label>
            <input type="date" id="end_date" name="end_date" value="<?php echo $_GET['end_date'] ?? ''; ?>" class="form-control form-control-sm">
        </div>
        <div class="col-sm-6 col-md-3 d-flex align-items-end">
            <button type="submit" name="search_date" class="btn btn-primary btn-sm w-100">Search by Date</button>
        </div>
    </form>
    <!-- Country Search -->
    <form method="GET" action="" class="row g-3 mt-3">
        <div class="col-sm-6 col-md-3">
            <label for="country" class="form-label">Country</label>
            <select class="form-select form-select-sm" name="country" id="country">
                <option value="">Search By Country</option>
                <?php
                $selectcountry = "SELECT DISTINCT country FROM request";
                $querycountry = mysqli_query($conn, $selectcountry);
                while ($rowcountry = mysqli_fetch_assoc($querycountry)) {
                    $is_selected = ($_GET['country'] ?? '' == $rowcountry['country']) ? 'selected' : '';
                    echo "<option value='{$rowcountry['country']}' $is_selected>{$rowcountry['country']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2 col-md-3 d-flex align-items-end">
            <button type="submit" name="search_country" class="btn btn-primary btn-sm w-100">Search by Country</button>
        </div>
    </form>
</div>
<!-- DataTable -->
<div class="container p-3 my-5 bg-light border border-primary">
    <div class="table-responsive">
        <table id="example" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Sr.no</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Work Email</th>
                    <th>Company Name</th>
                    <th>Company Size</th>
                    <th>Job Role</th>
                    <th>Department</th>
                    <th>Country Code.</th>
                    <th>Phone Number</th>
                    <th>Country</th>
                    <th>Date</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['work_mail']; ?></td>
                    <td><?php echo $row['com_name']; ?></td>
                    <td><?php echo $row['com_size']; ?></td>
                    <td><?php echo $row['job_role']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><?php echo $row['country_code']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
