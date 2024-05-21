<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
            background-color: #F9EFDB;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }
        header{
            background-color: #B5C18E;
            color: black;
            padding: 20px;
            font-size: 24px;
            text-align: center; 
        }
        .container {
            max-width: 800px; 
            margin: 20px auto; 
            border-radius: 8px;
            overflow-x: auto; 
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #C7B7A3;
            color: floralwhite;
        }
        tr:hover {
            background-color: #F1F1F1;
        }
        .edit-link {
            color: blue;
            text-decoration: underline;
            cursor: pointer;
        }
        .edit-link:hover {
            color: ;
        }
    </style>
</head>
<body>

<header>Data Barang</header> 

<table>
    <tr>
        <th>No</th>
        <th>Nama Merek</th>
        <th>Warna</th>
        <th>Jumlah</th>
    </tr>
    <?php
    $sql = "SELECT * FROM inventaris";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $i = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $i++ . "</td>";
            echo "<td>" . $row['nama_merek'] . "</td>"; 
            echo "<td>" . $row['warna'] . "</td>"; 
            echo "<td>" . $row['jumlah'] . "</td>";  
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
    }
    $conn->close();
    ?>
</table>
</div>

<div style="text-align: center; margin-top: 20px;">
    <button onclick="window.location.href='index.php';">Kembali ke Menu Utama</button>
</div>


</body>
</html>