<?php
include "db_conn.php";

// Retrieve ID from query parameter and validate it
$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;

if ($id <= 0) {
    die("Invalid ID");
}

// Fetch existing data for the given ID
$sql = "SELECT * FROM `customer` WHERE id = ? LIMIT 1";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
} else {
    die("Failed to fetch record: " . mysqli_error($conn));
}

if (empty($row)) {
    die("No data found for the given ID");
}

// Check if form was submitted
if (isset($_POST["submit"])) {
    // Retrieve updated values from form
    $part_name = isset($_POST["part_name"]) ? $_POST["part_name"] : '';
    $brand = isset($_POST["brand"]) ? $_POST["brand"] : '';
    $price = isset($_POST["price"]) ? (float)$_POST["price"] : 0;
    $quantity = isset($_POST["quantity"]) ? (int)$_POST["quantity"] : 0;
    $availability = isset($_POST["availability"]) ? $_POST["availability"] : 'no';

    // Use prepared statement to update multiple fields
    $update_sql = "UPDATE `crud` SET `part_name` = ?, `brand` = ?, `price` = ?, `quantity` = ?, `availability` = ? WHERE id = ?";
    $update_stmt = mysqli_prepare($conn, $update_sql);

    if ($update_stmt) {
        // Correct data type specifiers and parameter binding
        mysqli_stmt_bind_param($update_stmt, "ssdiss", $part_name, $brand, $price, $quantity, $availability, $id);
        
        if (mysqli_stmt_execute($update_stmt)) {
            // Redirect to index.php with success message
            header("Location: index.php?msg=Data updated successfully");
            exit;
        } else {
            die("Failed to update record: " . mysqli_stmt_error($update_stmt));
        }
        
        mysqli_stmt_close($update_stmt);
    } else {
        die("Failed to prepare update statement: " . mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>PHP CRUD Application - Edit</title>
</head>
<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    Inventory Management System
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit Part Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Part Name:</label>
            <input type="text" class="form-control" name="part_name" value="<?php echo htmlspecialchars($row['part_name']); ?>">
          </div>
          <div class="col">
            <label class="form-label">Brand:</label>
            <input type="text" class="form-control" name="brand" value="<?php echo htmlspecialchars($row['brand']); ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Price:</label>
          <input type="number" class="form-control" name="price" value="<?php echo htmlspecialchars($row['price']); ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Quantity:</label>
          <input type="number" class="form-control" name="quantity" value="<?php echo htmlspecialchars($row['quantity']); ?>">
        </div>

        <div class="form-group mb-3">
          <label>Availability:</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="availability" id="yes" value="yes" <?php echo ($row["availability"] == 'yes') ? "checked" : ""; ?>>
          <label for="yes">YES</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="availability" id="no" value="no" <?php echo ($row["availability"] == 'no') ? "checked" : ""; ?>>
          <label for="no">NO</label>
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
