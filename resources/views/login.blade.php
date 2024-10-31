<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Kucing Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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

.container {
    display: flex;
    height: 80vh; /* Kurangi tinggi container */
    width: 80vw;  /* Batasi lebar container */
    margin: 150px; /* Pusatkan di tengah layar */
}

.left-section {
    background-color: #add8e6; /* Warna biru muda */
    width: 40%; /* Sesuaikan agar tidak terlalu lebar */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.left-section h1 {
    margin-top: 10px;
    font-size: 20px; /* Ukuran font lebih kecil */
    font-weight: bold;
}

.left-section .logo img {
    width: 100px; /* Ukuran logo lebih kecil */
}

.right-section {
    background-color: #f5f5f5;
    width: 60%; /* Bagian kanan lebih kecil */
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-box {
    width: 250px; /* Lebar box lebih kecil */
    background-color: white;
    padding: 15px; /* Padding lebih kecil */
    border-radius: 8px; /* Sudut sedikit melengkung */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan lebih halus */
}

.login-box h2 {
    margin-bottom: 15px; /* Kurangi margin bawah */
    text-align: center;
    font-size: 16px; /* Ukuran font lebih kecil */
    font-weight: bold;
}

.login-box label {
    display: block;
    margin: 8px 0 5px;
    font-size: 12px; /* Ukuran font lebih kecil */
    color: #333;
}

.login-box input {
    width: 100%;
    padding: 8px; /* Padding input lebih kecil */
    margin-bottom: 10px; /* Kurangi margin bawah */
    border: 1px solid #ccc;
    border-radius: 5px;
}

.login-box button {
    width: 100%;
    padding: 8px; /* Padding tombol lebih kecil */
    background-color: #ccc;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    color: #333;
}

.login-box button:hover {
    background-color: #aaa;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="logo">
                <img src="\image\icons8-cat-footprint-100.png" alt="Paw Icon">
            </div>
            <h1>MARKET KUCING</h1>
        </div>
        <div class="right-section">
            <div class="login-box"> 
</script>

<form action="{{ route('cekLogin') }}" method="POST">
    @csrf
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>


            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>


