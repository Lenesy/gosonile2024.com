<?php
// Start the session
session_start();
include('dbcn.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT id, firstname, lastname, email, address, phonenumber, password FROM register WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $supplier = $result->fetch_assoc();
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Supplier</title>
</head>
<body>
    <form action="update_supplier.php" method="post">
        <?php if ($supplier): ?>
            <input type="hidden" id="id" name="id" value="<?php echo $supplier['id']; ?>"><br>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?php echo $supplier['name']; ?>" required><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" value="<?php echo $supplier['email']; ?>" required><br><br>
            <input type="submit" value="Update">
        <?php else: ?>
            <p>Supplier not found.</p>
        <?php endif; ?>
    </form>
</body>
</html>
