<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Kucing - Transaksi</title>
    <link rel="stylesheet" href="">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body, html {
    height: 100%;
    font-family: Arial, sans-serif;
}

.header {
    background-color: #add8e6; /* Warna biru muda */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border-bottom: 2px solid #ccc;
}

.logo-section {
    display: flex;
    align-items: center;
}

.logo {
    width: 40px;
    margin-right: 10px;
}

.header h1 {
    font-size: 20px;
    font-weight: bold;
}

.header h2 {
    font-size: 18px;
    font-weight: bold;
}

.main-container {
    display: flex;
    height: calc(100vh - 80px); /* Sisakan tempat untuk header */
}

.sidebar {
    width: 20%;
    background-color: #e0e0e0; /* Warna abu-abu muda */
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.sidebar button {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    background-color: white;
    border: none;
    border-radius: 20px;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
}

.sidebar button:hover {
    background-color: #ccc;
}

.content {
    width: 80%;
    padding: 20px;
    display: flex;
    flex-direction: column;
}

.form-section {
    margin-bottom: 20px;
}

.form-section form {
    display: flex;
    flex-direction: column;
}

.form-section label {
    margin: 10px 0 5px;
    font-size: 14px;
}

.form-section input {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

.buttons button {
    padding: 8px 16px;
    background-color: #ccc;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
}

.buttons button:hover {
    background-color: #aaa;
}

.table-section {
    width: 100%;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
    background-color: #e0e0e0;
}

table th {
    background-color: #add8e6;
    font-weight: bold;
}

    </style>
</head>
<body>
    <div class="header">
        <div class="logo-section">
            <img src="image\icons8-cat-footprint-40.png" alt="Paw Icon" class="logo">
            <h1>MARKET KUCING</h1>
        </div>
        <h2>PELANGGAN</h2>
    </div>

    <div class="main-container">
        <div class="sidebar">
            <button>Manajemen Barang</button>
            <button>Manajemen Pelanggan</button>
            <button>Transaksi</button>
            <button>Transaksi Detail</button>
        </div>

        <div class="content">
            <div class="form-section">
                <form>
                    <label for="id-transaksi">Id pelanggan</label>
                    <input type="text" id="id-pelanggan" name="id-pelanggan">
                    
                    <label for="id-pelanggan">Telefon</label>
                    <input type="text" id="telefon" name="telefon">
                    
                    <label for="tanggal">Total</label>
                    <input type="text" id="total" name="total">
                    
                    <label for="total">Nama pelanggan</label>
                    <input type="text" id="nama pelanggan" name="nama pelanggan">

                    <label for="total">Alamat</label>
                    <input type="text" id="alamat" name="alamat">

                    <label for="total">Kembalian</label>
                    <input type="text" id="kembalian" name="kembalian">
                    
                </form>
                <div class="buttons">
                    <button type="button">Tambah</button>
                    <button type="button">Simpan</button>
                    <button type="button">Hapus</button>
                </div>
            </div>

            <div class="table-section">
                <table>
                    <thead>
                        <tr>
                            <th>Id pelanggan</th>
                            <th>Telefon</th>
                            <th>Total</th>
                            <th>Nama pelanggan</th>
                            <th>Alamat</th>
                            <th>Kembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Isi data transaksi di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
