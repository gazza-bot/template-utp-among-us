<h2>Daftar Ransum</h2>
<table>
    <tr>
        <th>Ransum</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>Pizza Segitiga Polus</td>
        <td>Rp25.000</td>
    </tr>
    <tr>
        <td>Susu Elektrik Electrical</td>
        <td>Rp18.000</td>
    </tr>
    <tr>
        <td>Space Donut Oxygen</td>
        <td>Rp15.000</td>
    </tr>
    <tr>
        <td>Jus Berry MedBay</td>
        <td>Rp20.000</td>
    </tr>
    <tr>
        <td>Emergency Steak Navigation</td>
        <td>Rp45.000</td>
    </tr>
</table>

<h2>Form Pemesanan</h2>
<form action="proses.php" method="post">
    <label for="nama">Nama</label>
    <br>
    <input type="text" name="nama" id="" required>
    <br>
    <br>
    <!-- Input Pilihan Ransum -->
    <label for="menu">Pilihan menu</label>
    <br>
    <select name="menu" id="" required>
        <option value="Pizza Segitiga Polus">Pizza Segitiga Polus</option>
        <option value="Susu Elektrik Electrical">Susu Elektrik Electrical</option>
        <option value="Space Donut Oxygen">Space Donut Oxygen</option>
        <option value="Jus Berry MedBay">Jus Berry MedBay</option>
        <option value="Emergency Steak Navigation">Emergency Steak Navigation</option>
    </select>
    <br>
    <br>
    <!-- Input Jumlah -->
    <label for="jumlah">Jumlah Pesanan</label>
    <br>
    <input type="number" name="jumlah" id="" required>
    <br>
    <!-- Input Pilihan Jenis Pelanggan -->
    <label for="kategori">Jenis Pelanggan</label>
    <br>
    <select name="kategori" id="" required>
        <option value="Impostor">Impostor</option>
        <option value="Crewmate">Crewmate</option>
    </select>
    <br>
    <!-- Submit -->
    <input type="submit" value="Pesan">
</form>