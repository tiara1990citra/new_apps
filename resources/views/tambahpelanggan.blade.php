<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link rel="stylesheet" href="">
    <style>
        /* General styling */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #80a6f1;
}

.container {
    width: 400px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #5e6166;
}

form label {
    font-weight: bold;
    color: #333;
    margin-top: 10px;
}

form input {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
}

form input[readonly] {
    background-color: #f0f0f0;
    cursor: not-allowed;
}

.button-container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

button {
    width: 30%;
    padding: 10px;
    font-size: 16px;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.add-btn {
    background-color: #1e90ff;
}

.delete-btn {
    background-color: #ff4d4d;
}

.save-btn {
    background-color: #32cd32;
}

button:hover {
    opacity: 0.9;
}
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Pelanggan</h2>
        <form id="customerForm">
            <label for="id_pelanggan">ID Pelanggan:</label>
            <input type="text" id="id_pelanggan" name="id_pelanggan" >

            <label for="nama">Nama Pelanggan:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon" required>

            <div class="button-container">
                <button type="submit" class="save-btn">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>