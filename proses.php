<?php

include("koneksi.php");

// Create the table if it doesn't exist
$query = "CREATE TABLE IF NOT EXISTS inventaris (
    no INT AUTO_INCREMENT PRIMARY KEY,
    nama_merek VARCHAR(255) NOT NULL,
    warna VARCHAR(255) NOT NULL,
    jumlah INT NOT NULL
)";

if ($conn->query($query) === TRUE) {
    // The table was created successfully, so proceed with the rest of the script
} else {
    echo "Error creating table: " . $conn->error;
}

// Get the form data
$no = $_POST['no'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

// Check if the product already exists
$query = "SELECT * FROM inventaris WHERE no = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $no);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Update the existing product
    $query = "UPDATE inventaris SET nama_merek = ?, warna = ?, jumlah = ? WHERE no = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssii", $nama_merek, $warna, $jumlah, $no);
} else {
    // Insert a new product
    $query = "INSERT INTO inventaris (nama_merek, warna, jumlah) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssi", $nama_merek, $warna, $jumlah);
}

// Execute the query
if ($stmt->execute()) {
    header("Location: hasil.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

// Close the statement and the connection
$stmt->close();
$conn->close();

?>