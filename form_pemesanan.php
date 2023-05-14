<?php require_once "atas.php" ?>
<?php require_once 'dbkoneksi.php' ?>
<br>
<br>
<br>
<br>
<style>
    .container {
      width: 500px;
      margin: 0 auto;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    
    button {
      padding: 10px 20px;
      background-color: none;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    button:hover {
      background-color: #45a049;
    }
  </style>
<div class="container">
    <form>
      <div class="form-group">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
      </div>
      
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      
      <div class="form-group">
        <label for="product">Produk:</label>
        <select id="product" name="product">
          <option value="product1">Produk 1</option>
          <option value="product2">Produk 2</option>
          <option value="product3">Produk 3</option>
          <option value="product3">Produk 4</option>
          <option value="product3">Produk 5</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="quantity">Jumlah:</label>
        <input type="number" id="quantity" name="quantity" required>
      </div>
      
      <button type="submit"><a href="form_pesananditerima.php">Pesan Sekarang</button></a>
    </form>
  </div>
<?php require_once "bawah.php" ?>