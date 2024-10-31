<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Kucing - Admin</title>
    <link rel="stylesheet" href="\admin.css">
    <style>
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    height: 100vh;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #ADD8E6;
    padding: 10px 20px;
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    height: 30px;
    margin-right: 10px;
}

.admin-text {
    font-size: 18px;
    font-weight: bold;
}

.container {
    display: flex;
    height: 100%;
}

.sidebar {
    background-color: #D3D3D3;
    padding: 20px;
    width: 200px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.sidebar button {
    background-color: white;
    border: none;
    padding: 10px;
    border-radius: 20px;
    font-size: 14px;
    cursor: pointer;
    text-align: left;
}

.sidebar button:hover {
    background-color: #f0f0f0;
}

.content {
    flex-grow: 1;
    padding: 20px;
    background-color: white;
}
 
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="\image\icons8-cat-footprint-40.png" alt="Market Kucing Logo">
            <span>MARKET KUCING</span>
        </div>
        <div class="admin-text">
            Admin
        </div>
    </div>
    <div class="container">
        <div class="sidebar">
            <button>manajemen barang</button>
            <button>manajemen pelanggan</button>
            <button>transaksi</button>
            <button>transaksi detail</button>
        </div>
        <div class="content">
            <!-- Content will go here -->
        </div>
    </div>
</body>
</html>
