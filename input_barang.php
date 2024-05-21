<!DOCTYPE html>
<html>
<head>
    <title>Input Output Produk - Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-color: #F9EFDB;
            font-family: georgia;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 70px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header{
            background-color: #B5C18E;
            color: black;
            padding: 20px;
            font-size: 24px;
            text-align: center; 
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            padding: 0 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            text-align: left;
        }
        input[type="text"],
        input[type="number"] {
            width: calc(100% - 40px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"],
        a.button {
            background-color: #B5C18E;
            color: black;
            padding: 12px 15px; 
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: auto; 
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            text-align: center;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover,
        a.button:hover {
            background-color: #EADBC8;
        }
        .button-group {
            text-align: left;
            margin-top: 20px;
        }
    </style>

</head>
<body>

<header>Tambah Data Barang</header>

<div class="container">
   
<form method="post" action="proses.php">
    <label for="no">No:</label>
    <input type="text" id="no" name="no" required><br>
    <label for="nama_merek">Nama Merek:</label>
    <input type="text" id="nama_merek" name="nama_merek" required><br>
    <label for="warna">Warna:</label>
    <input type="text" id="warna" name="warna" required><br>
    <label for="jumlah">Jumlah:</label>
    <input type="number" id="jumlah" name="jumlah" required><br>
    
    <div class="button-group">
        <input type="submit" value="Simpan">
        <input type="reset" value="Ulangi">
        <a href="index.php" class="button">Kembali</a>
    </div>
</form>
</div>

</body>
</html>